

<?php
 $id = $_GET['id'];
 $sql2 = $koneksi->query("select * from tb_pengguna where id = '$id'");
 $tampil = $sql2->fetch_assoc();
 
 $level = $tampil['level'];

 
 
 
 ?>
 
  <div class="panel panel-default">
	<div class="panel-heading">
	Ubah Pengguna
	</div>

	<div class="panel-body">
	<div class="row">
	<div class="col-md-12">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Username</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="username" value="<?php echo $tampil['username']; ?>" class="form-control" />
                          	 
								</div>
                            </div>
							
							<label for="">Nama</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							
							<label for="">Level</label>
							 <div class="form-group">
                               <div class="form-line">
                                    <select name="level" class="form-control show-tick">
								
										<option value="ks" <?php if ($level=='ks') {echo "selected"; } ?>>Super Admin</option>
										<option value="admin" <?php if ($level=='admin') {echo "selected"; } ?>>Administrator</option>
										<option value="petugas" <?php if ($level=='petugas') {echo "selected"; } ?>>Petugas</option>
                               
										<select name="level" class="form-control" required>
							
						</select>
                     
                                    </select>
                            </div>
							</div>
							
							<label for="">Foto</label>
                            <div class="form-group">
                               <div class="form-line">
                                <img src="img/<?php echo $tampil['foto']; ?> "width="50" height="50"  alt="">
									 
							</div>
                            </div>
							
							
							<label for="">Ganti Foto</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="file" name="foto" class="form-control" />
									 
							</div>
                            </div>
							
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$username= $_POST['username'];
								$nama= $_POST['nama'];
								
								$level= $_POST['level'];
								
								$foto= $_FILES['foto']['name'];
								$lokasi= $_FILES['foto']['tmp_name'];
								
								if (!empty($lokasi)) {
								$upload= move_uploaded_file($lokasi, "img/".$foto);
								
								
								
								$sql = $koneksi->query("update tb_pengguna set username='$username', nama='$nama', level='$level', foto='$foto' where id='$id'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=pengguna";
										</script>
										
										<?php
								}
							
								}
								
								else {
									
								$sql = $koneksi->query("update tb_pengguna set username='$username', nama='$nama', level='$level' where id='$id'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=pengguna";
										</script>
										
										<?php
								}
							
								}
							
							}
							?>
										
										
										
								
								
								
								
								
