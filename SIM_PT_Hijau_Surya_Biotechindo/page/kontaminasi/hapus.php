
<?php
    
    $id=$_GET['id'];
	$koneksi->query("delete from kontaminasi where id_kontaminasi='$_GET[id]'");

?>


<script type="text/javascript">
	window.location.href="?page=kontaminasi";
</script>