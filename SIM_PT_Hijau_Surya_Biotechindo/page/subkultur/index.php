

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA SUBKULTUR</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=subkultur&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"></i> Tambah Data</a>
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
                                            <th>Stage Awal</th>
                                            <th>Stage Akhir</th>
                                            <th>Media</th>
                                            <th>Jumlah Awal Pot</th>
                                            <th>Jumlah Akhir Pot</th>
                                            <th>Jumlah Awal Botol</th>
                                            <th>Jumlah Akhir Botol</th>
                                            <th>Unit Benih Pot</th>
                                            <th>Unit Benih Botol</th>
                                            <th>Jumlah Bakteri</th>
                                            <th>Durasi</th>
                                            <th>Keterangan</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from subkultur join `karyawan` using(`id_karyawan`) ");
                                            while ($data= $sql->fetch_assoc()) {  ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['nama_karyawan'];?></td>    
                                            <td><?php echo $data['code_clone'];?></td>  
                                            <td><?php echo $data['stage_awal'];?></td>  
                                            <td><?php echo $data['stage_akhir'];?></td>    
                                            <td><?php echo $data['media'];?></td>     
                                            <td><?php echo $data['jmlh_awal_pot'];?></td>     
                                            <td><?php echo $data['jmlh_akhir_pot'];?></td>     
                                            <td><?php echo $data['jmh_awal_btl'];?></td>     
                                            <td><?php echo $data['jmlh_akhir_btl'];?></td>     
                                            <td><?php echo $data['unit_benih_pot'];?></td>     
                                            <td><?php echo $data['unit_benih_bt'];?></td>     
                                            <td><?php echo $data['jmlh_bakteri'];?></td>     
                                            <td><?php echo $data['durasi'];?></td>     
                                            <td><?php echo $data['keterangan'];?></td>     
                                            <td>
                                                <a href="?page=subkultur&aksi=ubah&id=<?php echo $data['id_subkultur']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=subkultur&aksi=hapus&id=<?php echo $data['id_subkultur']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak.php?page=subkultur" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

