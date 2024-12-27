

	   
  
                        
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h4>Data Anggota</h4>
                        </div>
                        <div class="panel-body">
						<div class="row">
						<div class="col-md-12">
						<div class="content-panel">
	 

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="anggota">
								
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
											<th>prodi</th>
											
											<th>Aksi</th>
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
					
							
							<td>
							
							
							<a href="?page=anggota&aksi=ubahanggota&id=<?php echo $data['nim'] ?>" class="btn btn-success" >Ubah</a>
							<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=anggota&aksi=hapusanggota&id=<?php echo $data['nim'] ?>" class="btn btn-danger" >Hapus</a>
							</td>
							
						</td>
						</tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=anggota&aksi=tambahanggota" class="btn btn-primary" >Tambah</a>
								
								
								</div> 
								
								
								</section>
								</section>
								
								