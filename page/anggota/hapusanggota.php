 <?php
 
 $nim = $_GET['id'];
 $sql = $koneksi->query("delete from tb_anggota where nim = '$nim'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=anggota";
	</script>
	
 <?php
 
 }
 
 ?>