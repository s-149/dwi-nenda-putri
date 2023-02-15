<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from absensi where id_absensi='$id'");
    $data = $sql->fetch_assoc();

?>

            
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA ABSEN</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="date" class="form-control" name="tanggal" value="<?=$data['tanggal']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Id Karyawan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="id_karyawan" value="<?=$data['id_karyawan']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Karyawan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="nama_karyawan" value="<?=$data['nama_karyawan']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Bagian</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="bagian" rows="6" value="<?=$data['bagian']?>" required autofocus></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="keterangan" value="<?=$data['keterangan']?>" maxlength="12"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="simpan" value="UPDATE" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=karyawan" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php
 
    $tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    $nama_karyawan = $_POST ['nama_karyawan'];
    $bagian = $_POST ['bagian'];
    $keterangan = $_POST ['keterangan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update  `absensi` SET `tanggal`='$tanggal', `id_karyawan`='$id_karyawan', `nama_karyawan`='$nama_karyawan', `bagian`='$bagian', `keterangan`='$keterangan' where id_absensi='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=absensi";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=absensi";

                    </script>

                ';

            }
        
        
    }

 ?>