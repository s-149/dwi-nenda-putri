

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>LAPORAN ABSENSI</h3>
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
                                        <td colspan="8">
                                            <center>
                                                <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                <h3>LAPORAN ABSENSI</h3>
                                                 <p><?=$tgl_awal." s/d " .$tgl_akhir?></p>
                                            </center> 
                                        </td>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Absensi</th>
                                            <th>Tanggal</th>
                                            <th>Id Karyawan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Bagian</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from absensi  where tanggal between '$tgl_awal' and '$tgl_akhir' ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['id_absensi'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['id_karyawan'];?></td>  
                                            <td><?php echo $data['nama_karyawan'];?></td>  
                                            <td><?php echo $data['bagian'];?></td>  
                                            <td><?php echo $data['keterangan'];?></td>  
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak_laporan.php?page=absensi&tgl_awal=<?=$tgl_awal?>&tgl_akhir=<?=$tgl_akhir?>" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>
<?php } ?>
