
 
 <?php
 $id = $_GET['id'];
 $sql = $koneksi->query("select * from tb_buku where id = '$id'");
 $tampil = $sql->fetch_assoc();

  $lokasi = $tampil['lokasi'];
  $tahun2 = $tampil['tahun_terbit'];
 
 
 ?>
 
 <div class="panel panel-default">
	<div class="panel-heading">
	Ubah Buku
	</div>

	<div class="panel-body">
	<div class="row">
	<div class="col-md-12">
							
							
							<div class="body">
							
							<form method="POST">
							
							<label for="">Judul Buku</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="judul" value="<?php echo $tampil['judul'];?>" class="form-control" />
                          	 
								</div>
                            </div>
							
							<label for="">Pengarang</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="pengarang" value="<?php echo $tampil['pengarang'];?>" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Penerbit</label>
							 <div class="form-group">
                               <div class="form-line">
                               <input type="text" name="penerbit" value="<?php echo $tampil['penerbit'];?>" class="form-control" />
                                        
                                  
                            </div>
							</div>
							
							<label for="">Tahun Terbit</label>
							 <div class="form-group">
                               <div class="form-line">
                               <select class="form-control" name="tahun">  
							   <?php
								$tahun = date("Y");
								for ($i=$tahun-29; $i <= $tahun; $i++){
									
									if($i==$tahun2) {
									echo'<option value="'.$i.'"selected>'.$i.'</option>';	
									
									}else{
										
									echo'<option value="'.$i.'">'.$i.'</option>';
									}
								}
							   ?>
							   </select>
							   </div>
							   </div>
							   
							   
							
							<label for="">ISBN</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="isbn" value="<?php echo $tampil['isbn'];?>" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Jumlah Buku</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="jumlah" value="<?php echo $tampil['jumlah_buku'];?>" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							
					<label for="">Lokasi Buku</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="lokasi" value="<?php echo $tampil['lokasi'];?>" class="form-control" />
							
								<?php
								
								$sql = $koneksi -> query("select * from tb_lokasibuku order by lokasi");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[lokasi]'>$data[lokasi]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
							
							<label for="">Tanggal Input</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="date" name="tanggal" value="<?php echo $tampil['tanggal_input'];?>" class="form-control" />
                                     
							</div>
                            </div>
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
						<?php
							
							if (isset($_POST['simpan'])) {
								
								$judul= $_POST['judul'];
								$pengarang= $_POST['pengarang'];
								$penerbit= $_POST['penerbit'];
								$tahun= $_POST['tahun'];
								$isbn= $_POST['isbn'];
								$jumlah= $_POST['jumlah'];
								
								$lokasi= $_POST['lokasi'];
								
								
								$tanggal= $_POST['tanggal'];
								
								$sql2 = $koneksi->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah', lokasi='$lokasi', tanggal_input='$tanggal'
								where id='$id'");
								
								if ($sql2) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=buku";
										</script>
										
										<?php
								}
							}
							?>
										
										
										
								
								
								
								
								
