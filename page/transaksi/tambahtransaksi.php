
<?php 

$tanggal_pinjam = date("Y-m-d");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$kembali = date("Y-m-d", $tujuh_hari);

?>

    
    <div class="panel panel-default">
	<div class="panel-heading">
	Tambah Transaksi
	</div>

	<div class="panel-body">
	<div class="row">
	<div class="col-md-12">
	 
                            
							
							
							<div class="body">
							
							<form method="POST">
							
							<label for="">Judul Buku</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select required="" name="buku" class="form-control" />
								<option value="">-- Pilih Judul Buku  --</option>
								
								<?php
								
								$sql = $koneksi -> query("select * from tb_buku order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[judul]'>$data[judul]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
								
							<label for="">Nama Peminjam</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select required="" name="nama" class="form-control" />
								<option value="">-- Pilih Nama Peminjam --</option>
								<?php
								
								$sql = $koneksi -> query("select * from tb_anggota order by nim");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[nim].$data[nama]'>$data[nim], $data[nama]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
							<label for="">Tanggal Pinjam</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input  type="date" name="tanggal_pinjam" class="form-control" id="tanggal" value="<?php echo $tanggal_pinjam; ?>" readonly />
                                     
									 
							</div>
                            </div>
							

							   
							   
							
							<label for="">Tanggal Kembali</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="date" name="tanggal_kembali" class="form-control" id="tanggal" value="<?php echo $kembali; ?>" readonly />
                                     
									 
							</div>
                            </div>
							
						

							
					
									 
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								
								$tanggal_pinjam= $_POST['tanggal_pinjam'];
								$tanggal_kembali= $_POST['tanggal_kembali'];
								
								$buku= $_POST['buku'];
								$pecah_buku = explode(".", $buku);
							
								$id = $pecah_buku[0];
								$judul = $pecah_buku[1];
								
								$nama= $_POST['nama'];
								$pecah_nama = explode(".", $nama);
								$nim = $pecah_nama[0];
								$nama = $pecah_nama[1];
							
								
								
								$sql = mysqli_query($koneksi,"select * from tb_buku where judul='$judul'");
								
								while ($data = mysqli_fetch_assoc($sql)) {
									$sisa = $data['jumlah_buku'];
									
								if ($sisa <= 0) {
									?>
									
										<script type="text/javascript">
										alert("Stok Buku Habis, Transaksi Tidak Dapat Dilakukan, Silakan Tambah Stok Buku Terlebih Dahulu");
										window.location.href="?page=transaksi&aksi=tambahtransaksi";
										</script>
										
										<?php
										
								}else {
								
									$sql = $koneksi->query("insert into tb_transaksi(judul, nim, nama, tanggal_pinjam, tanggal_kembali, status) values('$judul','$nim','$nama','$tanggal_pinjam','$tanggal_kembali','Pinjam')");
									$sql2 = $koneksi->query("update tb_buku set jumlah_buku=(jumlah_buku-1) where id='$id'");
									?>
									
									
									<script type="text/javascript">
										alert("Simpan Data Berhasil");
										window.location.href="?page=transaksi";
										
										</script>
										<?php
								}
							}
							}
							
							?>
										
								
										
										
								
								
								
								
								
