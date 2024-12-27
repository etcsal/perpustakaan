

	   
  
                        
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h4>Laporan Data Anggota</h4>
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
											<th>Prodi</th>
										
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
					
							
						
							
						</td>
						</tr>
									<?php }?>

										   </tbody>
                                </table>
								
								<a href="page/laporan/export_laporan_anggota_excel.php"  class="btn btn-primary" style="margin-top:8 px"><i class="fa fa-print"></i>Cetak</a>
							
								
								</div> 
								
								
								</section>
								</section>
								
								