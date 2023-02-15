
<?php 
    $tgl_awal=$_GET['tgl_awal'];
    $tgl_akhir=$_GET['tgl_akhir'];

?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
  
                    <div class="row">
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35"></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="">
                                <table border="1">
                                    <tr>
                                        <td colspan="9">
                                            <center>
                                                <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                <h3>LAPORAN PENGGAJIAN</h3>
                                                 <p><?=$tgl_awal." s/d " .$tgl_akhir?></p>
                                            </center> 
                                        </td>
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
                                            $sql = $koneksi->query("select * from penggajian join `karyawan` using(`id_karyawan`) where tanggal between '$tgl_awal' and '$tgl_akhir' ");
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
                    </div>
                </div>

