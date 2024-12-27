

    
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
                                <input required="" type="number" name="nim" class="form-control" />
                          	 
								</div>
                            </div>
							
							<label for="">Nama Anggota</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="text" name="nama" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Tempat Lahir</label>
							 <div class="form-group">
                               <div class="form-line">
                               <input required="" type="text" name="tempat_lahir" class="form-control" />
                                        
                                  
                            </div>
							</div>
							

							   
							   
							
							<label for="">Tanggal Lahir</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="date" name="tanggal_lahir" class="form-control" />
                                     
									 
							</div>
                            </div>
							
						
							<div class ="form-group">
							<label>Jenis Kelamin</label>
							<select required="" class+"form-control" name="jenis_kelamin">
								<option value="Laki-laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>


							</select>
							</div>
                            </div>
							
							<label for="">Prodi</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" ype="text" name="prodi" class="form-control" />
                                     
							</div>
                            </div>
									 
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$nim= $_POST['nim'];
								$nama= $_POST['nama'];
								$tempat_lahir= $_POST['tempat_lahir'];
								$tanggal_lahir= $_POST['tanggal_lahir'];
								$jenis_kelamin= $_POST['jenis_kelamin'];
								$prodi= $_POST['prodi'];
								
								
								$sql = $koneksi->query("insert into tb_anggota (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, prodi) values('$nim','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$prodi')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=anggota";
										</script>
										
										<?php
								}
							}
							?>
										
								
										
										
								
								
								
								
								
