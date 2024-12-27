              <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4>Data Buku</h4>
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
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
											<th>Tahun Terbit</th>
                                            <th>ISBN</th>
											<th>Jumlah Buku</th>
											<th>Lokasi Buku</th>
											<th>Tanggal Input</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
									
									    </div>
        
									
						<tbody>
							
						<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_buku");
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
							
							<td>
							
							
							<a href="?page=buku&aksi=ubah&id=<?php echo $data['id'] ?>" class="btn btn-success" >Ubah</a>
							<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=buku&aksi=hapus&id=<?php echo $data['id'] ?>" class="btn btn-danger" >Hapus</a>
							</td>
							
						</td>
						</tr>
									<?php }?>

							 </tbody>
                                </table>
								<a href="?page=buku&aksi=tambah" class="btn btn-primary" >Tambah</a>
								
								
								</div> 
								
								
								</section>
								</section>
								