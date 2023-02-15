<?php

    error_reporting(0);
    session_start();
    
    include "koneksi.php";

    
if (empty($_SESSION['user']) AND empty($_SESSION['password']))
    {
      session_start();
      session_destroy();
      header("Location: login.php");
    }
else {

      // memanggil data login tiap user

      $UserName=$_SESSION['user'];

    include "rupiah.php";
    include "variabel.php";

    include "kepala.php";
    include "header.php";

                      
            $page = $_GET['page'];
            $aksi = $_GET['aksi'];


                if ($page=="") 
                    {
                        include "home.php";
                    }
                elseif ($page == "dashboard" ) 
                    {
                        include "home.php";
                    }

                else 
                    {
                        if ($aksi == "") 
                            {
                                include "page/".$page."/index.php";
                            }
                        else 
                            {
                                include "page/".$page."/".$aksi.".php";
                            }
                    }

    include "kaki.php";

    }
?>