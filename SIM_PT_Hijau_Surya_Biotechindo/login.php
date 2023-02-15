
<?php
error_reporting(0);
    include "koneksi.php";
    include "variabel.php";
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>" >
    <meta name="keyword" content="<?=$keyword?>">

    <title><?=$title?></title>
     
    <!-- Icon -->
    <link rel="icon" href="<?=$icon?>">
    <link rel="shortcut icon" href="<?=$icon?>" type="image/x-icon">

    <!-- Fontfaces CSS-->
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    

    
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="assets/vendor/css/theme.css" rel="stylesheet" media="all">



    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />



   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body style="background-image: url('gambar/background/Background.png');">

    <div class="col-md-12">
        <div class="col-md-7">
            <div style=" padding-top: 270px;">
                <center>
                    <h1>
                        <font color="white">
                            <b>SELAMAT DATANG DI <br>
                                SISTEM INFORMASI MANAJEMEN <br>
                                PT. HIJAU SURYA BIOTECHINDO
                            </b>
                        </font>
                    </h1>
                </center>
            </div>
        </div>
        <div class="col-md-4" style="padding-top: 100px; padding-left: 50px;">
        <div class="login-wrap">
            <div class="login-content">
                <center>
                    <h1><font><b>LOGIN</b></font></h1>
                </center><br>
                
                        <?php
                
                    if(isset($_POST['login']))
                        {
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `admin_user` WHERE `username`='$username' AND `password`='$password' ");
                        $_Level=mysqli_fetch_array($query);

    
                        if(mysqli_num_rows($query) == 1)
                            {
                                session_start();
                                    $_SESSION['user']=$username;
                                    $_SESSION['password']=$password;
                                echo " 
                                        <script>
                                            alert('Selamat,,, Login Berhasil.'); 
                                            window:location='index.php' 
                                        </script>";
                            }
                        else
                            {
                                echo " 
                                        <script>
                                        alert('Upzz,,, Login Gagal, silahkan ulangi kembali'); 
                                            window:location='login.php' 
                                        </script>";                                
                            }
                    
                        }  ?>
                        <div class="login-form">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>USERNAME</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="User Name" required autofocus>
                                </div><br>
                                <div class="form-group">
                                    <label>PASSWORD</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="password" required autofocus>
                                </div><br>
                                <div align="center">
                                    <p>
                                    <input  class="btn btn-success" style="border-radius: 200px;" type="submit" name="login" value=" MASUK "></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "kaki.php";
?>



