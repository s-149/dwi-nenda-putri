
                        <div class="container">
                            <div class="col md-12">
                                <table border="1" class="" id="">
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
                                            <th>Id Karyawan</th>
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
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from subkultur ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['id_karyawan'];?></td>
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
                                        </tr>


                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
