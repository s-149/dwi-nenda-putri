<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from penjualan join `benih` using(`code_clone`) where id_penjualan='$id'");
    $data = $sql->fetch_assoc();

?>
                      
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
                                        <td width="80%"><input type="text" class="form-control" name="id_penjualan" value="<?=$data['id_penjualan']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td></td>
                                        <td><input type="date" class="form-control" name="tanggal" value="<?=$data['tanggal']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Penjualan</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="jenis_penjualan" value="<?=$data['jenis_penjualan']?>"  required autofocus /></td>
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
                                        <td><input type="text" class="form-control" name="nama_bibit" value="<?=$data['nama_benih']?>" maxlength="12"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Harga Satuan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="number" class="form-control" name="harga_satuan" value="<?=$data['harga_satuan']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td></td>
                                        <td width="80%"><input type="number" class="form-control" name="jumlah" value="<?=$data['jumlah']?>"  required autofocus />
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Total Harga</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="number" class="form-control" name="total_harga" value="<?=$data['total_harga']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Tujuan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="tujuan" value="<?=$data['tujuan']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Penerima</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="penerima" value="<?=$data['penerima']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Ekspedisi</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="ekspedisi" value="<?=$data['ekspedisi']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Keterangan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <textarea class="form-control" name="keterangan" rows="5"  required autofocus><?=$data['keterangan']?></textarea>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="simpan" value="UPDATE" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
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
    $nama_bibit = $_POST ['nama_bibit'];
    $harga_satuan = $_POST ['harga_satuan'];
    $jumlah = $_POST ['jumlah'];
    $total_harga = $_POST ['total_harga'];
    $tujuan = $_POST ['tujuan'];
    $penerima = $_POST ['penerima'];
    $ekspedisi = $_POST ['ekspedisi'];
    $keterangan = $_POST ['keterangan'];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan jumlah unit

      $_id_kontaminasi=mysqli_fetch_array(mysqli_query($koneksi,"select * from `penjualan` where `id_penjualan`='$id_penjualan' "));

      $_jmlh_unit_penjualan=$_id_kontaminasi['jumlah'];


///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan stok bibit

      $_id_kontaminasi=mysqli_fetch_array(mysqli_query($koneksi,"select * from `benih` where `code_clone`='$code_clone' "));

      $_jmlh_unit=$_id_kontaminasi['jumlah'];


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// mendefinisikan jumlah stok saat update data
      
      if ($jumlah == $_jmlh_unit_penjualan ) 
            {
                $_stok_benih=$_jmlh_unit;
            }
      elseif ($jumlah <= $_jmlh_unit_penjualan ) 
            {
                $_stok1=$_jmlh_unit_penjualan-$jumlah;
                $_stok_benih=$_jmlh_unit+$_stok1;
            }
      elseif ($jumlah >= $_jmlh_unit_penjualan ) 
            {
                $_stok1=$jumlah-$_jmlh_unit_penjualan;
                $_stok_benih=$_jmlh_unit-$_stok1;
            }


      

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update  `penjualan` SET `id_penjualan`='$id_penjualan', `tanggal`='$tanggal', `jenis_penjualan`='$jenis_penjualan', `code_clone`='$code_clone', `harga_satuan`='$harga_satuan',`jumlah`='$jumlah',`total_harga`='$total_harga',`tujuan`='$tujuan',`penerima`='$penerima',`ekspedisi`='$ekspedisi',`keterangan`='$keterangan' where id_penjualan='$id'");

        if ($sql) 
            {

                $sql1 = $koneksi->query("UPDATE `bibit_siap_jual` SET `jmlh_unit`='$_stok_benih' where code_clone='$code_clone' ");

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
                    
                        window.location.href="?page=penjualan";

                    </script>

                ';

            }
        
        
    }

 ?>