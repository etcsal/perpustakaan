
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>Data Buku Hilang</h4>
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
											
											<th>Denda</th>
											<th>Status</th>
											<th>Ganti Rugi</th>
											
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									
						<tbody>
							
						<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_transaksi where status='Hilang'");
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
							<td>
							<a href="?page=transaksi_hilang&aksi=gantirugi&id=<?php echo $data['id'];?> &judul=<?php echo $data['judul'];?>" class="btn btn-primary" >Bayar</a>
							
						</td>
						</tr>
									<?php }
									
									?>

										   </tbody>
                                </table>
							
								
								</div> 
								
								
								</section>
								</section>