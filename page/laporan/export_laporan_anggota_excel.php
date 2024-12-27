 <?php
	
	

	include "../../function.php";

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_data_anggota(".date('d-m-Y').").xls");

?>	

<h2>Laporan Data Anggota</h2>

<table border="1">
  <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
											<th>Prodi</th>
										
                                        </tr>
                                    </thead>
									
						<tbody>
							
						<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_anggota");
									while ($data = $sql->fetch_assoc()) {
									
									
										
									?>
						
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nim']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['tempat_lahir']; ?></td>
							<td><?php echo $data['tanggal_lahir']; ?></td>
							<td><?php echo $data['jenis_kelamin']; ?></td>
							<td><?php echo $data['prodi']; ?></td>
					
							
						
							
						</td>
						</tr>
									<?php }?>


							 
                                </table>