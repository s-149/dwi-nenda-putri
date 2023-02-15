<?php

  error_reporting(0);
    session_start();
    
    include "koneksi.php";
    include "rupiah.php";
    include "variabel.php";

    
if (empty($_SESSION['user']) AND empty($_SESSION['password']))
    {
      session_start();
      session_destroy();
      header("Location: login.php");
    }
else {

      // memanggil data login tiap user

      $UserName=$_SESSION['user'];

      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `admin_user` where `username` ='$UserName'"));
      $Fhoto=$akun['fhoto'];

    include "kepala.php";
    print "<br>";

                      
            $page = $_GET['page'];


                if ($page=="") 
                    {
                        header("Location: index.php");
                    }
                else
                    {
                       include "page/".$page."/cetak_laporan.php";
                    }



    include "kaki.php";

    print'<script type="text/javascript">window.print();</script>';


    }
?>
