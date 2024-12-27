
 <div class="panel panel-default">
	<div class="panel-heading">
	Tambah Pengguna
	</div>

	<div class="panel-body">
	<div class="row">
	<div class="col-md-12">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Username</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="text" name="username" class="form-control" />
                          	 
								</div>
                            </div>
							
							<label for="">Nama</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="text" name="nama" class="form-control" />
                                     
									 
							</div>
                            </div>
							
					
							<label for="">Password</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="password" name="password" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Level</label>
							 <div class="form-group">
                               <div class="form-line">
                                    <select required="" name="level" class="form-control show-tick">
                                        <option value="">-- Pilih Level --</option>
									
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                     
                                    </select>
                            </div>
							</div>
							
							<label for="">Foto</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="file" name="foto" class="form-control" />
									 
							</div>
                            </div>
							
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$username= $_POST['username'];
								$nama= $_POST['nama'];
								$password= md5($_POST['password']);
								$level= $_POST['level'];
								
								$foto= $_FILES['foto']['name'];
								$lokasi= $_FILES['foto']['tmp_name'];
								$upload= move_uploaded_file($lokasi, "img/".$foto);
								
								if ($upload) {
								
								$sql = $koneksi->query("insert into tb_pengguna (username, nama, password, level, foto) values('$username','$nama','$password','$level','$foto')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=pengguna";
										</script>
										
										<?php
								}
								}
							
							}
							?>
										
										
										
								
								
								
								
								
