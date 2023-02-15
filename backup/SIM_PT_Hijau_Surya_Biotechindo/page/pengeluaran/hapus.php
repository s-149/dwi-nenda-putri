
<?php
    
    $id=$_GET['id'];

	$ambil = $koneksi->query("select * from pengeluaran where id_pengeluaran='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['foto_bukti'];

	if (file_exists("gambar/bukti/$foto")) {
		unlink("gambar/bukti/$foto");
	}

	$koneksi->query("delete from pengeluaran where id_pengeluaran='$_GET[id]'");
    

?>


<script type="text/javascript">
	window.location.href="?page=pengeluaran";
</script>

