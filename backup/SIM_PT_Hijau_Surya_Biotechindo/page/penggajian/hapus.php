
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from penggajian where id_penggajian='$_GET[id]'");



?>

<script type="text/javascript">
	window.location.href="?page=penggajian";
</script>
 