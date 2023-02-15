
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA KONTAMINASI</h3>
                        </div>
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%" colspan="4">
                                            <input type="hidden" class="form-control" name="id_kontaminasi"  value="<?=$_id_kontam?>" readonly />
                                            <input type="date" class="form-control" name="tanggal"   />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Id Karyawan</td>
                                        <td></td>
                                        <td colspan="4">
                                            <select class="form-control" name="id_karyawan" >
                                                <?php
                                                    $sql = $koneksi->query("select * from karyawan where bagian='Labolatorium'  ");
                                                    while ($data= $sql->fetch_assoc()) {       
                                                ?>
                                                <option value="<?=$data['id_karyawan']?>"><?=$data['nama_karyawan']?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Code Clone</td>
                                        <td></td>
                                        <td colspan="4">
                                            <select class="form-control" name="code_clone" >
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
                                        <td>Stage</td>
                                        <td></td>
                                        <td colspan="4"><input type="text" class="form-control" name="stage"  /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pot</td>
                                        <td></td>
                                        <td>
                                            <input type="number" class="form-control col-md-3" name="jmlh_pot"  placeholder="Pot" />
                                        </td>
                                        <td>&nbsp;Pot&nbsp;</td>
                                        <td>
                                            <input style="float: right;" type="number" class="form-control col-md-3" name="unit_benih_pot"  placeholder="Unit" />
                                        </td>
                                        <td>&nbsp;Unit&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Botol</td>
                                        <td></td>
                                        <td>
                                            <input type="number" class="form-control col-md-3" name="jmlh_btl"  placeholder="Botol" />
                                        </td>
                                        <td>&nbsp;Botol&nbsp;</td>
                                        <td>
                                            <input style="float: right;" type="number" class="form-control col-md-3" name="unit_benih_btl"  placeholder="Unit" />
                                        </td>
                                        <td>&nbsp;Unit&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td></td>
                                        <td colspan="4">
                                            <textarea  class="form-control" name="keterangan" rows="5" ></textarea>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=kontaminasi" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->
 

 <?php
 
    $id_kontaminasi = $_POST ['id_kontaminasi'];
    $tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    $_karyawan=mysqli_fetch_array(mysqli_query($koneksi,"select * from `karyawan` where `id_karyawan` ='$id_karyawan'"));
    $nama_karyawan = $_karyawan['nama_karyawan'];
    $code_clone = $_POST ['code_clone'];
    $stage = $_POST ['stage'];
    $jmlh_pot = $_POST ['jmlh_pot'];
    $unit_benih_pot = $_POST ['unit_benih_pot'];
    $jmlh_btl = $_POST ['jmlh_btl'];
    $unit_benih_btl = $_POST ['unit_benih_btl'];
    $keterangan = $_POST ['keterangan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `kontaminasi`(`id_kontaminasi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `code_clone`, `stage`, `jmlh_pot`, `unit_benih_pot`, `jmlh_btl`, `unit_benih_btl`, `keterangan`) values('$id_kontaminasi','$tanggal','$id_karyawan', '$nama_karyawan', '$code_clone', '$stage', '$jmlh_pot', '$unit_benih_pot', '$jmlh_btl', '$unit_benih_btl','$keterangan')");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=kontaminasi";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=kontaminasi&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>
                             
                             




    
                