
                        <div class="container">
                            <div class="col md-12">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <td colspan="8">
                                                <center>
                                                    <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                    <h4>DATA DATA BIBIT</h4>
                                                </center> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Code Clone</th>
                                            <th>Nama Bibit</th>
                                            <th>No Indukan</th>
                                            <th>Jumlah Unit</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from bibit ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal_keluar'];?></td>
                                            <td><?php echo $data['code_clone'];?></td>
                                            <td><?php echo $data['nama_bibit'];?></td>  
                                            <td><?php echo $data['no_indukan'];?></td>  
                                            <td><?php echo $data['jmlh_unit'];?></td>    
                                            <td><?php echo $data['keterangan'];?></td> 


                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
