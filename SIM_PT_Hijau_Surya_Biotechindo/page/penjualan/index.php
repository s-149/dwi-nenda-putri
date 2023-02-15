
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA PENJUALAN</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=penjualan&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"></i> Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Penjualan</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Penjualan</th>
                                            <th>Code Clone</th>
                                            <th>Nama Bibit</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                            <th>Tujuan</th>
                                            <th>Penerima</th>
                                            <th>Ekspedisi</th>
                                            <th>Keterangan</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("SELECT * FROM `penjualan` JOIN `benih` USING(`code_clone`)");
                                            while($data=$sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['id_penjualan'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['jenis_penjualan'];?></td>  
                                            <td><?php echo $data['code_clone'];?></td>  
                                            <td><?php echo $data['nama_benih'];?></td>  
                                            <td><?php echo BuatRp($data['harga_satuan']);?>.00</td>  
                                            <td><?php echo $data['jumlah'];?></td>   
                                            <td><?php echo BuatRp($data['total_harga']);?>.00</td>   
                                            <td><?php echo $data['tujuan'];?></td>   
                                            <td><?php echo $data['penerima'];?></td>   
                                            <td><?php echo $data['ekspedisi'];?></td>   
                                            <td><?php echo $data['keterangan'];?></td>  

                                            <td>
                                                <a href="?page=penjualan&aksi=ubah&id=<?php echo $data['id_penjualan']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=penjualan&aksi=hapus&id=<?php echo $data['id_penjualan']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;"><br>
                        <a class="btn btn-warning" href="cetak.php?page=penjualan" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

