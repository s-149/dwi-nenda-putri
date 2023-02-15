

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA KONTAMINASI</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=kontaminasi&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"></i> Tambah Data</a>
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
                                            <th>Nama Karyawan</th>
                                            <th>Code Clone</th>
                                            <th>Stage</th>
                                            <th>Jumlah Pot</th>
                                            <th>Unit Benih Pot</th>
                                            <th>Jumlah Botol</th>
                                            <th>Unit Benih Botol</th>
                                            <th>Keterangan</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from kontaminasi ");
                                            while ($data= $sql->fetch_assoc()) {  

                                            $_id_karyawan=$data['id_karyawan'];
                                            //memanggil nama karyawan
                                            $_karyawan=mysqli_fetch_array(mysqli_query($koneksi,"select * from `karyawan` where `id_karyawan` ='$_id_karyawan'"));
                                            $_nama_karyawan=$_karyawan['nama_karyawan'];
     
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $_nama_karyawan;?></td>  
                                            <td><?php echo $data['code_clone'];?></td>  
                                            <td><?php echo $data['stage'];?></td>  
                                            <td><?php echo $data['jmlh_pot'];?></td>      
                                            <td><?php echo $data['unit_benih_pot'];?></td>    
                                            <td><?php echo $data['jmlh_btl'];?></td>     
                                            <td><?php echo $data['unit_benih_btl'];?></td>  
                                            <td><?php echo $data['keterangan'];?></td>     
                                            <td>
                                                <a href="?page=kontaminasi&aksi=ubah&id=<?php echo $data['id_kontaminasi']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=kontaminasi&aksi=hapus&id=<?php echo $data['id_kontaminasi']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak.php?page=kontaminasi" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

