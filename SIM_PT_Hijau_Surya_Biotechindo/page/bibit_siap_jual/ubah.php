<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("SELECT `id_bibit_siap_jual`, `tanggal_keluar`, `code_clone`, `nama_benih`, `no_indukan`, `jmlh_unit`, `keterangan` FROM `bibit_siap_jual` JOIN `benih` USING(`code_clone`) where id_bibit_siap_jual='$id'");
    $data = $sql->fetch_assoc();

?>
            
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA BIBIT</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal Keluar</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="date" class="form-control" name="tanggal_keluar" value="<?=$data['tanggal_keluar']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Code Clone</td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" name="code_clone"  required autofocus>
                                                <option><?=$data['code_clone']?></option>
                                                <?php
                                                    $sql1 = $koneksi->query("select * from benih ");
                                                    while ($data1= $sql1->fetch_assoc()) {       
                                                ?>
                                                <option><?php echo $data1['code_clone'];?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Bibit</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="nama_bibit" value="<?=$data['nama_benih']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>No Indukan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="no_indukan" rows="6" value="<?=$data['no_indukan']?>" required autofocus></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Unit</td>
                                        <td></td>
                                        <td><input type="number" class="form-control" name="jmlh_unit" value="<?=$data['jmlh_unit']?>" maxlength="12"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
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
                                            <a href="?page=bibit_siap_jual" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php
 
    $tanggal_keluar = $_POST ['tanggal_keluar'];
    $code_clone = $_POST ['code_clone'];
    $nama_bibit = $_POST ['nama_bibit'];
    $no_indukan = $_POST ['no_indukan'];
    $jmlh_unit = $_POST ['jmlh_unit'];
    $keterangan = $_POST ['keterangan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update  `bibit_siap_jual` SET `tanggal_keluar`='$tanggal_keluar', `code_clone`='$code_clone', `nama_bibit`='$nama_bibit', `no_indukan`='$no_indukan', `jmlh_unit`='$jmlh_unit', `keterangan`='$keterangan' where id_bibit_siap_jual='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=bibit_siap_jual";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=bibit_siap_jual";

                    </script>

                ';

            }
        
        
    }

 ?>