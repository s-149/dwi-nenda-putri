<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from admin_user where username='$id'");
    $data = $sql->fetch_assoc();

?>


            
                <form method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA USER</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">Username</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <input class="form-control" name="username" value="<?php echo $data['username'];?>" /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td></td>
                                        <td>
                                            <input class="form-control" name="password" type="Password" value="<?php echo $data['password'];?>"/></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Level</td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" name="level" >
                                                <option value="<?=$data['level']?>"><?=$data['level']?></option>
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
                                            <a href="gambar/user/<?php echo $data['fhoto'];?>" target="_blank"><img width="50px" src="gambar/user/<?php echo $data['fhoto'];?>"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Fhoto Baru</td>
                                        <td></td>
                                        <td>
                                            <input type="file" name="foto" />
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
                                            <input type="submit" name="simpan" value="UPDATE" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
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
    

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if (!empty($lokasi)) {
           
        $upload = move_uploaded_file($lokasi, "gambar/user/".$Gambar);
 		
 		$sql = $koneksi->query("update  admin_user set username='$username', password='$password', level='$level', fhoto='$Gambar' where username='$id'");

 		
 			    
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
                print"

                    <script type='text/javascript'>
                    
                        window.location.href='?page=admin_user&aksi=ubah&id=$id';

                    </script>

                ";

            }
 		
 	}else{
        $sql = $koneksi->query("update  admin_user set username='$username', password='$password', level='$level' where username='$id'");

        
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
                print"

                    <script type='text/javascript'>
                    
                        window.location.href='?page=admin_user&aksi=ubah&id=$id';

                    </script>

                ";

            }
    }

     }

 ?>
                             
                             

