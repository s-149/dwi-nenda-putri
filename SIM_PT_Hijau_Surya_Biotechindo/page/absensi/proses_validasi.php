<?php
    
    $id=$_GET['id'];
    $koneksi->query("update  `absensi` SET `validasi`='1' where id_absensi='$id'");



?>


<script type="text/javascript">
    window.location.href="?page=absensi&aksi=validasi";
</script>