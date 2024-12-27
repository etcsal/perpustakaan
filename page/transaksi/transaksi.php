
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>Data Transaksi Pinjam</h4>
                        </div>
                        <div class="panel-body">
						<div class="row">
	<div class="col-md-12">
	 <div class="content-panel">
	 

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
											
											<th>Status</th>
											
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									
						<tbody>
							
						<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_transaksi where status='Pinjam'");
									while ($data = $sql->fetch_assoc()) {
									
									
										
									?>
						
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['nim']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['tanggal_pinjam']; ?></td>
							<td><?php echo $data['tanggal_kembali']; ?></td>
							<td>
								<?php 
								
								$denda2 = $koneksi -> query("select * from tb_denda");
								$denda3 = $denda2 -> fetch_assoc();
								$denda4 = $denda3['denda'];
							
								
								
								
								$tanggal_dateline2 = $data['tanggal_kembali'];
								$tanggal_kembali = date('Y-m-d');
								
								$lambat = terlambat($tanggal_dateline2, $tanggal_kembali);
								$denda1 = $lambat * $denda4;
								
								if ($lambat>0) {
									echo "
									
									<font color='red'>$lambat hari<br>(Rp $denda1)</font>
									";
								}else{
									echo $lambat." Hari";
								}
								
								?>
								
							</td>
							<td><?php echo $data['status']; ?></td>
					
							
							<td>
							
							
							<a onclick="return confirm('Apakah benar buku ini sudah dikembalikan?')" href="?page=transaksi&aksi=kembali&id=<?php echo $data['id'];?> &judul=<?php echo $data['judul'];?> &lambat=<?php echo $lambat;?> &denda=<?php echo $denda1;?>"  class="btn btn-info"> Kembali </a>
							<a onclick="return confirm('Apakah batas waktu peminjaman akan diperpanjang?')" href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id'];?> &judul=<?php echo $data['judul']?> &lambat=<?php echo $lambat ?>&tanggal_kembali=<?php echo $data['tanggal_kembali']?> " class="btn btn-danger"> Perpanjang </a>
							<a href="?page=transaksi&aksi=hilang&id=<?php echo $data['id'];?> &judul=<?php echo $data['judul'];?> &lambat=<?php echo $lambat;?> &denda=<?php echo $denda1;?>" class="btn btn-primary" >Hilang</a>
							</td>
							
						</td>
						</tr>
									<?php }
									
									?>

										   </tbody>
                                </table>
								<a href="?page=transaksi&aksi=tambahtransaksi" class="btn btn-primary" >Tambah</a>
								
								</div> 
								
								
								</section>
								</section>