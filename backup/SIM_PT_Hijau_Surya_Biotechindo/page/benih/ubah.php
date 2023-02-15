<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from benih where code_clone='$id'");
    $data = $sql->fetch_assoc();

?>

            
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA BENIH</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Tanggal Masuk</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="date" class="form-control" name="tanggal_masuk" value="<?=$data['tanggal_masuk']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Code Clone</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="code_clone" value="<?=$data['code_clone']?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Benih</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="nama_benih" value="<?=$data['nama_benih']?>"  required autofocus /></td>
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
                                        <td>Jumlah</td>
                                        <td></td>
                                        <td><input type="text" class="form-control" name="jumlah" value="<?=$data['jumlah']?>" maxlength="12"  required autofocus /></td>
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
                                            <a href="?page=benih" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php
 
    $tanggal_masuk = $_POST ['tanggal_masuk'];
    $code_clone = $_POST ['code_clone'];
    $nama_benih = $_POST ['nama_benih'];
    $no_indukan = $_POST ['no_indukan'];
    $jumlah = $_POST ['jumlah'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("update  `benih` SET `tanggal_masuk`='$tanggal_masuk', `code_clone`='$code_clone', `nama_benih`='$nama_benih', `no_indukan`='$no_indukan', `jumlah`='$jumlah' where code_clone='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=benih";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=benih";

                    </script>

                ';

            }
        
        
    }

 ?>