<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Pustakawan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
footer {
  text-align: center;
 height: 50px;
  background-color: green;
  color: white;
  font-size: 20px;
}
</style>
  </head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="landing/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" href="daftar.php">Daftar Pustaka</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="input.php">Daftar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="koreksi.php">Cari Daftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hapus.php">Hapus</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container">
  <br>  <br>
  <h2><center>Cari Daftar Pustaka</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik Kode Pustaka</label>
      <input type="text" class="form-control" id="namadikoreksi" placeholder="Ketik kode pustaka" name="namadikoreksi">
    </div>
      <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
  $namadikoreksi=$_POST['namadikoreksi'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="SELECT * FROM pustaka WHERE kodepustaka = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Pustaka</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="kodepustaka">Kode Pustaka</label>
      <input type="text" class="form-control" id="kodepustaka"  name="kodepustaka" value="<?php echo $rekord['kodepustaka'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="judulpustaka">Judul Pustaka</label>
      <input type="text" class="form-control" id="judulpustaka"  name="judulpustaka" value="<?php echo $rekord['judulpustaka'];?>">
    </div>
   <div class="form-group">
      <label for="pengarang">Pengarang</label>
      <input type="text" class="form-control" id="pengarang" name="pengarang"
    value="<?php echo $rekord['pengarang'];?>">
    </div>
    <div class="form-group">
      <label for="penerbit">Penerbit</label>
      <input type="text" class="form-control" id="penerbit" name="penerbit"
    value="<?php echo $rekord['penerbit'];?>">
    </div>
    <div class="form-group">
      <label for="tahunterbit">Tahun Penerbitan</label>
      <input type="text" class="form-control" id="tahunterbit" name="tahunterbit"
    value="<?php echo $rekord['tahunterbit'];?>">
    </div>
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $kodepustaka=$_POST['kodepustaka'];
  $judulpustaka=$_POST['judulpustaka'];
  $pengarang=$_POST['pengarang'];
  $penerbit=$_POST['penerbit'];
  $tahunterbit=$_POST['tahunterbit'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="UPDATE `pustaka` SET `kodepustaka` = '$kodepustaka', `judulpustaka` = '$judulpustaka',  `pengarang` = '$pengarang',  `penerbit` = '$penerbit',  `tahunterbit` = '$tahunterbit' WHERE `pustaka`.`kodepustaka` = '$kodepustaka';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord pustaka sudah tersimpan !";
  } else {
    echo "Rekord pustaka gagal tersimpan !";
  } 
}
?>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<footer>
  <p>@2021 | Safan Masera Buana Paksi</p><br>
 

</footer>