<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>input data transaksi</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="gaya.css">
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
       <a class="nav-link" href="daftar.php">Daftar Transaksi</a>
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
<br>
<br>
<br>
<div class="container">

	<h2><center>Form Pendaftaran Transaksi Dalam Perpustakaan</h2></center>
	<form method="post">
	 <div class="form-group">
      <label for="idtransaksi">Nomor ID Transaksi</label>
      <input type="text" class="form-control" id="idtransaksi" placeholder=" Ketik Nomor Anggota" name="idtransaksi">
    </div>
		<label for="kodepustaka">Kode Pustaka</label>
			<input type="text" name="kodepustaka" id="kodepustaka" placeholder="Ketik nama anggota" class="form-control"><br>
		<label for="nomoranggota">Nomor Anggota</label>
			<input type="Nomor anggota" name="nomoranggota" placeholder="Nomor anggota" class="form-control" id="nomoranggota"><br>
	
		<label for="kodepustakawanpinjam">Kode Pustakawan Yang Meminjam</label>
			<input type="text" name="kodepustakawanpinjam" placeholder="Kode Pustakawan Yang Meminjam" id="kodepustakawanpinjam" class="form-control"><br>
			<label for="kodepustakawankembali">Kode Pustakawan Yang Mengembalikan </label>
			<input type="text" name="kodepustakawankembali" placeholder="Kode Pustakawan Yang Mengembalikan" id="kodepustakawankembali" class="form-control"><br>

		<label for="tanggalpinjam">Tanggal Kadaluarsa</label>
			<input type="datetime-local" name="tanggalpinjam" placeholder="Tanggal Kadaluarsa" id="tanggalpinjam" class="form-control"><br>
		<br>
		<label for="tanggalkembali">Tanggal Kadaluarsa</label>
			<input type="datetime-local" name="tanggalkembali" placeholder="Tanggal Kadaluarsa" id="tanggalkembali" class="form-control"><br>
		<br>
		 <button type="submit" class="btn btn-primary" name="bSimpan">Simpan </button>

	</div>
</form>
</div>
<br>
<br>
<br>

<?php 
if (isset($_POST['bSimpan'])) {
	$idtransaksi=$_POST['idtransaksi'];
	$kodepustaka=$_POST['kodepustaka'];
	$nomoranggota=$_POST['nomoranggota'];
	$kodepustakawanpinjam=$_POST['kodepustakawanpinjam'];
	$kodepustakawankembali=$_POST['kodepustakawankembali'];
	$tanggalpinjam=$_POST['tanggalpinjam'];
		$tanggalkembali=$_POST['tanggalkembali'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");

	$sql="INSERT INTO `transaksi`(`idtransaksi`, `kodepustaka`, `nomoranggota`, `kodepustakawanpinjam`, `kodepustakawankembali`, `tanggalpinjam`, `tanggalkembali`) VALUES ('".$idtransaksi."','".$kodepustaka."', '".$nomoranggota."','".$kodepustakawanpinjam."','".$kodepustakawankembali."','".$tanggalpinjam."','".$tanggalkembali."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "<h2><center>Selamat Transaksi Telah Terdaftar !</center></h2>";
		} else {
			echo "<h2><center>Maff Transaksi Gagal Mendaftar !</center></h2>";
		}	
	}
	?>
	<br>
	<br>
<footer>
  <p>@2021 | Safan Masera Buana Paksi</p><br>
 
</footer>

	</body>
</html>