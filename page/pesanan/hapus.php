<?php
    
    $id=$_GET['id'];

	$koneksi->query("delete from datapembeli where Id='$id'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=pesanan";
</script>