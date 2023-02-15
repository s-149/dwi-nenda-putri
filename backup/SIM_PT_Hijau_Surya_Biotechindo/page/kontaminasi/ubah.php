<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from kontaminasi where id_kontaminasi='$id'");
    $data = $sql->fetch_assoc();
    $_id_karyawan=$data['id_karyawan'];
//memanggil nama
    $_karyawan=mysqli_fetch_array(mysqli_query($koneksi,"select * from `karyawan` where `id_karyawan` ='$_id_karyawan'"));
    $_nama_karyawan=$_karyawan['nama_karyawan'];

?>
    
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA KONTAMINASI</h3>
                        </div>
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%" colspan="4"><input type="date" class="form-control" name="tanggal" value="<?=$data['tanggal']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Karyawan</td>
                                        <td></td>
                                        <td colspan="4">
                                            <select class="form-control" name="id_karyawan" >
                                                <option value="<?=$data['id_karyawan']?>"><?=$_nama_karyawan?></option>
                                                <?php
                                                    $sql1 = $koneksi->query("select * from karyawan ");
                                                    while ($data1= $sql1->fetch_assoc()) {       
                                                ?>
                                                <option value="<?=$data1['id_karyawan']?>"><?=$data1['nama_karyawan']?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" class="form-control" name="nama_karyawan" value="<?=$_nama_karyawan?>" required autofocus />
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
                                                <option><?=$data['code_clone']?></option>
                                                <?php
                                                    $sql1 = $koneksi->query("select * from benih ");
                                                    while ($data1= $sql1->fetch_assoc()) {       
                                                ?>
                                                <option><?=$data1['code_clone']?></option>
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
                                        <td colspan="4"><input type="text" class="form-control" name="stage" value="<?=$data['stage']?>" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pot</td>
                                        <td></td>
                                        <td>
                                            <input type="text" class="form-control col-md-3" name="jmlh_pot" value="<?=$data['jmlh_pot']?>" required autofocus placeholder="Pot"  />
                                        </td>
                                        <td>&nbsp;Pot&nbsp;</td>
                                        <td>
                                            <input style="float: right;" type="text" class="form-control col-md-3" name="unit_benih_pot" value="<?=$data['unit_benih_pot']?>" required autofocus placeholder="Unit"  />
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
                                            <input type="number" class="form-control col-md-3" name="jmlh_btl" value="<?=$data['jmlh_btl']?>" required autofocus placeholder="Botol" />
                                        </td>
                                        <td>&nbsp;Botol&nbsp;</td>
                                        <td>
                                            <input style="float: right;" type="number" class="form-control col-md-3" name="unit_benih_btl" value="<?=$data['unit_benih_btl']?>" required autofocus placeholder="Unit"  />
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
                                            <textarea  class="form-control" name="keterangan" rows="5" required autofocus><?=$data['keterangan']?></textarea>
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
 
    $tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    $nama_karyawan = $_POST ['nama_karyawan'];
    $code_clone = $_POST ['code_clone'];
    $stage = $_POST ['stage'];
    $jmlh_pot = $_POST ['jmlh_pot'];
    $unit_benih_pot = $_POST ['unit_benih_pot'];
    $jmlh_btl = $_POST ['jmlh_btl'];
    $unit_benih_btl = $_POST ['unit_benih_btl'];
    $keterangan = $_POST ['keterangan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update  `kontaminasi` SET `tanggal`='$tanggal', `id_karyawan`='$id_karyawan', `nama_karyawan`='$nama_karyawan', `code_clone`='$code_clone', `stage`='$stage', `jmlh_pot`='$jmlh_pot', `unit_benih_pot`='$unit_benih_pot', `jmlh_btl`='$jmlh_btl', `unit_benih_btl`='$unit_benih_btl',  `keterangan`='$keterangan' where id_kontaminasi='$id'");

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
                    
                        window.location.href="?page=kontaminasi";

                    </script>

                ';

            }
        
        
    }

 ?>