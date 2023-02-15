
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA PENGELUARAN</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=pengeluaran&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"></i> Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Pengeluaran</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Pengeluaran</th>
                                            <th>Total Biaya</th>
                                            <th>Fhoto Bukti</th>
                                            <th>Keterangan</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from pengeluaran ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['id_pengeluaran'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['jenis_pengeluaran'];?></td>  
                                            <td><?php echo $data['total_biaya'];?></td>  
                                            <td><a href="gambar/bukti/<?php echo $data['foto_bukti'];?>"><img width="200px" height="200px" src="gambar/bukti/<?php echo $data['foto_bukti'];?>"></a></td>    
                                            <td><?php echo $data['keterangan'];?></td>   

                                            <td>
                                                <a href="?page=pengeluaran&aksi=ubah&id=<?php echo $data['id_pengeluaran']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=pengeluaran&aksi=hapus&id=<?php echo $data['id_pengeluaran']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;"><br>
                        <a class="btn btn-warning" href="cetak.php?page=pengeluaran" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

