
                        <div class="container">
                            <div class="col md-12">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <td colspan="8">
                                                <center>
                                                    <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                    <p>DATA USER</p>
                                                </center> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>level</th>
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
                                            <td><?php echo $data['password'];?></td>
                                            <td><?php echo $data['level'];?></td> 
                                        </tr>

                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
