<?php

	$ambil = $koneksi->query("select * from admin_user where username='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['fhoto'];

	if (file_exists("gambar/user/$foto")) {
		unlink("gambar/user/$foto");
	}

	$koneksi->query("delete from admin_user where username='$_GET[id]'");



?>


<script type="text/javascript">
	window.location.href="?page=admin_user";
</script>