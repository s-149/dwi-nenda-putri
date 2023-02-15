
<?php 
    $tgl_awal=$_GET['tgl_awal'];
    $tgl_akhir=$_GET['tgl_akhir'];

?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
  
                    <div class="row">
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="">
                                <table border="1" class="" id="">
                                    <thead>
                                        <td colspan="11">
                                            <center>
                                                <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                <h3>LAPORAN KONTAMINASI</h3>
                                                 <p><?=$tgl_awal." s/d " .$tgl_akhir?></p>
                                            </center> 
                                        </td>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Total Botol Subkultur</th>
                                            <th>Total Pot Subkultur</th>
                                            <th>Total Subkultur Unit</th>
                                            <th>Total Bakteri</th>
                                            <th>Total Botol Kontam</th>
                                            <th>Total Pot Kontam</th>
                                            <th>Total Kontam Unit</th>
                                            <th>Total % Kontam</th>
                                            <th>Total Menit Laminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            // induk pemanggilan

                                            $no = 1;
                                            $sql = $koneksi->query("select * from karyawan where bagian='Labolatorium' ");
                                            while ($data= $sql->fetch_assoc()) {  
                                            $_nama_karyawan=$data['nama_karyawan']; 
                                            $_kunci=$data['id_karyawan'];

                                            // mendefinisikan nilai total pada subkultur
                                            $total_btl_subkultur=0;
                                            $total_pot_subkultur=0;
                                            $total_subkultur_unit=0;
                                            $total_bakteri=0;
                                            $total_menit_laminar=0;
                                            $sql1 = $koneksi->query("select * from subkultur  where id_karyawan='$_kunci' and tanggal between '$tgl_awal' and '$tgl_akhir' ");
                                            while ($data1= $sql1->fetch_assoc()) {  
                                            $total_btl_subkultur+=$data1['jmlh_akhir_pot'];
                                            $total_pot_subkultur+=$data1['jmlh_akhir_btl'];
                                            $total_subkultur_unit=$total_btl_subkultur+$total_pot_subkultur;
                                            $total_bakteri+=$data1['jmlh_bakteri'];
                                            $total_menit_laminar+=$data1['durasi'];
                                            }
                                            

                                            // mendefinisikan nama karyawan
                                            $total_pot_kontam=0;
                                            $total_btl_kontam=0;
                                            $total_kontam_unit=0;
                                            $total_kontam=0;
                                            $sql2 = $koneksi->query("select * from kontaminasi  where id_karyawan='$_kunci' and tanggal between '$tgl_awal' and '$tgl_akhir' ");
                                            while ($data2= $sql2->fetch_assoc()) {  
                                            $_kunci2=$data2['id_karyawan'];
                                            $total_btl_kontam+=$data2['jmlh_btl'];
                                            $total_pot_kontam+=$data2['jmlh_pot'];
                                            $total_kontam_unit=$total_btl_kontam+$total_pot_kontam;
                                            $total_kontam=($total_kontam_unit/$total_subkultur_unit)*100;
                                            }

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $_nama_karyawan;?></td>  
                                            <td><?php echo $total_btl_subkultur;?></td> 
                                            <td><?php echo $total_pot_subkultur;?></td> 
                                            <td><?php echo $total_subkultur_unit;?></td> 
                                            <td><?php echo $total_bakteri;?></td> 
                                            <td><?php echo $total_btl_kontam;?></td> 
                                            <td><?php echo $total_pot_kontam;?></td> 
                                            <td><?php echo $total_kontam_unit;?></td> 
                                            <td><?php echo round($total_kontam,1)."%";?></td> 
                                            <td><?php echo $total_menit_laminar;?></td> 

                                        </tr>

                                        <?php }   ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

