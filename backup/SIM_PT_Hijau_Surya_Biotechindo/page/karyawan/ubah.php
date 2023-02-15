<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from karyawan where id_karyawan='$id'");
    $data = $sql->fetch_assoc();

?>

                           
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA KARYAWAN</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Id Karyawan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="id_karyawan" value="<?=$data['id_karyawan']?>"  required autofocus /></td>
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
                                        <td>Umur</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="umur" value="<?=$data['umur']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td></td>
                                        <td><textarea class="form-control" name="alamat" rows="6" required autofocus><?=$data['alamat']?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>No Hp</td>
                                        <td></td>
                                        <td><input type="number" class="form-control" name="no_hp" value="<?=$data['no_hp']?>" maxlength="12"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal Bergabung</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="date" class="form-control" name="tanggal_gabung" value="<?=$data['tanggal_gabung']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Bagian</td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" name="bagian"  required autofocus>
                                                <option><?=$data['bagian']?></option>
                                                <option>Admin</option>
                                                <option>Labolatorium</option>
                                                <option>Greenhouse</option>
                                            </select>
                                        </td>
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
 
    $id_karyawan = $_POST ['id_karyawan'];
    $nama_karyawan = $_POST ['nama_karyawan'];
    $umur = $_POST ['umur'];
    $alamat = $_POST ['alamat'];
    $no_hp = $_POST ['no_hp'];
    $tanggal_gabung = $_POST ['tanggal_gabung'];
    $bagian = $_POST ['bagian'];


    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update  `karyawan` SET `id_karyawan`='$id_karyawan', `nama_karyawan`='$nama_karyawan', `umur`='$umur', `alamat`='$alamat', `no_hp`='$no_hp', `tanggal_gabung`='$tanggal_gabung',`bagian`='$bagian' where id_karyawan='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=karyawan";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=karyawan";

                    </script>

                ';

            }
        
        
    }

 ?>