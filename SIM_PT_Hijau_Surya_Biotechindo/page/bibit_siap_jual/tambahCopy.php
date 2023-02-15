 
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA BIBIT</h3>
                        </div>
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal Keluar</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <!-- id telah terisi otomatis -->
                                            <input type="hidden" class="form-control" name="id_bibit_siap_jual" value="<?=$_id_bibit_siap_jual?>"  required autofocus />

                                            <input type="date" class="form-control" name="tanggal_keluar"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Code Clone</td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" name="code_clone"  required autofocus>
                                                <?php
                                                    $sql = $koneksi->query("select * from benih ");
                                                    while ($data= $sql->fetch_assoc()) {       
                                                ?>
                                                <option><?php echo $data['code_clone'];?></option>
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
                                        <td><input type="text" class="form-control" name="nama_bibit" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>No Indukan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="no_indukan" required autofocus></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Unit</td>
                                        <td></td>
                                        <td><input type="number" class="form-control" name="jmlh_unit" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td></td>
                                        <td>
                                            <textarea class="form-control" rows="5" name="keterangan" required autofocus></textarea>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=bibit_siap_jual" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php
 
    $id_bibit_siap_jual = $_POST ['id_bibit_siap_jual'];
    $tanggal_keluar = $_POST ['tanggal_keluar'];
    $code_clone = $_POST ['code_clone'];
    $nama_bibit = $_POST ['nama_bibit'];
    $no_indukan = $_POST ['no_indukan'];
    $jmlh_unit = $_POST ['jmlh_unit'];
    $keterangan = $_POST ['keterangan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `bibit_siap_jual`(`id_bibit_siap_jual`, `tanggal_keluar`, `code_clone`, `nama_bibit`, `no_indukan`, `jmlh_unit`, `keterangan`) values('$id_bibit_siap_jual','$tanggal_keluar','$code_clone', '$nama_bibit', '$no_indukan', '$jmlh_unit','$keterangan')");


        $sql1 = $koneksi->query("INSERT INTO `laporan_bibit_siap_jual`(`id_bibit_siap_jual`, `tanggal_keluar`, `code_clone`, `nama_bibit`, `no_indukan`, `jumlah`) values('$id_bibit_siap_jual','$tanggal_keluar','$code_clone', '$nama_bibit', '$no_indukan', '$jmlh_unit')");

        

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
                    
                        window.location.href="?page=bibit&aksi=tambah_siap_jual";

                    </script>

                ';

            }
        
        
    }

 ?>
                             
                             




    
                