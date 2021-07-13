<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>input data pustakawan</title>
	
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
       <a class="nav-link" href="daftar.php">Daftar Pustakawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inputpustakawan.php">Daftar</a>
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

	<h2><center>Form Pendaftaran Pustakawan</h2></center>
	<form method="post">
	 <div class="form-group">
      <label for="kodepustakawan">Kode Pustakawan</label>
      <input type="text" class="form-control" id="kodepustakawan" placeholder=" Ketik Kode Pustakawan" name="kodepustakawan">
    </div>
		<label for="namapustakawan">Nama Pustakawan</label>
			<input type="text" name="namapustakawan" id="namapustakawan" placeholder="Ketik namapustakawan" class="form-control"><br>
		<label for="password">Password</label>
			<input type="password" name="password" placeholder="Password" class="form-control" id="password"><br>
	
		<label for="nomortelpon">Nomor telpon</label>
			<input type="text" name="nomortelpon" placeholder="Nomor Hand Phone" id="nomortelpon" class="form-control"><br>
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
	$kodepustakawan=$_POST['kodepustakawan'];
	$namapustakawan=$_POST['namapustakawan'];
	$password=$_POST['password'];
	$nomortelpon=$_POST['nomortelpon'];
	
	$koneksi=new mysqli("localhost","root","","perpustakaan");

	$sql="INSERT INTO `pustakawan`(`kodepustakawan`, `namapustakawan`, `password`, `nomortelpon`) VALUES ('".$kodepustakawan."','".$namapustakawan."', '".$password."','".$nomortelpon."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "<h2><center>Selamat Anda Telah Terdaftar !</center></h2>";
		} else {
			echo "<h2><center>Maff Anda Gagal Mendaftar !</center></h2>";
		}	
	}
	?>
	<br>
	<br>
<footer>
  <p>@2021 | Safan Masera Buana Paksi</p><br>
 
</footer>
	
</footer>

	</body>
</html>