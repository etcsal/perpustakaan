
<?php 

$id = $_GET['id'];


$sql = $koneksi->query("update tb_transaksi set status='Lunas' where id='$id'");


?>


		<script type="text/javascript">
		alert("Proses Ganti Rugi Buku Berhasil");
		window.location.href="?page=transaksi_gantirugi";
		</script>
		<?php
		
		?>
		
		