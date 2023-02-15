
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from absensi where id_absensi='$_GET[id]'");



?>


<script type="text/javascript">
	window.location.href="?page=absensi";
</script>