<?php 	
$koneksi= new mysqli("localhost", "root", "", "");
$sql= "CREATE DATABASE perpustakaan";
$q=$koneksi-> query($sql);
if($q){
	echo"Database Sudah Dibuat";
}
else{ echo "Database Gagal Dibuat";
}

$sql2="CREATE TABLE perpustakaan .`pustakawan`(
 `kodepustakawan` varchar(30) not null primary key,
 `namapustakawan` varchar(50) not null,
 `password` varchar(30) not null,
 `nomortelpon` varchar(20) null) 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$sql3 ="CREATE TABLE perpustakaan.` pustaka`(
`kodepustaka`varchar(20) not null primary key,
`judulpustaka` text not null,
`pengarang` varchar(30) not null,
`penerbit` varchar(30) not null,
`tahunterbit`varchar(30) not null)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";


$sql4="CREATE TABLE perpustakaan.`transaksi` (
  `idtransaksi` int(20) NOT NULL,
  `kodepustaka` varchar(20) NOT NULL,
  `nomoranggota` varchar(40) NOT NULL,
  `kodepustakawanpinjam` varchar(40) NOT NULL,
  `tanggalpinjam` datetime NOT NULL,
  `tanggalkembali` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";


$sql5="CREATE TABLE perpustakaan. `anggota` (
  `nomoranggota` varchar(30) NOT NULL,
  `namaanggota` varchar(45) NOT NULL,
  `alamat` text DEFAULT NULL,
  `tanggaldaftar` datetime NOT NULL,
  `tanggalkadaluarsa` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$q2=$koneksi->query($sql2);
 if ($q2) {
	 echo "Tabel pustakawan  sudah dibuat !";
 } else {
	 echo "Tabel  pustakawan gagal dibuat !"; 
 }

 $q2=$koneksi->query($sql3);
 if ($q2) {
	 echo "Tabel  pustaka sudah dibuat !";
 } else {
	 echo "Tabel pustaka  gagal dibuat !"; 
 }


 $q2=$koneksi->query($sql4);
 if ($q2) {
	 echo "Tabel Anggota sudah dibuat !";
 } else {
	 echo "Tabel Anggota  gagal dibuat !"; 
 }


 $q2=$koneksi->query($sql5);
 if ($q2) {
	 echo "Tabel  Transaksi sudah dibuat !";
 } else {
	 echo "Tabel transaksi  gagal dibuat !"; 
 }


 ?>