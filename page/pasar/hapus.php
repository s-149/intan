
<?php
    
    $id=$_GET['id'];

	$ambil = $koneksi->query("select * from databarang where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['Gambar'];

	if (file_exists("gambar/barang/$foto")) {
		unlink("gambar/barang/$foto");
	}

	$koneksi->query("delete from databarang where id='$_GET[id]'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=databarang";
</script>