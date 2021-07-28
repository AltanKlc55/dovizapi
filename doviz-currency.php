
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div style="padding-top:30px;" class="container">
	
<?php 	
$eur_al = "";
$eur_sat = "";
$usd_al = "";
$usd_sat = "";
$gbp_al = "";
$gbp_sat = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$eur_al = $_POST['eur_al'];
	$eur_sat = $_POST['eur_sat'];

	$usd_al = $_POST['usd_al'];
	$usd_sat = $_POST['usd_sat'];

	$gbp_al = $_POST['gbp_al'];
	$gbp_sat = $_POST['gbp_sat'];

}


 ?>

<h1>Harem Altın Sistemi</h1>
<p>Harem Altın sisteminde , ekstra pay sadece harem altının panelinden eklenebilmektedir..
<br>
Harem Altın Panelinden Eklendikten Sonra Web Sayfasına Değişiklik yapılmaktadır.
<br>
Değişim işleminin admin panelinden yapılabilmesi için api başvurusu yapılmalıdır.
</p>


<iframe src='https://www.haremaltin.com/piyasa_fiyatim?token=8599274886168fecc9b4465c6b9faf68' style='width:500px;height:500px;border:none;' >
</iframe>


<h1>Genel Para Döviz Sistemi</h1>

<iframe src="https://www.genelpara.com/grafik/?list=grafik&symbol=USDTRY" frameborder="0" width="760" height="480"></iframe>

<br>
<br>
<br>

<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
?>

<div class="container">

<h3>Dövizin değişiklik yapılabilen Alanı  Veriler genelpara.com dan çekilmektedir.</h3>
<p>Veriler kendini 60 dakikada bir güncellemektedir.</p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">KUR</th> 
      <th scope="col">ALIŞ</th>
      <th scope="col">SATIŞ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="col">USD</th>   
      <td><?php echo $JSON['USD']['alis']+$usd_al; ?></td>
      <td><?php echo $JSON['USD']['satis']+$usd_sat; ?></td>
    </tr>
    <tr>
      <th scope="col">EUR</th>
      <td><?php echo $JSON['EUR']['alis']+$eur_al; ?></td>
      <td><?php echo $JSON['EUR']['satis']+$usd_sat; ?></td>
    </tr>
    <tr>
    <th scope="col">GBP</th>
      <td><?php echo $JSON['GBP']['alis']+$gbp_al; ?></td>
      <td><?php echo $JSON['GBP']['satis']+$usd_sat; ?></td>
    </tr>
  </tbody>
</table>

</div>

<div style="padding-top:30px;">
	<h2>Dövizi Değiştir</h2>
	<p>Bu alana girdiğiniz miktarlar yukarıdaki tabloda yer alan döviz miktarıyla sizin ekleme yaptığınız miktarı toplamaktadır</p>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">USD Alış</label>
    <input type="text" class="form-control" id="usd_al" name="usd_al">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">USD Satış</label>
    <input type="text" class="form-control" name="usd_sat" id="usd_sat">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">EUR Alış</label>
    <input type="text" class="form-control" name="eur_al" id="eur_al">
  </div>

      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">EUR Satış</label>
    <input type="text" class="form-control" name="eur_sat" id="eur_sat" >
  </div>

      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">GBP Alış</label>
    <input type="text" class="form-control" name="gbp_al" id="gbp_al">
  </div>

      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">GBP Satış</label>
    <input type="text" class="form-control" name="gbp_sat" id="gbp_sat">
  </div>




 
  <button type="submit" class="btn btn-primary">Değiştir</button>

</form>

</div>





<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script type="text/javascript">



</script>
