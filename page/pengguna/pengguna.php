
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>Data Pengguna</h4>
                        </div>
                        <div class="panel-body">
						<div class="row">
	<div class="col-md-12">
	 <div class="content-panel">
	 

                            <div class="table-responsive">
                                <table  class="display table table-bordered" id="pengguna">
								
 
                                    <thead>
                                        <tr>
											<th>No</th>
											<th>Username</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Foto</th>
											<th>Aksi</th>
											
                                        </tr>
                                    </thead>

                                
                                    <tbody>
									
									<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_pengguna");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['username'] ?></td>
											<td><?php echo $data['nama'] ?></td>
											<td><?php echo $data['password'] ?></td>
											<td><?php echo $data['level'] ?></td>
											<td><img src="img/<?php echo $data['foto'] ?>"width="50" height="50" alt=""> </td>
										
											<td>
											<a href="?page=pengguna&aksi=ubahpengguna&id=<?php echo $data['id'] ?>" class="btn btn-success" >Ubah</a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=pengguna&aksi=hapuspengguna&id=<?php echo $data['id'] ?>" class="btn btn-danger" >Hapus</a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=pengguna&aksi=tambahpengguna" class="btn btn-primary" >Tambah</a>
								</div> 