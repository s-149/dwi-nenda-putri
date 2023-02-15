
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from benih where code_clone='$_GET[id]'");



?>


<script type="text/javascript">
	window.location.href="?page=benih";
</script>