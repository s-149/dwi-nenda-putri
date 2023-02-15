
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from bibit_siap_jual where id_bibit_siap_jual='$_GET[id]'");
	//$koneksi->query("delete from laporan_bibit_siap_jual where id_bibit_siap_jual='$_GET[id]'");



?>


<script type="text/javascript">
	window.location.href="?page=bibit_siap_jual";
</script>