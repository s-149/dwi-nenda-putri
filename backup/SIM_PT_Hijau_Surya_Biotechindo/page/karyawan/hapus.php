
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from karyawan where id_karyawan='$_GET[id]'");



?>


<script type="text/javascript">
	window.location.href="?page=karyawan";
</script>