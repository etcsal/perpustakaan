
 
 
  <?php
 $nim = $_GET['id'];
 $sql = $koneksi->query("select * from tb_anggota where nim = '$nim'");
 $tampil = $sql->fetch_assoc();

 $jenis_kelamin = $tampil['jenis_kelamin'];
 
 
 ?>
 
 <div class="panel panel-default">
	<div class="panel-heading">
	Tambah Anggota
	</div>

	<div class="panel-body">
	<div class="row">
	<div class="col-md-12">
	 
                            
							
							
							<div class="body">
							
							<form method="POST">
							
							<label for="">NIM</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="nim" value="<?php echo $tampil['nim'];?>" class="form-control" />
                          	 
								</div>
                            </div>
							
							<label for="">Nama Anggota</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama" value="<?php echo $tampil['nama'];?>" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Tempat Lahir</label>
							 <div class="form-group">
                               <div class="form-line">
                               <input type="text" name="tempat_lahir"  value="<?php echo $tampil['tempat_lahir'];?>" class="form-control" />
                                        
                                  
                            </div>
							</div>
							

							   
							   
							
							<label for="">Tanggal Lahir</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="date" name="tanggal_lahir"  value="<?php echo $tampil['tanggal_lahir'];?>" class="form-control" />
                                     
									 
							</div>
                            </div>
							
						
							<div class ="form-group">
							<label>Jenis Kelamin</label>
							<select class+"form-control" name="jenis_kelamin">
								<option value="Laki-laki" <?php if ($jenis_kelamin=='Laki-laki') {echo "selected"; } ?>>Laki-laki</option>
								<option value="Perempuan" <?php if ($jenis_kelamin=='Perempuan') {echo "selected"; } ?>>Perempuan</option>
							
						


							</select>
							</div>
                            </div>
							
							<label for="">Prodi</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="prodi"  value="<?php echo $tampil['prodi'];?>" class="form-control" />
                                     
							</div>
                            </div>
									 
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								
								$nis= $_POST['nim'];
								$nama= $_POST['nama'];
								$tempat_lahir= $_POST['tempat_lahir'];
								$tanggal_lahir= $_POST['tanggal_lahir'];
								$jenis_kelamin= $_POST['jenis_kelamin'];
								$prodi= $_POST['prodi'];
								
								$sql2 = $koneksi->query("update tb_anggota set nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', prodi='$prodi' where nim = '$nim'");
								
								if ($sql2) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=anggota";
										</script>
										
										<?php
								}
							}
							?>
										
										
										
								
								
								
								
								
