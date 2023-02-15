<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from subkultur where id_subkultur='$id'");
    $data = $sql->fetch_assoc();

?>
            
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA SUBKULTUR</h3>
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
                                                <option value="<?=$data['id_karyawan']?>"><?=$data['nama_karyawan']?></option>
                                                <?php
                                                    $sql2 = $koneksi->query("select * from karyawan ");
                                                    while ($data2= $sql2->fetch_assoc()) {       
                                                ?>
                                                <option value="<?=$data2['id_karyawan']?>"><?=$data2['nama_karyawan']?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" class="form-control" name="nama_karyawan" value="<?=$data['nama_karyawan']?>" required autofocus />
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
                                        <td>Stage Awal</td>
                                        <td></td>
                                        <td colspan="4"><input type="text" class="form-control" name="stage_awal" value="<?=$data['stage_awal']?>" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Stage Akhir</td>
                                        <td></td>
                                        <td colspan="4"><input type="text" class="form-control" name="stage_akhir" value="<?=$data['stage_akhir']?>" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Media</td>
                                        <td></td>
                                        <td colspan="4"><input type="text" class="form-control" name="media" value="<?=$data['media']?>" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Awal</td>
                                        <td></td>
                                        <td>
                                            <input type="number" class="form-control col-md-3" name="jmlh_awal_pot" value="<?=$data['jmlh_awal_pot']?>" required autofocus placeholder="Jml Awal Pot" />
                                        </td>
                                        <td>&nbsp;<label>&nbsp; Pot &nbsp;</label></td>
                                        <td>
                                            <input type="number" class="form-control col-md-3" name="jmh_awal_btl" value="<?=$data['jmh_awal_btl']?>" required autofocus placeholder="Jml Awal Botol" />
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
                                            <input style="float: right;" type="number" class="form-control col-md-3" name="jmlh_akhir_pot" value="<?=$data['jmlh_akhir_pot']?>" required autofocus placeholder="Jml Akhir Pot"  />
                                        </td>
                                        <td>&nbsp;<label>&nbsp; Pot &nbsp;</label></td>
                                        <td>
                                            <input style="float: right;" type="number" class="form-control col-md-3" name="jmlh_akhir_btl" value="<?=$data['jmlh_akhir_btl']?>" required autofocus placeholder="Jml Akhir Botol"  />
                                        </td>
                                        <td>&nbsp;<label>&nbsp; Botol &nbsp;</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Benih Pot</td>
                                        <td></td>
                                        <td colspan="2"><input type="number" class="form-control col-md-6" name="unit_benih_pot" value="<?=$data['unit_benih_pot']?>" required autofocus /></td>
                                        <td colspan="2">&nbsp;<label>&nbsp; Unit dalam Pot</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Benih Botol</td>
                                        <td></td>
                                        <td colspan="2"><input type="number" class="form-control col-md-6" name="unit_benih_bt" value="<?=$data['unit_benih_bt']?>" required autofocus /></label></td>
                                        <td colspan="2">&nbsp;<label>&nbsp; Unit dalam Botol</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Bakteri</td>
                                        <td></td>
                                        <td colspan="4"><input type="number" class="form-control" name="jmlh_bakteri" value="<?=$data['jmlh_bakteri']?>" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Durasi</td>
                                        <td></td>
                                        <td colspan="2"><input type="number" class="form-control col-md-6" name="durasi" value="<?=$data['durasi']?>" required autofocus /></td>
                                        <td colspan="2">&nbsp;<label>&nbsp; Menit</label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td></td>
                                        <td colspan="4">
                                            <textarea  class="form-control" name="keterangan" rows="10" required autofocus><?=$data['keterangan']?></textarea>
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
 
    $tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    $nama_karyawan = $_POST ['nama_karyawan'];
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
        $sql = $koneksi->query("update  `subkultur` SET `tanggal`='$tanggal', `id_karyawan`='$id_karyawan', `code_clone`='$code_clone', `stage_awal`='$stage_awal', `stage_akhir`='$stage_akhir', `media`='$media', `jmlh_awal_pot`='$jmlh_awal_pot', `jmlh_akhir_pot`='$jmlh_akhir_pot', `jmh_awal_btl`='$jmh_awal_btl',  `jmlh_akhir_btl`='$jmlh_akhir_btl', `unit_benih_pot`='$unit_benih_pot', `unit_benih_bt`='$unit_benih_bt', `jmlh_bakteri`='$jmlh_bakteri', `durasi`='$durasi', `keterangan`='$keterangan' where id_subkultur='$id'");

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
                    
                        window.location.href="?page=subkultur";

                    </script>

                ';

            }
        
        
    }

 ?>