<html>
	<body>
		<div id="label-page"><h3>Tampil Data Transaksi</h3></div>
<div id="content">
	
	<p id="tombol-tambah-container"><a href="index.php?p=transaksi-input" class="tombol">Tambah Transaksi</a>
	<a href=><img src="print.png" height="50px" height="50px"></a>
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
	</FORM>
	</p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Transaksi</th>
            <th>ID Anggota</th>
            <th>ID Mobil</th>
			<th>Tanggal Sewa</th>
			<th>Tanggal Kembali</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$batas = 5;
		$hal = $_GET['hal'];
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
		}	
		$nomor = 1;
		if(isset($_SERVER['REQUEST_METHOD'] == "POST")){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbtransaksi WHERE idanggota LIKE '%$pencarian%'";
				$query = $sql;
				$queryJml = $sql;
			}
			else {
				$query = "SELECT * FROM tbtransaksi LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbtransaksi";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbtransaksi LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbtransaksi";
			$no = $posisi * 1;
		}
		
		$sql="SELECT * FROM tbtransaksi ORDER BY idtransaksi DESC";
		$q_tampil_transaksi = mysqli_query($db, $sql);
		while($r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi)){
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_transaksi['idtransaksi']; ?></td>
			<td><?php echo $r_tampil_transaksi['idanggota']; ?></td>
			<td><?php echo $r_tampil_transaksi['idmobil']; ?></td>
            <td><?php echo $r_tampil_transaksi['tglsewa']; ?></td>
            <td><?php echo $r_tampil_transaksi['tglkembali']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=transaksi-edit&id=<?php echo $r_tampil_transaksi['idtransaksi'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/transaksi-hapus.php?id=<?php echo $r_tampil_transaksi['idtransaksi']; ?>" class="tombol">Hapus</a></div>
			</td>			
		</tr>		
		<?php $nomor++; } ?>
		
		<tr>
			<td colspan=6 align="right">
			page 1 next
			</td>
		</tr>
		
	</table>
</div>
		</body>
		</html>