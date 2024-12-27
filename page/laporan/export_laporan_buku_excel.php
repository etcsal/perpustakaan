
<?php
if (isset($_POST['submit']))
{?>

 <?php


	$koneksi = new mysqli("localhost","root","","db_perpustakaan");


	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_data_buku(".date('d-m-Y').").xls");
	
	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;

?>	

<body>
<center>
<h2>Laporan Data Buku Bulan <?php echo $bln;?> Tahun <?php echo $thn;?></h2>
</center>
<table border="1">
  <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
											<th>Tahun Terbit</th>
                                            <th>ISBN</th>
											<th>Jumlah Buku</th>
											<th>Lokasi Buku</th>
											<th>Tanggal Input</th>
										
                                        </tr>
                               
	
	<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_buku where MONTH(tanggal_input) = '$bln' and YEAR(tanggal_input) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									

	?>

						
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['pengarang']; ?></td>
							<td><?php echo $data['penerbit']; ?></td>
							<td><?php echo $data['tahun_terbit']; ?></td>
							<td><?php echo number_format($data['isbn']);?></td>
							<td><?php echo $data['jumlah_buku']; ?></td>
							<td><?php echo $data['lokasi']; ?></td>
							<td><?php echo $data['tanggal_input']; ?></td>
							
						
							
						</tr>
					
	<?php
	
	}
	
	?>
	
	</table>
	</body>
	<?php 
	}
	?>
	
	<?php

		$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	

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
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
											<th>Tahun Terbit</th>
                                            <th>ISBN</th>
											<th>Jumlah Buku</th>
											<th>Lokasi Buku</th>
											<th>Tanggal Input</th>
										
                                        </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_buku where YEAR(tanggal_input) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									
		?>
	
						
				<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['pengarang']; ?></td>
							<td><?php echo $data['penerbit']; ?></td>
							<td><?php echo $data['tahun_terbit']; ?></td>
							<td><?php echo $data['isbn']; ?></td>
							<td><?php echo $data['jumlah_buku']; ?></td>
							<td><?php echo $data['lokasi']; ?></td>
							<td><?php echo $data['tanggal_input']; ?></td>
							
						
						
							
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
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
											<th>Tahun Terbit</th>
                                            <th>ISBN</th>
											<th>Jumlah Buku</th>
											<th>Lokasi Buku</th>
											<th>Tanggal Input</th>
										
                                        </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_buku where MONTH(tanggal_input) = '$bln' and YEAR(tanggal_input) = '$thn'");
			while ($data = $sql->fetch_assoc()) {
									
		?>
	
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['pengarang']; ?></td>
							<td><?php echo $data['penerbit']; ?></td>
							<td><?php echo $data['tahun_terbit']; ?></td>
							<td><?php echo $data['isbn']; ?></td>
							<td><?php echo $data['jumlah_buku']; ?></td>
							<td><?php echo $data['lokasi']; ?></td>
							<td><?php echo $data['tanggal_input']; ?></td>
							
						
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