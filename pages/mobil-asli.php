<html>
	<body>
		<div id="label-page"><h3>Tampil Data Mobil</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=mobil-input" class="tombol">Tambah Mobil</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Mobil</th>
			<th>Merk Mobil</th>
			<th>Warna</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$sql="SELECT * FROM tbmobil ORDER BY idmobil DESC";
		$q_tampil_mobil = mysqli_query($db, $sql);
		
		$nomor=1;
		while($r_tampil_mobil=mysqli_fetch_array($q_tampil_mobil)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_mobil['idmobil']; ?></td>
			<td><?php echo $r_tampil_mobil['merkmobil']; ?></td>
			<td><?php echo $r_tampil_mobil['warna']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td>

				<div class="tombol-opsi-container"><a href="index.php?p=mobil-edit&id=<?php echo $r_tampil_mobil['idmobil'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/mobil-hapus.php?id=<?php echo $r_tampil_mobil['idmobill']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
		</body>
		</html>