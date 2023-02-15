
                        <div class="container">
                            <div class="col md-12">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <td colspan="8"><center><h3>DATA KARYAWAN</h3></center> </td>
                                        </tr>
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
