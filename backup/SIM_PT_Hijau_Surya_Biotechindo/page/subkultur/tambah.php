
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA SUBKULTUR</h3>
                        </div>
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%" colspan="4">
                                            <input type="date" class="form-control" name="tanggal"  required autofocus />
                                            <input type="hidden" class="form-control" name="id_subkultur"   value="<?=$_id_subkultur?>" readonly  required autofocus />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Karyawan</td>
                                        <td></td>
                                        <td colspan="4">
                                            <select class="form-control" name="id_karyawan" >
                                                <?php
                                                    $sql = $koneksi->query("select * from karyawan where bagian='Labolatorium' ");
                                                    while ($data= $sql->fetch_assoc()) {       
                                                ?>
                                                <option value="<?=$data['id_karyawan']?>"><?=$data['nama_karyawan']?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" class="form-control" name="nama_karyawan" value="0" required autofocus />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Code Clone</td>
                                        <td></td>
                                        <td colspan="4">
                                            <select class="form-control" name="code_clone" required autofocus>
                                                <?php
                                                    $sql = $koneksi->query("select * from benih ");
                                                    while ($data= $sql->fetch_assoc()) {       
                                                ?>
                                                <option><?=$data['code_clone']?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Stage Awal</td>
                                        <td></td>
                                        <td colspan="4"><input type="text" class="form-control" name="stage_awal" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Stage Akhir</td>
                                        <td></td>
                                        <td colspan="4"><input type="text" class="form-control" name="stage_akhir" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Media</td>
                                        <td></td>
                                        <td colspan="4"><input type="text" class="form-control" name="media" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Awal</td>
                                        <td></td>
                                        <td>
                                            <input type="number" class="form-control col-md-3" name="jmlh_awal_pot" required autofocus placeholder="Pot" />
                                        </td>
                                        <td>&nbsp;<label>&nbsp; Pot &nbsp;</label></td>
                                        <td>
                                            <input style="float: right;" type="number" class="form-control col-md-3" name="jmh_awal_btl" required autofocus placeholder="Botol" />
                                        </td>
                                        <td>&nbsp;<label>&nbsp; Botol &nbsp;</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Akhir</td>
                                        <td></td>
                                        <td>
                                            <input type="number" class="form-control col-md-3" name="jmlh_akhir_pot" required autofocus placeholder="Pot"  />
                                        </td>
                                        <td>&nbsp;<label>&nbsp; Pot &nbsp;</label></td>
                                        <td>
                                            <input style="float: right;" type="number" class="form-control col-md-3" name="jmlh_akhir_btl" required autofocus placeholder="Botol"  />
                                        </td>
                                        <td>&nbsp;<label>&nbsp; Botol &nbsp;</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Benih Pot</td>
                                        <td></td>
                                        <td colspan="2"><input type="number" class="form-control col-md-6" name="unit_benih_pot" required autofocus /></td>
                                        <td colspan="2">&nbsp;<label>&nbsp; Unit dalam Pot</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Benih Botol</td>
                                        <td></td>
                                        <td colspan="2"><input type="number" class="form-control col-md-6" name="unit_benih_bt" required autofocus /></td>
                                        <td colspan="2">&nbsp;<label>&nbsp; Unit dalam Botol</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Bakteri</td>
                                        <td></td>
                                        <td colspan="4"><input type="number" class="form-control" name="jmlh_bakteri" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Durasi</td>
                                        <td></td>
                                        <td colspan="2"><input type="number" class="form-control col-md-6" name="durasi" required autofocus /></td>
                                        <td colspan="2">&nbsp;<label>&nbsp; Menit</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td></td>
                                        <td colspan="4">
                                            <textarea  class="form-control" name="keterangan" rows="10" required autofocus></textarea>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=subkultur" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->
 

 <?php
 
    $id_subkultur = $_POST ['id_subkultur'];
    $tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    $_karyawan=mysqli_fetch_array(mysqli_query($koneksi,"select * from `karyawan` where `id_karyawan` ='$id_karyawan'"));
    $nama_karyawan = $_karyawan['nama_karyawan'];
    $code_clone = $_POST ['code_clone'];
    $stage_awal = $_POST ['stage_awal'];
    $stage_akhir = $_POST ['stage_akhir'];
    $media = $_POST ['media'];
    $jmlh_awal_pot = $_POST ['jmlh_awal_pot'];
    $jmlh_akhir_pot = $_POST ['jmlh_akhir_pot'];
    $jmh_awal_btl = $_POST ['jmh_awal_btl'];
    $jmlh_akhir_btl = $_POST ['jmlh_akhir_btl'];
    $unit_benih_pot = $_POST ['unit_benih_pot'];
    $unit_benih_bt = $_POST ['unit_benih_bt'];
    $jmlh_bakteri = $_POST ['jmlh_bakteri'];
    $durasi = $_POST ['durasi'];
    $keterangan = $_POST ['keterangan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `subkultur`(`id_subkultur`, `tanggal`, `id_karyawan`, `nama_karyawan`, `code_clone`, `stage_awal`, `stage_akhir`, `media`, `jmlh_awal_pot`, `jmlh_akhir_pot`, `jmh_awal_btl`, `jmlh_akhir_btl`, `unit_benih_pot`, `unit_benih_bt`, `jmlh_bakteri`, `durasi`, `keterangan`) values('$id_subkultur','$tanggal','$id_karyawan', '$nama_karyawan', '$code_clone', '$stage_awal', '$stage_akhir', '$media', '$jmlh_awal_pot', '$jmlh_akhir_pot', '$jmh_awal_btl', '$jmlh_akhir_btl', '$unit_benih_pot', '$unit_benih_bt', '$jmlh_bakteri', '$durasi', '$keterangan')");


        $sql1 = $koneksi->query("INSERT INTO `laporan_kontam`(`tanggal`,`id_karyawan`) values('$tanggal','$id_karyawan')");
        



        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=subkultur";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=subkultur&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>
                             
                             




    
                