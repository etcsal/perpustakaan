
<?php
if (isset($_POST['submit']))
{?>

 <?php

	include "../../function.php";

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");


	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Data_Buku_Hilang(".date('d-m-Y').").xls");
	
	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;

?>	

<body>
<center>
<h2>Laporan Data Buku Hilang Bulan <?php echo $bln;?> Tahun <?php echo $thn;?></h2>
</center>
<table border="1">
	 <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>NiM</th>
                                            <th>Nama Peminjam</th>
											<th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
											<th>Terlambat</th>
											
											<th>Denda</th>
											<th>Status</th>
											<th>Ganti Rugi</th>
											
                                        </tr>
	
	<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_transaksi where status='Hilang' and MONTH(tanggal_pinjam) = '$bln' and YEAR(tanggal_pinjam) = '$thn'");
			while ($data = $sql->fetch_assoc()) {
									
	
	
	?>
	

					<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['nim']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['tanggal_pinjam']; ?></td>
							<td><?php echo $data['tanggal_kembali']; ?></td>
							<td><?php echo $data['lambat'].'hari'; ?></td>
							<td><?php echo $data['denda']; ?></td>
							
							<td><?php echo $data['status']; ?></td>
							
							<td><?php
							$gantirugi = 50000;
							$total = $gantirugi + $data['denda'];
							echo "Rp ". $total;
							?>
							
							</td>
							
						</tr>
	
	<?php
	
	}
	
	?>
	
	</table>
	</body>
	<?php }?>
	
	<?php

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	include "../../function.php";

	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;
	?>
	
	<?php
	if ($bln == 'all') {
		?>
	<div class="table-responsive">
							
                                <table  class="display table table-bordered" id="transaksi">
								
                                    <thead>
                                       <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Nim</th>
                                            <th>Nama Peminjam</th>
											<th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
											<th>Terlambat</th>
											
											<th>Denda</th>
											<th>Status</th>
											<th>Ganti Rugi</th>
											
                                        </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_transaksi where status='Hilang' and YEAR(tanggal_pinjam) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									
		?>
	
						
							<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['nim']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['tanggal_pinjam']; ?></td>
							<td><?php echo $data['tanggal_kembali']; ?></td>
							<td><?php echo $data['lambat'].'hari'; ?></td>
							<td><?php echo $data['denda']; ?></td>
							
							<td><?php echo $data['status']; ?></td>
							
							<td><?php
							$gantirugi = 50000;
							$total = $gantirugi + $data['denda'];
							echo "Rp ". $total;
							?>
							
							</td>
							
						</tr>
						<?php 
						}
						?>

					</tbody>
                    </table>
					</div>
					
					
					<?php
					}
					else{ ?>
						<div class="table-responsive">
							
                                <table  class="display table table-bordered" id="transaksi">
								
                                    <thead>
                                      <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Nim</th>
                                            <th>Nama Peminjam</th>
											<th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
											<th>Terlambat</th>
											
											<th>Denda</th>
											<th>Status</th>
											<th>Ganti Rugi</th>
											
                                        </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_transaksi where status='Hilang' and MONTH(tanggal_pinjam) = '$bln' and YEAR(tanggal_pinjam) = '$thn'");
			while ($data = $sql->fetch_assoc()) {
									
		?>
	
						
							<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['nim']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['tanggal_pinjam']; ?></td>
							<td><?php echo $data['tanggal_kembali']; ?></td>
							<td><?php echo $data['lambat'].'hari'; ?></td>
							<td><?php echo $data['denda']; ?></td>
							
							<td><?php echo $data['status']; ?></td>
							
							<td><?php
							$gantirugi = 50000;
							$total = $gantirugi + $data['denda'];
							echo "Rp ". $total;
							?>
							
							</td>
							
						</tr>
						<?php 
		}
		?>
    </tbody>
	</table>
</div>
	
	<?php

}

?>