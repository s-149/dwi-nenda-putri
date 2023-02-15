

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA KARYAWAN</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Karyawan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Umur</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Tanggal Gabung</th>
                                            <th>Bagian</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from karyawan ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['id_karyawan'];?></td>
                                            <td><?php echo $data['nama_karyawan'];?></td>
                                            <td><?php echo $data['umur'];?></td>  
                                            <td><?php echo $data['alamat'];?></td>  
                                            <td><?php echo $data['no_hp'];?></td>  
                                            <td><?php echo $data['tanggal_gabung'];?></td>  
                                            <td><?php echo $data['bagian'];?></td>  
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;"><br>
                        <a class="btn btn-warning" href="cetak.php?page=karyawan" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

