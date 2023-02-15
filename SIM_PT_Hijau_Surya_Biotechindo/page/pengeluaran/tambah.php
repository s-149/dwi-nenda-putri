
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA PENGELUARAN</h3>
                        </div>
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Id Pengeluaran</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="id_pengeluaran"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td></td>
                                        <td>
                                            <input type="date" class="form-control" name="tanggal"  required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Pengeluaran</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="jenis_pengeluaran" required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Total Biaya</td>
                                        <td></td>
                                        <td><input type="number" class="form-control" name="total_biaya" required autofocus></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Fhoto Bukti</td>
                                        <td></td>
                                        <td><input type="file" class="form-control" name="foto_bukti" required autofocus /></td>
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
    $upload = move_uploaded_file($lokasi,$folder.$foto_bukti);

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `pengeluaran`(`id_pengeluaran`, `tanggal`, `jenis_pengeluaran`, `total_biaya`, `foto_bukti`,`keterangan`) values('$id_pengeluaran','$tanggal', '$jenis_pengeluaran', '$total_biaya', '$foto_bukti','$keterangan')");

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
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="?page=pengeluaran&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>
                             
                             




    
                