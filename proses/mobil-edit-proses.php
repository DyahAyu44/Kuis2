<?php
include'../koneksi.php';

$id_mobil=$_POST['id_mobil'];
$merk_mobil=$_POST['merk_mobil'];
$warna=$_POST['warna'];

If(isset($_POST['simpan'])){
	
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $id_anggota.".".$tipe_file;
		// Tentukan folder untuk menyimpan file
		$folder = "../images/$file_foto";
		@unlink ("$folder");
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto=$foto_awal;
	
	mysqli_query($db,
		"UPDATE tbmobil
		SET merkmobil='$merk_mobil',warna='$warna'
		WHERE idmobil='$id_mobil'"
	);
	header("location:../index.php?p=mobil");
}
?>
