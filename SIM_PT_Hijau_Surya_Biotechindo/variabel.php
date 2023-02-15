<?php 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    // metta
    $description="Sistem Informasi";
    $author="MR S-149 dan Team Developer Nusaputra Sukabumi (Haerul, Angga, Sabar)";
    $keyword="Sistem Informasi, PT.HIJAU SURYA BIOTECHINDO ";

    // title
    $title="SIM PT.HIJAU SURYA BIOTECHINDO";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    // nama/organisasi/lembaga (Sesingkat Mungkin memberi nama pada variabel ini,gunakan huruf kapital)
    $organisasi="PT.HIJAU SURYA BIOTECHINDO";

    // icon
    $icon="gambar/background/Logo.png";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    $Tahun_Sekarang=date('Y');
    $KodeTransaksi=date('d_M_Y_h_i_s');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    // jumlah user

    $login="select * from `admin_user` ";
    $query=mysqli_query($koneksi,$login);
    $jml_user=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $jml_user++;
            }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    // jumlah validasi absensi

    $sql1="select * from `absensi` where validasi='0' ";
    $query1=mysqli_query($koneksi,$sql1); 
    $jml_absen=0;
        while($data=mysqli_fetch_array($query1)) 
            { 
                $jml_absen++;
            }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan Akses User

      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `admin_user` where `username` ='$UserName'"));
      $Fhoto=$akun['Photo'];
      $Level=$akun['level'];

      if ($Level=="Admin") 
        {
          $_level="0";
          $_bagian="ADMIN";
        }
      if ($Level=="AdminKepegawaian") 
        {
          $_level="1";
          $_bagian="ADMIN KEPEGAWAIAN";
        }
      if ($Level=="AdminLabolatorium") 
        {
          $_level="2";
          $_bagian="ADMIN LABORATORIUM";
        }
      if ($Level=="AdminDistribusidanKeuangan") 
        {
          $_level="3";
          $_bagian="ADMIN DISTRIBUSI DAN KEUANGAN";
        }
      if ($Level=="Direktur") 
        {
          $_level="4";
          $_bagian="DIREKTUR HIJAU SURYA";
        }
      if ($Level=="Supervisior") 
        {
          $_level="5";
          $_bagian="SUPERVISOR";
        }
      if ($Level=="AreaManajer") 
        {
          $_level="6";
          $_bagian="AREA MANAJER";
        }
      if ($Level=="Manajer") 
        {
          $_level="7";
          $_bagian="MANAJER KEUANGAN";
        }
      if ($Level=="Pegawai") 
        {
          $_level="8";
          $_bagian="Pegawai";
        }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan id otomatis pada tabel absensi

      $_id_absensi=mysqli_fetch_array(mysqli_query($koneksi,"select * from `absensi`  ORDER BY `absensi`.`id_absensi` DESC "));

      $_id_absensi=$_id_absensi['id_absensi']+1;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan id otomatis pada tabel subkultur

      $_id_subkultur=mysqli_fetch_array(mysqli_query($koneksi,"select * from `subkultur`  ORDER BY `subkultur`.`id_subkultur` DESC "));

      $_id_subkultur=$_id_subkultur['id_subkultur']+1;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan id otomatis pada tabel kontaminasi

      $_id_kontaminasi=mysqli_fetch_array(mysqli_query($koneksi,"select * from `kontaminasi`  ORDER BY `kontaminasi`.`id_kontaminasi` DESC "));

      $_id_kontam=$_id_kontaminasi['id_kontaminasi']+1;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
      // mendefinisikan id otomatis pada tabel bibit siap jual

      $_id_bibit_siap_jual=mysqli_fetch_array(mysqli_query($koneksi,"select * from `bibit_siap_jual` "));

      $_id_bibit_siap_jual=$_id_bibit_siap_jual['id_bibit_siap_jual']+1;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

   
?> 