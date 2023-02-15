
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
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <td colspan="8">
                                            <center>
                                                <h3>PT.HIJAU SURYA BIOTECHINDO</h3>
                                                <h3>LAPORAN DATA BIBIT</h3>
                                                 <p><?=$tgl_awal." s/d " .$tgl_akhir?></p>
                                            </center> 
                                        </td>
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
                                            $sql = $koneksi->query("SELECT `id_bibit`, `tanggal_keluar`, `code_clone`, `nama_benih`, `no_indukan`, `jmlh_unit`, `keterangan` FROM `bibit` JOIN `benih` USING(`code_clone`)  where tanggal_keluar between '$tgl_awal' and '$tgl_akhir' ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['tanggal_keluar'];?></td>
                                            <td><?php echo $data['code_clone'];?></td>
                                            <td><?php echo $data['nama_benih'];?></td>  
                                            <td><?php echo $data['no_indukan'];?></td>  
                                            <td><?php echo $data['jmlh_unit'];?></td>    
                                            <td><?php echo $data['keterangan'];?></td>   
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

