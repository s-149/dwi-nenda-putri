

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>LAPORAN KONTAMINASI</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <form action="" method="POST">
                                    <table>
                                        <tr>
                                            <td><h4>PERIODE </h4></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><input type="date" class="form-control" name="tgl_awal"></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td> s/d </td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><input type="date" class="form-control" name="tgl_akhir"></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><button type="submit" name="tampilkan" class="btn btn-warning">TAMPILKAN</button></td>
                                        </tr>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php if (isset($_POST['tampilkan'])) { 
    $tgl_awal=$_POST['tgl_awal'];
    $tgl_akhir=$_POST['tgl_akhir'];

    ?>
  
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
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="">
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
                                            <th>nama_karyawan</th>
                                            <th>total_btl_subkultur</th>
                                            <th>total_pot_subkultur</th>
                                            <th>total_subkultur_unit</th>
                                            <th>total_bakteri</th>
                                            <th>total_btl_kontam</th>
                                            <th>total_pot_kontam</th>
                                            <th>total_kontam_unit</th>
                                            <th>total_%_kontam</th>
                                            <th>total_menit_laminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            // induk pemanggilan

                                            $no = 1;
                                            $sql = $koneksi->query("select * from karyawan  where bagian='Labolatorium' ");
                                            while ($data= $sql->fetch_assoc()) {  
                                            $_nama_karyawan=$data['nama_karyawan']; 
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
                                            while ($data1= $sql1->fetch_assoc()) {  
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
                                            

                                            // mendefinisikan nama karyawan
                                            $total_pot_kontam=0;
                                            $total_btl_kontam=0;
                                            $unit_benih_pot_kontam=0;
                                            $unit_benih_bt_kontam=0;
                                            $total_kontam_unit=0;
                                            $total_kontam=0;
                                            $sql2 = $koneksi->query("select * from kontaminasi  where id_karyawan='$_kunci' and tanggal between '$tgl_awal' and '$tgl_akhir' ");
                                            while ($data2= $sql2->fetch_assoc()) {  
                                            $_kunci2=$data2['id_karyawan'];
                                            $total_btl_kontam+=$data2['jmlh_btl'];
                                            $total_pot_kontam+=$data2['jmlh_pot'];
                                            
                                            // total unit benih botol kontam
                                            $unit_benih_pot_kontam+=$data2['unit_benih_pot']; 
                                            
                                            // total unit benih botol kontam
                                            $unit_benih_bt_kontam+=$data2['unit_benih_btl']; 
                                            
                                            $total_kontam_unit=$unit_benih_pot_kontam+$unit_benih_bt_kontam;
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
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak_laporan.php?page=kontaminasi&tgl_awal=<?=$tgl_awal?>&tgl_akhir=<?=$tgl_akhir?>" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>
<?php } ?>
