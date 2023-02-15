

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA ABSEN</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Absensi</th>
                                            <th>Tanggal</th>
                                            <th>Id Karyawan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Bagian</th>
                                            <th>Keterangan</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("SELECT `id_absensi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `bagian`, `keterangan`, `validasi` FROM `absensi` JOIN karyawan USING(`id_karyawan`) where `validasi`='0' ");
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

                                            <td>
                                                <a href="?page=absensi&aksi=proses_validasi&id=<?php echo $data['id_absensi']; ?>" class="btn btn-primary" ><i class="fa fa-edit"></i> Validasi</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div><br>
                    <!-- <div style="float: right;">
                        <a class="btn btn-warning" href="cetak.php?page=absensi" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div> -->
                </div>

