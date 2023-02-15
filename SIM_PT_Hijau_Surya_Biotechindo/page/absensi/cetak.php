
                        <div class="container">
                            <div class="col md-12">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <td colspan="8">
                                                <center>
                                                    <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                    <h3>DATA ABSENSI</h3>
                                                </center> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Id Karyawan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Bagian</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("SELECT `id_absensi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `bagian`, `keterangan`, `validasi` FROM `absensi` JOIN karyawan USING(`id_karyawan`) where `validasi`='1' ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['id_karyawan'];?></td>  
                                            <td><?php echo $data['nama_karyawan'];?></td>  
                                            <td><?php echo $data['bagian'];?></td>  
                                            <td><?php echo $data['keterangan'];?></td>  


                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
