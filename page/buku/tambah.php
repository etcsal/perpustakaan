

    
    <div class="panel panel-default">
	<div class="panel-heading">
	Tambah Buku
	</div>

	<div class="panel-body">
	<div class="row">
	<div class="col-md-12">
		
							<div class="body">
							
							<form method="POST">
							
							<label for="">Judul Buku</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="text" name="judul" class="form-control" />
                          	 
								</div>
                            </div>
							
							<label for="">Pengarang</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="text" name="pengarang" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Penerbit</label>
							 <div class="form-group">
                               <div class="form-line">
                               <input required="" type="text" name="penerbit" class="form-control" />
                                        
                                  
                            </div>
							</div>
							
							<label for="">Tahun Terbit</label>
							 <div class="form-group">
                               <div class="form-line">
                               <select required="" class="form-control" name="tahun">  
							   <?php
								$tahun = date("Y");
								for ($i=$tahun-25; $i <= $tahun; $i++){
									echo'
								<option value="'.$i.'">'.$i.'</option>';
								}
							   ?>
							   </select>
							   </div>
							   </div>

							<label for="">ISBN</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="text" name="isbn" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Jumlah Buku</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="number" name="jumlah" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="">Lokasi Buku</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select required="" name="lokasi" class="form-control" />
								<option value="">-- Pilih Lokasi Buku  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from tb_lokasibuku order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[lokasi]'>$data[lokasi]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
							<label for="">Tanggal Input</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input required="" type="date" name="tanggal" class="form-control" />
                                     
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
								$pecah_lokasi = explode(".", $lokasi);
							
								$id = $pecah_lokasi[0];
								$lokasi = $pecah_lokasi[1];
								
								$tanggal= $_POST['tanggal'];
								
								$sql = $koneksi->query("insert into tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, lokasi, tanggal_input) values('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=buku";
										</script>
										
										<?php
								}
							}
							?>
										
								
										
										
								
								
								
								
								
