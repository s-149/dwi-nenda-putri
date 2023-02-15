

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA BIBIT</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=bibit&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"></i> Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Code Clone</th>
                                            <th>Nama Bibit</th>
                                            <th>No Indukan</th>
                                            <th>Jumlah Unit</th>
                                            <th>Keterangan</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("SELECT `id_bibit`, `tanggal_keluar`, `code_clone`, `nama_benih`, `no_indukan`, `jmlh_unit`, `keterangan` FROM `bibit` JOIN `benih` USING(`code_clone`) ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal_keluar'];?></td>
                                            <td><?php echo $data['code_clone'];?></td>
                                            <td><?php echo $data['nama_benih'];?></td>  
                                            <td><?php echo $data['no_indukan'];?></td>  
                                            <td><?php echo $data['jmlh_unit'];?></td>    
                                            <td><?php echo $data['keterangan'];?></td>   

                                            <td>
                                                <a href="?page=bibit&aksi=ubah&id=<?php echo $data['id_bibit']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=bibit&aksi=hapus&id=<?php echo $data['id_bibit']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div><br>
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak.php?page=bibit" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

