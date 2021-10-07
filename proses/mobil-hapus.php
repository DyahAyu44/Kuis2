<?php
include'../koneksi.php';
$id_mobil=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbmobil
	WHERE idmobil='$id_mobil'"
);

header("location:../index.php?p=mobil");
?>