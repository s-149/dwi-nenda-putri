
                           
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA PENJUALAN</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Id Penjualan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="id_penjualan"  required autofocus /></td>
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
                                    <tr>
                                        <td>Jenis Penjualan</td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" name="jenis_penjualan"  required autofocus>
                                                <option>Domestik</option>
                                                <option>Eksport</option>
                                            </select>
                                        </td>
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
                                                <option value="<?php echo $data['code_clone'];?>"><?php echo $data['code_clone'];?>, <?php echo $data['nama_benih'];?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Nama Bibit</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="nama_bibit" maxlength="12"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr> -->
                                    <tr>
                                        <td width="20%">Harga Satuan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="number" class="form-control" name="harga_satuan"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td></td>
                                        <td><input type="number" class="form-control" name="jumlah"  required autofocus />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tujuan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="tujuan"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Penerima</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="penerima"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Ekspedisi</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="ekspedisi"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Keterangan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <textarea class="form-control" rows="5" name="keterangan"  required autofocus></textarea>
                                        </td>
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
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=penjualan" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php
 
    $id_penjualan = $_POST ['id_penjualan'];
    $tanggal = $_POST ['tanggal'];
    $jenis_penjualan = $_POST ['jenis_penjualan'];
    $code_clone = $_POST ['code_clone'];
    

    $datanama=mysqli_fetch_array(mysqli_query($koneksi,"select * from `benih` where `code_clone` ='$code_clone'"));
    $nama_bibit = $datanama['nama_benih'];

    $harga_satuan = $_POST ['harga_satuan'];
    $jumlah = $_POST ['jumlah'];

    $total_harga = $harga_satuan*$jumlah;

    $tujuan = $_POST ['tujuan'];
    $penerima = $_POST ['penerima'];
    $ekspedisi = $_POST ['ekspedisi'];
    $keterangan = $_POST ['keterangan'];


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan stok bibit_siap_jual

      $_id_kontaminasi=mysqli_fetch_array(mysqli_query($koneksi,"select * from `bibit_siap_jual` where `code_clone`='$code_clone' "));

      $_jmlh_unit=$_id_kontaminasi['jmlh_unit'];


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

      $_stok_bibit_siap_jual=$_jmlh_unit-$jumlah;
   

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `penjualan`(`id_penjualan`, `tanggal`, `jenis_penjualan`, `code_clone`, `nama_bibit`, `harga_satuan`, `jumlah`, `total_harga`, `tujuan`, `penerima`, `ekspedisi`, `keterangan`) values('$id_penjualan','$tanggal', '$jenis_penjualan', '$code_clone', '$nama_bibit', '$harga_satuan', '$jumlah', '$total_harga', '$tujuan', '$penerima', '$ekspedisi', '$keterangan')");
        if ($sql) 
            {
                $sql1 = $koneksi->query("UPDATE `bibit_siap_jual` SET `jmlh_unit`='$_stok_bibit_siap_jual' where code_clone='$code_clone' ");
                print'
                    <script type="text/javascript">
                    
                        window.location.href="?page=penjualan";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=penjualan&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>
                             
                             




    
                