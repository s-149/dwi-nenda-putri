
                        <div class="container">
                            <div class="col md-12">
                                <table width="100%" border="1" class="" id="">
                                    <tr>
                                        <td colspan="3">
                                            <center>
                                                <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                <h3>LAPORAN PENJUALAN</h3>
                                            </center> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                    <table width="100%" border="1" >
                                    
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
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $total;
                                            $sql = $koneksi->query("select * from penjualan ");
                                            while ($data= $sql->fetch_assoc()) { 
                                            $total+=$data['total_harga'];      
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['id_penjualan'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['jenis_penjualan'];?></td>  
                                            <td><?php echo $data['code_clone'];?></td>  
                                            <td><?php echo $data['nama_bibit'];?></td>  
                                            <td><?php echo BuatRp($data['harga_satuan']);?>.00</td>  
                                            <td><?php echo $data['jumlah'];?></td>   
                                            <td><?php echo BuatRp($data['total_harga']);?>.00</td>   
                                            <td><?php echo $data['tujuan'];?></td>   
                                            <td><?php echo $data['penerima'];?></td>   
                                            <td><?php echo $data['ekspedisi'];?></td>   
                                            <td><?php echo $data['keterangan'];?></td>  
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                    <tr>
                                        <td colspan="2"><font color="blue"><b>Total Penjualan</b></font></td>
                                        <td colspan="11" ><font color="blue"><b>: <?=BuatRp($total).".00"?></b></font></td>
                                    </tr>
                                </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
