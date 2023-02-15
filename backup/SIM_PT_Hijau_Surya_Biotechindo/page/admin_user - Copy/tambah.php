 
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA USER</h3>
                        </div>
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Username</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <input type="text" class="form-control" name="username" required autofocus/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td></td>
                                        <td>
                                            <input type="Password" class="form-control" name="password" required autofocus/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Level</td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" name="level" required autofocus>
                                                <option value=""> == Pilih Akses Level == </option>
                                                <option value="AdminKepegawaian">Admin Kepegawaian</option>
                                                <option value="AdminLabolatorium">Admin Labolatorium</option>
                                                <option value="AdminDistribusidanKeuangan">Admin Distribusi dan Keuangan</option>
                                                <option value="Direktur">Direktur</option>
                                                <option value="Supervisior">Supervisior</option>
                                                <option value="AreaManajer">Area Manajer</option>
                                                <option value="Manajer">Manajer</option>
                                                
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Fhoto</td>
                                        <td></td>
                                        <td>
                                            <input type="file" name="foto" required autofocus/>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=admin_user" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php

 	$username = $_POST ['username'];
 	$password = $_POST ['password'];
    $level = $_POST ['level'];
 	
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $Gambar=date('d_M_Y_h_i_s').'_'.$foto;
    $upload = move_uploaded_file($lokasi, "gambar/user/".$Gambar);

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if ($upload) {
           
       
 		
 		$sql = $koneksi->query("insert into admin_user (username, password, level, fhoto)values('$username', '$password', '$level', '$Gambar')");

 		
 			
        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=admin_user";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="?page=admin_user&aksi=tambah";

                    </script>

                ';

            }
        
 		
 	}

     }

 ?>
                             
                             

