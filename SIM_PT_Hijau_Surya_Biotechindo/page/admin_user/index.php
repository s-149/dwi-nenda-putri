
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <h3>DATA USER</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=admin_user&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"></i> Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>username</th>
                                            <!-- <th>password</th> -->
                                            <th>level</th>
                                            <th>Photo</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from admin_user ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['username'];?></td>
                                            <!-- <td><?php //echo $data['password'];?></td> -->
                                            <td><?php echo $data['level'];?></td>   
                                            <td><a href="gambar/user/<?php echo $data['Photo'];?>" target="_blank"><img width="50px" src="gambar/user/<?php echo $data['Photo'];?>"></a></td>   

                                            <td>
                                                <a href="?page=admin_user&aksi=ubah&id=<?php echo $data['username']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=admin_user&aksi=hapus&id=<?php echo $data['username']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div><br><br>
                    <div style="float: right;">
                        <a class="btn btn-warning" href="cetak.php?page=admin_user" target="_blank"><i class="fa fa-print"></i> CETAK</a>
                    </div>
                </div>

