<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from pengeluaran where id_pengeluaran='$id'");
    $data = $sql->fetch_assoc();

?>
       
                <form action="" method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA PENGELUARAN</h3>
                        </div>

                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td width="20%">Id Pengeluaran</td>
                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                    <td width="80%"><input type="text" class="form-control" name="id_pengeluaran" value="<?=$data['id_pengeluaran']?>"  required autofocus /></td>
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
                                    <td>Jenis Pengeluaran</td>
                                    <td></td>
                                    <td><input type="text" class="form-control" name="jenis_pengeluaran" value="<?=$data['jenis_pengeluaran']?>"  required autofocus /></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Total Biaya</td>
                                    <td></td>
                                    <td><input type="text" class="form-control" name="total_biaya" rows="6" value="<?=$data['total_biaya']?>" required autofocus></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Fhoto Bukti Sebelumnya</td>
                                    <td></td>
                                    <td><img width="200px" height="200px" src="gambar/bukti/<?php echo $data['foto_bukti'];?>"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Fhoto Bukti Baru</td>
                                    <td></td>
                                    <td><input type="file" name="foto_bukti" /></td>
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
                                        <a href="?page=pengeluaran" class="btn btn-primary">BATAL</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php
 
    $id_pengeluaran = $_POST ['id_pengeluaran'];
    $tanggal = $_POST ['tanggal'];
    $jenis_pengeluaran = $_POST ['jenis_pengeluaran'];
    $total_biaya = $_POST ['total_biaya'];
    $keterangan = $_POST ['keterangan'];

    $foto = $_FILES['foto_bukti']['name'];
    $lokasi = $_FILES['foto_bukti']['tmp_name'];

    $folder='gambar/bukti/';
    $foto_bukti=date('d_M_Y_h_i_s').'_'.$foto;

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        if (!empty($lokasi)) {
           
        $upload = move_uploaded_file($lokasi,$folder.$foto_bukti);

        $sql = $koneksi->query("update  `pengeluaran` SET `id_pengeluaran`='$id_pengeluaran', `tanggal`='$tanggal', `jenis_pengeluaran`='$jenis_pengeluaran', `total_biaya`='$total_biaya', `foto_bukti`='$foto_bukti', `keterangan`='$keterangan' where id_pengeluaran='$id'");

            if ($sql) 
                {
                    print'

                        <script type="text/javascript">
                    
                            window.location.href="?page=pengeluaran";

                        </script>

                    ';
                }
            else
                {
                    print'

                        <script type="text/javascript">
                    
                            window.location.href="?page=pengeluaran";

                        </script>

                    ';

                }

        
        }
        else{
        $sql = $koneksi->query("update  `pengeluaran` SET `id_pengeluaran`='$id_pengeluaran', `tanggal`='$tanggal', `jenis_pengeluaran`='$jenis_pengeluaran', `total_biaya`='$total_biaya', `keterangan`='$keterangan' where id_pengeluaran='$id'");

        

            if ($sql) 
                {
                    print'

                        <script type="text/javascript">
                    
                            alert ("Data Berhasil Disimpan");
                            window.location.href="?page=pengeluaran";

                        </script>

                    ';
                }
            else
                {
                    print'

                        <script type="text/javascript">
                    
                            alert ("Proses terhenti, Silahkan ulangi kembali.");
                            window.location.href="?page=pengeluaran";

                        </script>

                    ';

                }
        
        }
    }

 ?>