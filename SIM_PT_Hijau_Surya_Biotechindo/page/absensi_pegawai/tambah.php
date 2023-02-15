 
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT ABSEN</h3>
                            </div>
                    </div><br>

                    <div style="padding-top: 10%;"></div>

                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Id Absensi</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="id_absensi" value="<?=$_id_absensi?>"  required autofocus readonly /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td></td>
                                        <td><input type="date" class="form-control" name="tanggal"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <?php
                                        $sql = $koneksi->query("select * from karyawan where id_karyawan='$UserName' ");
                                        while ($data= $sql->fetch_assoc()) {       
                                    ?>
                                    <tr>
                                        <td>Id Karyawan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="id_karyawan" value="<?=$data['id_karyawan']?>"  required autofocus readonly /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Karyawan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="nama_karyawan" value="<?=$data['nama_karyawan']?>"   required autofocus readonly></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Bagian</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="bagian" value="<?=$data['bagian']?>"  required autofocus readonly  /></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Keterangan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <select class="form-control" name="keterangan"  required autofocus >
                                                <option value="izin">Izin</option>
                                                <option value="sakit">Sakit</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=absensi_pegawai" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php
 
    $id_absensi = $_POST ['id_absensi'];
    $tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    // $nama_karyawan = $_POST ['nama_karyawan'];
    // $bagian = $_POST ['bagian'];
    $keterangan = $_POST ['keterangan'];
    $bagian = $_POST ['bagian'];


    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `absensi`(`id_absensi`, `tanggal`, `id_karyawan`, `keterangan`, `validasi`) values('$id_absensi','$tanggal', '$id_karyawan', '$keterangan','0')");
        //$sql1 = $koneksi->query("INSERT INTO `laporan_absensi`(`id_absensi`) values('$id_absensi')");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=absensi_pegawai";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=absensi_pegawai&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>
                             
                             




    
                