
                        <div class="container">
                            <div class="col md-12">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <td colspan="8">
                                                <center>
                                                    <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                </center> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Pengeluaran</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Pengeluaran</th>
                                            <th>Total Biaya</th>
                                            <th>Fhoto Bukti</th>
                                            <th>Keterangan</th>
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
                                            <td><img width="200px" height="200px" src="gambar/bukti/<?php echo $data['foto_bukti'];?>"></td>    
                                            <td><?php echo $data['keterangan'];?></td> 
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
