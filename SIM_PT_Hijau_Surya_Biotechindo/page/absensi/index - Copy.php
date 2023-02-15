

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
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=absensi&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"></i> Tambah Data</a>
                                        <?php if ($jml_absen >=1 ){ ?>
                                        <a href="?page=absensi&aksi=validasi" class="btn btn-primary" style="margin-top: 8px;"></i> <?=$jml_absen?> Absensi baru belum divalidasi</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
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
                                            $sql = $koneksi->query("select * from absensi where validasi='1' ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['id_karyawan'];?></td>  
                                            <?php $nk=mysqli_fetch_array(mysqli_query($koneksi,"select * from `karyawan` where `id_karyawan` ='$data[id_karyawan]'")); ?>
                                            <td><?php echo $nk['nama_karyawan'];?></td>  
                                            <td><?php echo $nk['bagian'];?></td>  
                                            <td><?php echo $data['keterangan'];?></td>  

                                            <td>
                                                <a href="?page=absensi&aksi=ubah&id=<?php echo $data['id_absensi']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=absensi&aksi=hapus&id=<?php echo $data['id_absensi']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div><br>
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak.php?page=absensi" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

