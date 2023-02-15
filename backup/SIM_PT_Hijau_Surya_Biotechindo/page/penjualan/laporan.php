

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>LAPORAN KEUNTUNGAN</h3>
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
                        </div>
                            <div class="table-responsive">
                                <table width="100%" border="1" class="table">
                                    <tr>
                                        <td colspan="3">
                                            <center>
                                                <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                <h3>LAPORAN KEUNTUNGAN</h3>
                                                 <p><?=$tgl_awal." s/d " .$tgl_akhir?></p>
                                            </center> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                    <table width="100%" border="0" >
                                    <tr>
                                        <td colspan="3">
                                            <li>PENJUALAN</li>
                                                <?php
                                                    $total = 0;
                                                    $sql = $koneksi->query("select * from penjualan  where tanggal between '$tgl_awal' and '$tgl_akhir' ");
                                                    while ($data= $sql->fetch_assoc()) { 
                                                    $total += $data['total_harga'];     
                                                ?>

                                                <table width="100%" border="0">
                                                    <tr>
                                                        <td width="20%">&nbsp;</td>
                                                        <td width="40%"><?php echo $data['id_penjualan'];?></td>
                                                        <td><?php echo BuatRp($data['total_harga']).".00,-";?></td>
                                                    </tr>
                                                </table>
                                                 <?php  } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">&nbsp;</td>
                                        <td width="60%"><font color="blue"><b>Total Penjualan</b></font></td>
                                        <td><font color="blue"><b><?=BuatRp($total).".00,-"?></b></font></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <li>PENGELUARAN</li>
                                                <?php
                                                    $total1 = 0;
                                                    $sql1 = $koneksi->query("select * from pengeluaran  where tanggal between '$tgl_awal' and '$tgl_akhir' ");
                                                    while ($data1= $sql1->fetch_assoc()) { 
                                                    $total1 += $data1['total_biaya'];     
                                                ?>

                                                <table width="100%" border="0">
                                                    <tr>
                                                        <td width="20%">&nbsp;</td>
                                                        <td width="40%"><?php echo $data1['id_pengeluaran'];?></td>
                                                        <td><?php echo BuatRp($data1['total_biaya']).".00,-"?></td>
                                                    </tr>
                                                </table>
                                                 <?php  } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">&nbsp;</td>
                                        <td><font color="blue"><b>Total Pengeluaran</b></font></td>
                                        <td><font color="blue"><b><?=BuatRp($total1).".00,-"?></b></font></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><li><font color="blue"><b> KEUNTUNGAN</b></font></li></td>
                                        <td><font color="blue"><b><?=BuatRp($total-$total1).".00,-"?></b></font></td>
                                    </tr>
                                </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak_laporan.php?page=penjualan&tgl_awal=<?=$tgl_awal?>&tgl_akhir=<?=$tgl_akhir?>" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>
<?php } ?>
