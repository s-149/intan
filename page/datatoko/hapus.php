<?php
    
    $id=$_GET['id'];

	$koneksi->query("delete from datatoko where Id='$id'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=datatoko";
</script>