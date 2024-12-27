
<?php 
include "../../function.php";
$id = $_GET['id'];
$judul = $_GET['judul'];
$tanggal_kembali = $_GET['tanggal_kembali'];
$lambat = $_GET['lambat'];





if ($lambat >0) {
	
?>

		<script type="text/javascript">
		alert("Pinjaman Buku Tidak Dapat Diperpanjang, Karena Lebih Dari 7 Hari Peminjaman... Kembalikan Dahulu Kemudian Pinjam Kembali");
		window.location.href="?page=transaksi";
		</script>
		
		<?php
		
		}else {
			$tanggal_kembali_pecah = explode("-",$tanggal_kembali); 
			$next_7_hari = mktime(0,0,0, $tanggal_kembali_pecah[1],$tanggal_kembali_pecah[2]+7,$tanggal_kembali_pecah[0]);
			$hari_next = date("Y-m-d", $next_7_hari );
			
			
			
			$sql = $koneksi->query("update tb_transaksi set tanggal_kembali='$hari_next' where id='$id'");
			
		if($sql){
				?>
				<script type="text/javascript">
				alert("Perpanjangan Berhasil");
				window.location.href="?page=transaksi";
				</script>
				
			<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Perpanjangan Gagal");
				window.location.href="?page=transaksi";
				</script>
			
			<?php
			}
		}
			
			
		?>