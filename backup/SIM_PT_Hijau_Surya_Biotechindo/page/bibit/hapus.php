
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from bibit where id_bibit='$_GET[id]'");



?>


<script type="text/javascript">
	window.location.href="?page=bibit";
</script>