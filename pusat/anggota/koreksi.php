<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Anggota</title>
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
       <a class="nav-link" href="daftar.php">Daftar Anggota</a>
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
  <h2><center>Cari Daftar Anggota Perpustakaan</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik Nomor Anggota Perpustakaan</label>
      <input type="text" class="form-control" id="namadikoreksi" placeholder="Ketik nomor anggota" name="namadikoreksi">
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
  $sql="SELECT * FROM anggota WHERE nomoranggota = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Anggota Perpustakaan</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="nomoranggota">Nomor Anggota </label>
      <input type="text" class="form-control" id="nomoranggota"  name="nomoranggota" value="<?php echo $rekord['nomoranggota'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="namaanggota"> Nama Anggota </label>
      <input type="text" class="form-control" id="namaanggota"  name="namaanggota" value="<?php echo $rekord['namaanggota'];?>">
    </div>
   <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat"
    value="<?php echo $rekord['alamat'];?>">
    </div>
    <div class="form-group">
      <label for="tanggaldaftar">Tanggal daftar</label>
      <input type="text" class="form-control" id="tanggaldaftar" name="tanggaldaftar"
    value="<?php echo $rekord['tanggaldaftar'];?>">
    </div>
    <div class="form-group">
      <label for="tanggalkadaluarsa">Tanggal Kadaluarsa</label>
      <input type="text" class="form-control" id="tanggalkadaluarsa" name="tanggalkadaluarsa"
    value="<?php echo $rekord['tanggalkadaluarsa'];?>">
    </div>
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $nomoranggota=$_POST['nomoranggota'];
  $nomoranggota=$_POST['nomoranggota'];
  $alamat=$_POST['alamat'];
  $tanggaldaftar=$_POST['tanggaldaftar'];
  $tanggalkadaluarsa=$_POST['tanggalkadaluarsa'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="UPDATE `pustakawan` SET `nomoranggota` = '$nomoranggota', `nomoranggota` = '$nomoranggota',  `alamat` = '$alamat',  `tanggaldaftar` = '$tanggaldaftar',  `tanggalkadaluarsa` = '$tanggalkadaluarsa' WHERE `anggota`.`nomoranggota` = '$nomoranggota';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord anggota sudah tersimpan !";
  } else {
    echo "Rekord anggota gagal tersimpan !";
  } 
}
?>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<footer>
  <p>@2021 | Safan Masera Buana Paksi</p><br>
 

</footer>