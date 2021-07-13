<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing</title>
   <style type="text/css">
    .color{
      background-color: rgb(107, 229, 210);
    }
  </style>
 <link rel="stylesheet" type="text/css" href="style.css"><meta charset="utf-8">
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
 height: 100px;
  background-color: green;
  color: white;
  font-size: 20px;
}
.mail{
  text-align: left;
}
.bord{
  background-color: lightblue;
}
body{
  background-color: lightblue;
}

.come{
  text-align: center;
  font-size: 50px;
  font-family: sans-serif;

}

</style>
  </head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       <li class="nav-item">
       <a class="nav-link" href="pusat/anggota/daftar.php">Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pusat/pustaka/daftar.php">Pustaka</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="pusat/pustakawan/daftar.php">Pustakawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" pusat/transaksi/daftar.php">Transaksi</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>  
</nav>
<br>
  <br>
<div class="come">Welcome to libraries Application</div>
<br>
<table cellpadding="10" cellspacing="10" align="center" class="bord">
  <tr>
    <td>
      <a href="pusat/anggota/daftar.php"><img src="img/anggota.png" width="150" height="150">
        <br><a href="pusat/anggota/daftar.php"><center>Anggota</a>
      </td>

      <td>
        <a href="pusat/pustaka/daftar.php"><img src="img/pustaka.png" width="150" height="150">
        <br>
        <a href="pusat/pustaka/daftar.php"><center>Pustaka</a></td>
        <td>
        <a href="pusat/pustakawan/daftar.php"><img src="img/pustakawan.png" width="200" height="150">
        <br><a href="pusat/pustakawan/daftar.php"><center>Pustakawan</a>
        </td>
        <td>
        <a href="pusat/transaksi/daftar.php"><img src="img/transaksi.png" width="150" height="150">
            <br><a href="pusat/transaksi/daftar.php"><center>Transaksi</a>
            </td>
  </tr>
</table>



<br><br><br><br>

</div>
<br><br><br>

<footer>
  <p>@2021 | Safan Masera Buana Paksi</p>
 <p class="mail">Email : Safanbuana00@gmail.com</p>
</footer>



</body>
</html>
