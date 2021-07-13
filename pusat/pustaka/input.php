<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>input data Pustaka</title>
	
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
<br>
<br>
<br>
<div class="container">

	<h2><center>Form Pendaftaran Pustaka</h2></center>
	<form method="post">
	 <div class="form-group">
      <label for="kodepustaka">Kode Pustaka</label>
      <input type="text" class="form-control" id="kodepustaka" placeholder=" Ketik Kode Pustaka" name="kodepustaka">
    </div>
		<label for="judulpustaka">Judul Pustaka</label>
			<input type="text" name="judulpustaka" id="judulpustaka" placeholder="Ketik judul pustaka" class="form-control"><br>
		<label for="pengarang">Pengarang</label>
			<input type="text" name="pengarang" placeholder="pengarang" class="form-control" id="pengarang"><br>
	
		<label for="penerbit">Penerbit</label>
			<input type="text" name="penerbit" placeholder="Penerbit" id="penerbit" class="form-control"><br>

		<label for="tahunterbit">Tahun Terbit</label>
			<input type="text" name="tahunterbit" placeholder="Tahun Terbit" id="tahunterbit" class="form-control"><br>
			
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
	$kodepustaka=$_POST['kodepustaka'];
	$judulpustaka=$_POST['judulpustaka'];
	$pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];
		$tahunterbit=$_POST['tahunterbit'];
	
	$koneksi=new mysqli("localhost","root","","perpustakaan");

	$sql="INSERT INTO `pustaka`(`kodepustaka`, `judulpustaka`, `pengarang`, `penerbit`,`tahunterbit`) VALUES ('".$kodepustaka."','".$judulpustaka."', '".$pengarang."','".$penerbit."','".$tahunterbit."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "<h2><center>Selamat Pustaka Telah Terdaftar !</center></h2>";
		} else {
			echo "<h2><center>Maff Pustaka Gagal Mendaftar !</center></h2>";
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