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

  
                             
 if (isset($_POST['sementara'])) {

 
    //$tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    $gaji_pokok = $_POST ['gaji_pokok'];
    $tunjangan = $_POST ['tunjangan'];
    $intensif = $_POST ['intensif'];
    $tgl_awal = $_POST ['tgl_awal'];
    $tgl_akhir = $_POST ['tgl_akhir'];

        // induk pemanggilan

            $sql = $koneksi->query("select * from karyawan where id_karyawan='$id_karyawan' ");
                while ($data= $sql->fetch_assoc()) 
                    // pembuka tabel karyawan
                    {  
                        // mendefinisikan nama karyawan
                        $_nama_karyawan=$data['nama_karyawan']; 

                        // mendefinisikan bagian
                        $_bagian1=$data['bagian'];

                        // memanipulasi karakter 
                        $_bagian2= str_replace(" ", "", $_bagian1);

                        // mendefinisikan primary
                        $_kunci=$data['id_karyawan'];

        // mendefinisikan nilai total pada subkultur
            $total_btl_subkultur=0;
            $total_pot_subkultur=0;
            $unit_benih_pot_subkultur=0;
            $unit_benih_bt_subkultur=0;
            $total_subkultur_unit=0;
            $total_bakteri=0;
            $total_menit_laminar=0;
            $sql1 = $koneksi->query("select * from subkultur  where id_karyawan='$_kunci' and tanggal between '$tgl_awal' and '$tgl_akhir' ");
                while ($data1= $sql1->fetch_assoc()) 
                    {  

                        // total botol subkultur
                        $total_btl_subkultur+=$data1['jmlh_akhir_pot']; 

                        // total pot subkultur
                        $total_pot_subkultur+=$data1['jmlh_akhir_btl']; 
                                            
                        // total unit benih botol subkultur
                        $unit_benih_pot_subkultur+=$data1['unit_benih_pot']; 
                                            
                        // total unit benih botol subkultur
                        $unit_benih_bt_subkultur+=$data1['unit_benih_bt']; 
                                            
                        // total unit subkultur
                        $total_subkultur_unit=$unit_benih_pot_subkultur+$unit_benih_bt_subkultur;

                        $total_bakteri+=$data1['jmlh_bakteri'];
                        $total_menit_laminar+=$data1['durasi'];
                    }
                                            

        // mendefinisikan data kontaminasi
            $total_pot_kontam=0;
            $total_btl_kontam=0;
            $unit_benih_pot_kontam=0;
            $unit_benih_bt_kontam=0;
            $total_kontam_unit=0;
            $total_kontam=0;
            $sql2 = $koneksi->query("select * from kontaminasi  where id_karyawan='$_kunci' and tanggal between '$tgl_awal' and '$tgl_akhir' ");
                while ($data2= $sql2->fetch_assoc()) 
                    {  
                        $_kunci2=$data2['id_karyawan'];
                        $total_btl_kontam+=$data2['jmlh_btl'];
                        $total_pot_kontam+=$data2['jmlh_pot'];
                                            
                        // total unit benih botol kontam
                        $unit_benih_pot_kontam+=$data2['unit_benih_pot']; 
                                            
                        // total unit benih botol kontam
                        $unit_benih_bt_kontam+=$data2['unit_benih_btl']; 
                        
                        // menghitung total kontam unit                    
                        $total_kontam_unit=$unit_benih_pot_kontam+$unit_benih_bt_kontam;

                        // menghitung total kontam
                        $total_kontam=round(($total_kontam_unit/$total_subkultur_unit)*100,1);
                    }

            // mendefinisikan total intensip

            if ($total_kontam<=10) {
                $_intensif=200000;
            }
            elseif ($total_kontam<=20) {
                $_intensif=100000;
            }
            elseif ($total_kontam<=50) {
                $_intensif=50000;
            }
            elseif ($total_kontam<=100) {
                $_intensif=0;
            }
            else{
                $_intensif=0;
            }

            // mendefinisikan tujuan akhir intensip
                if ($_bagian2=='Labolatorium') 
                        {
                            $_kontam=$total_kontam;
                            $_intensif1=$_intensif;

                        }
                else    {
                            $_kontam=0;
                            $_intensif1=$intensif;
                        }

            // penghitungan kontam selesai

            // mendefinisikan jumlah absensi
            $absen=0;
            $sql_A = $koneksi->query("select * from absensi  where id_karyawan='$_kunci' and tanggal between '$tgl_awal' and '$tgl_akhir' ");
                while ($data_A= $sql_A->fetch_assoc()) 
                    {  
                        $absen++;
                    }    
                // penutup tabel karyawan
                }

            // total absen
            $_absensi=$absen;

            // menghitung gaji kotor
            $_gaji_kotor=$gaji_pokok+$tunjangan+$_intensif1;

            // mendefinisikan potongan absen
            // menjumlahkan gaji 100%
            $_gaji_bersih1=$_gaji_kotor/100;

            // menjumlahkan potongan % absen
            $_gaji_bersih2=$_gaji_bersih1*4;

            // menjumlahkan total potongan % absen
            $_potongan=$_gaji_bersih2*$_absensi;

            // menghitung total gaji bersih
            $_gaji_bersih=$_gaji_kotor-$_potongan;


            

?>
                           
                           
                <form action="" method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA PENGGAJIAN</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td>tanggal</td>
                                        <td></td>
                                        <td><input type="date" class="form-control" name="tanggal"  required autofocus/></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>id_karyawan</td>
                                        <td></td>
                                        <td><label><?=$id_karyawan?></label>
                                        <input type="hidden" class="form-control" name="id_karyawan" maxlength="12" value="<?=$id_karyawan?>"  required autofocus />

                                            <!--select class="custom-select dblock w-60" name="id_karyawan"  required autofocus>
                                                <option><?=$id_karyawan?></option>
                                                <?php
                                                    //$sql3 = $koneksi->query("select * from karyawan ");
                                                    //while ($data3= $sql3->fetch_assoc()) {       
                                                ?>
                                                <option><?php// echo $data3['id_karyawan'];?></option>
                                                <?php //} ?>
                                            </select-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>nama_karyawan</td>
                                        <td></td>
                                        <td><label><?=$_nama_karyawan?></label>
                                            <input type="hidden" class="form-control" name="nama_karyawan" value="<?=$_nama_karyawan?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>gaji_pokok</td>
                                        <td></td>
                                        <td><label><?=BuatRp($gaji_pokok)?>.00</label>
                                        <input type="hidden" class="form-control" name="gaji_pokok" maxlength="12" value="<?=$gaji_pokok?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">tunjangan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><label><?=BuatRp($tunjangan)?>.00</label>
                                        <input type="hidden" class="form-control" name="tunjangan" value="<?=$tunjangan?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>bagian</td>
                                        <td></td>
                                        <td><label><?=$_bagian1?></label>

                                        <input type="hidden" class="form-control" name="bagian" value="<?=$_bagian1?>"  required autofocus />

                                            <!--select class="custom-select dblock w-100" name="bagian"  required autofocus>
                                                <option><?=$_bagian1?></option>
                                                <option value="Admin_Kepegawaian">Admin Kepegawaian</option>
                                                <option value="Admin_Labolatorium">Admin Labolatorium</option>
                                                <option value="Admin_Distribusi_dan_Keuangan">Admin Distribusi dan Keuangan</option>
                                                <option>Supervisior</option>
                                                <option>Manajer</option>
                                                <option value="Area_Manajer">Area Manajer</option>
                                                <option>Direktur</option>
                                            </select-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <?php if ($_bagian2=='Labolatorium') { ?>
                                    <tr>
                                        <td width="20%">total_kontam</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><label><?=$total_kontam?> %</label></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                        </div>
                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="20%">intensif</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><label><?=BuatRp($_intensif1)?>.00</label>
                                            <input type="hidden" class="form-control" name="total_kontam" value="<?=$_kontam?>"  required autofocus />
                                            <input type="hidden" class="form-control" name="intensif" value="<?=$_intensif1?>"  required autofocus />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">gaji_kotor</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><label><?=BuatRp($_gaji_kotor)?>.00</label>
                                            <input type="hidden" class="form-control" name="gaji_kotor" value="<?=$_gaji_kotor?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Absensi</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <label><?=$_absensi?> (Potongan= <?=BuatRp($_potongan)?>.00)</label>
                                            <input type="hidden" hidden="true" class="form-control" name="id_absensi" value="<?=$_absensi?>"  required autofocus />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">gaji_bersih</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><label><?=BuatRp($_gaji_bersih)?>.00</label>
                                            <input type="hidden" class="form-control" name="gaji_bersih" value="<?=$_gaji_bersih?>"  required autofocus /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">keterangan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%">
                                            <textarea class="form-control" rows="5" name="keterangan"  required autofocus></textarea>
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
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="index.php?page=penggajian&aksi=tambah" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->


 <?php }


  if (isset($_POST['simpan'])) {
 
    $tanggal = $_POST ['tanggal'];
    $id_karyawan = $_POST ['id_karyawan'];
    $nama_karyawan = $_POST ['nama_karyawan'];
    $gaji_pokok = $_POST ['gaji_pokok'];
    $tunjangan = $_POST ['tunjangan'];
    $bagian = $_POST ['bagian'];
    $total_kontam = $_POST ['total_kontam'];
    $intensif = $_POST ['intensif'];
    $gaji_kotor = $_POST ['gaji_kotor'];
    $id_absensi = $_POST ['id_absensi'];
    $gaji_bersih = $_POST ['gaji_bersih'];
    $keterangan = $_POST ['keterangan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {

        include "koneksi.php";
        
        $sql = $koneksi->query("INSERT INTO `penggajian`(`tanggal`, `id_karyawan`, `gaji_pokok`, `tunjangan`, `total_%_kontam`, `intensif`, `gaji_kotor`, `id_absensi`, `gaji_bersih`, `keterangan`) values('$tanggal', '$id_karyawan', '$gaji_pokok', '$tunjangan', '$total_kontam', '$intensif', '$gaji_kotor', '$id_absensi', '$gaji_bersih', '$keterangan')");
        //$sql1 = $koneksi->query("INSERT INTO `laporan_penggajian`(`id_penggajian`) values(NULL)");

        
        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="index.php?page=penggajian";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        window.location.href="index.php?page=penggajian&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

}
          

    include "kaki.php";

    }
?>