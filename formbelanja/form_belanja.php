<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <style>
    h1 {
      color: maroon;
      font-family: 'Arial';
      font-size: 40px;
      text-align: center;
      padding-top: 1em;
      padding-bottom: 0.5em;
    
    }
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f4f4f5;
    }
    .container1{
      background-color: white;
      border: 2px solid white;
      border-radius: 1em;
      padding: 6px 6px 6px 6px;
    }
    .container2{
      background-color: white;
      border: 2px solid white;
      border-radius: 1em;
      padding: 6px 6px 6px 6px;
    }
    </style>
</head>
<body>
    <h1>Form Belanja</h1>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
    <form class="form-horizontal" method="post" action="form_belanja.php">
<fieldset>

<!-- Form Name -->
<div class="container1">
<legend>Data Pesanan Customer</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="customer"><b>Nama Customer</b></label>  
  <div class="col-md-5">
  <input id="customer" name="customer" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<br/>
<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="produk"><b>Pilih Produk</b></label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="produk-0">
      <input type="radio" name="produk" id="produk-0" value="tv">
      TV
    </label> 
    <label class="radio-inline" for="produk-1">
      <input type="radio" name="produk" id="produk-1" value="kulkas">
      Kulkas
    </label> 
    <label class="radio-inline" for="produk-2">
      <input type="radio" name="produk" id="produk-2" value="mesin cuci">
      Mesin Cuci
    </label>
  </div>
</div>
<br/>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jumlah"><b>Jumlah</b></label>  
  <div class="col-md-4">
  <input id="jumlah" name="jumlah" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-4">
    <button id="proses" name="proses" class="btn btn-success">Kirim</button>
  </div>
</div>
</fieldset>
</form>
    </div>
    <div class="col-sm-4">
    <div class="container2">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
        <li class="list-group-item">TV : Rp.4.200.000</li>
        <li class="list-group-item">Kulkas : Rp.3.100.000</li>
        <li class="list-group-item">Mesin Cuci : Rp.3.800.000</li>
        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
    </ul>
    </div>
    </div>
  </div>
</body>
<?php
$proses= $_POST['proses'];
$customer= $_POST['customer'];
$produk= $_POST['produk'];
$jumlah= $_POST['jumlah'];

echo 'Proses : '.$proses;
echo '<br/>Customer : '.$customer;
echo '<br/>Produk : '.$produk;
echo '<br/>Jumlah Pembelian : '.$jumlah;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
if ($produk == "tv"){
  $total = 4200000 * $jumlah;
  echo '<br/>Total Belanja :'.rupiah($total);
}
elseif ($produk == "kulkas"){
  $total = 3100000 *$jumlah;
  echo '<br/> Total Belanja :'.rupiah($total);
}
else{
  $total = 3800000*$jumlah;
  echo '<br/>Total belanja :'.rupiah($total);
}
?>
</html>

