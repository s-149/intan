
<?php
    
    $id=$_GET['id'];

	$koneksi->query("delete from transaksi where Id='$id'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=pasar&aksi=keranjang";
</script>