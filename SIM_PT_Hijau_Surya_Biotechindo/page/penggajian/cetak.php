
                        <div class="container">
                            <div class="col md-12">
                                <table border="1" >
                                    <thead>
                                        <tr>
                                            <td colspan="10">
                                                <center>
                                                    <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                </center> 
                                                <center><h3>DATA PENGGAJIAN</h3></center> </td>
                                        </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Id Karyawan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan</th>
                                            <th>Intensif</th>
                                            <th>Gaji Kotor</th>
                                            <th>Gaji Bersih</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from penggajian  join `karyawan` using(`id_karyawan`)");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['id_karyawan'];?></td>  
                                            <td><?php echo $data['nama_karyawan'];?></td>  
                                            <td><?php echo BuatRp($data['gaji_pokok']);?>.00</td>  
                                            <td><?php echo BuatRp($data['tunjangan']);?>.00</td>  
                                            <td><?php echo BuatRp($data['intensif']);?>.00</td>   
                                            <td><?php echo BuatRp($data['gaji_kotor']);?>.00</td>   
                                            <td><?php echo BuatRp($data['gaji_bersih']);?>.00</td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
