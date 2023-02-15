
                        <div class="container">
                            <div class="col md-12">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <td colspan="8">
                                                <center>
                                                    <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                    <h3>DATA BENIH</h3>
                                                </center> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Code Clone</th>
                                            <th>Nama Benih</th>
                                            <th>No Indukan</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from benih ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal_masuk'];?></td>
                                            <td><?php echo $data['code_clone'];?></td>
                                            <td><?php echo $data['nama_benih'];?></td>  
                                            <td><?php echo $data['no_indukan'];?></td>  
                                            <td><?php echo $data['jumlah'];?></td>   


                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
