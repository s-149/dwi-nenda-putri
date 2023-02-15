 
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA BIBIT</h3>
                        </div>
                            <div class="col-md-10" style="padding-bottom: 20px;">
                                <form action="" method="POST">
                                    <table>
                                        <tr>
                                            <td width="20%">Pilih Code Clone:</td>
                                            <td width="60%">
                                                <select class="form-control" name="Id"  required autofocus>
                                                    <?php
                                                        $sql = $koneksi->query("select * from benih ");
                                                        while ($data= $sql->fetch_assoc()) {       
                                                    ?>
                                                        <option><?php echo $data['code_clone'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td width="10%"> <button class="btn btn-primary" type="submit" name="pilih"><i class="fa fa-search"></i></button></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    <?php if (isset($_POST['pilih'])) { 
                        $Id=$_POST['Id'];
                        $data=mysqli_fetch_array(mysqli_query($koneksi,"select * from `benih` where `code_clone` ='$Id'"));
     
                    ?> 

                        <form method="POST" enctype="multipart/form-data" >
                            <div class="col-md-12">
                                <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td width="20%">tanggal_keluar</td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td width="80%"><input type="date" class="form-control" name="tanggal_keluar"  required autofocus /></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Code Clone</td>
                                                <td></td>
                                                <td><input type="text" class="form-control" name="code_clone" value="<?=$data['code_clone']?>"  required autofocus />
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
                                                <td><input type="number" class="form-control" name="jmlh_unit" value="<?=$data['jumlah']?>" maxlength="12"  required autofocus /></td>
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
                                                    <a href="?page=bibit" class="btn btn-primary">BATAL</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
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
        $sql = $koneksi->query("INSERT INTO `bibit`(`tanggal_keluar`, `code_clone`, `jmlh_unit`,`keterangan`) values('$tanggal_keluar','$code_clone', '$jmlh_unit','$keterangan')");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=bibit";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=bibit&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>
                             
                             




    
                