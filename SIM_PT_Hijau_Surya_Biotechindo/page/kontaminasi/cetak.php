
                        <div class="container">
                            <div class="col md-12">
                                <table border="1" class="table" id="">
                                    <thead>
                                        <tr>
                                            <td colspan="17">
                                                <center>
                                                    <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                </center> 
                                            </td>
                                        </tr>
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
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from kontaminasi join `karyawan` using(`id_karyawan`) ");
                                            while ($data= $sql->fetch_assoc()) { ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['nama_karyawan'];?></td>   
                                            <td><?php echo $data['code_clone'];?></td>  
                                            <td><?php echo $data['stage'];?></td>  
                                            <td><?php echo $data['jmlh_pot'];?></td>      
                                            <td><?php echo $data['unit_benih_pot'];?></td>    
                                            <td><?php echo $data['jmlh_btl'];?></td>     
                                            <td><?php echo $data['unit_benih_btl'];?></td>  
                                            <td><?php echo $data['keterangan'];?></td> 
                                        </tr>


                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
