<html>
	<body>
		<?php
	$id_transaksi=$_GET['id'];
	$q_tampil_transaksi=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'");
	$r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi);
	if(empty($r_tampil_transaksi['foto'])or($r_tampil_transaksi['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_transaksi['foto'];
?>
<div id="label-page"><h3>Edit Data Transaksi</h3></div>
<div id="content">
	<form action="proses/transaksi-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_transaksi" value="<?php echo $r_tampil_transaksi['idtransaksi']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
        <tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_transaksi['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
        <tr>
			<td class="label-formulir">ID Mobil</td>
			<td class="isian-formulir"><input type="text" name="id_mobil" value="<?php echo $r_tampil_transaksi['idmobil']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Sewa</td>
			<td class="isian-formulir"><input type="date" name="tgl_sewa" value="<?php echo $r_tampil_transaksi['tglsewa']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Kembali</td>
			<td class="isian-formulir"><input type="date" name="tgl_kembali" value="<?php echo $r_tampil_transaksi['tglkembali']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>