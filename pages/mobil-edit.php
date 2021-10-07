<?php
	$id_mobil=$_GET['id'];
	$q_tampil_mobil=mysqli_query($db,"SELECT * FROM tbmobil WHERE idmobil='$id_mobil'");
	$r_tampil_mobil=mysqli_fetch_array($q_tampil_mobil);
	if(empty($r_tampil_mobil['foto'])or($r_tampil_mobil['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_mobil['foto'];
?>
<div id="label-page"><h3>Edit Data Mobil</h3></div>
<div id="content">
	<form action="proses/mobil-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Mobil</td>
			<td class="isian-formulir"><input type="text" name="id_mobil" value="<?php echo $r_tampil_mobil['idmobil']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Merk Mobil</td>
			<td class="isian-formulir"><input type="text" name="merk_mobil" value="<?php echo $r_tampil_mobil['merkmobil']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Warna</td>
			<td class="isian-formulir"><input type="text" name="warna" value="<?php echo $r_tampil_mobil['warna']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>