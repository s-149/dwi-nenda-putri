
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from penjualan where id_penjualan='$_GET[id]'");



?>

<script type="text/javascript">
	window.location.href="?page=penjualan";
</script>