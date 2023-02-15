
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
                            <div class="table-responsive">
                                <table width="100%" border="1" class="" id="">
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
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

