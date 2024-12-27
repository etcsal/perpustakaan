
<?php 

$id = $_GET['id'];
$lambat = $_GET['lambat'];
$denda = $_GET['denda'];


$sql = $koneksi->query("update tb_transaksi set status='Hilang', lambat='$lambat', denda='$denda' where id='$id'");


?>


		<script type="text/javascript">
		alert("Proses Buku Hilang");
		window.location.href="?page=transaksi_hilang";
		</script>
		<?php
		
		?>
		
		