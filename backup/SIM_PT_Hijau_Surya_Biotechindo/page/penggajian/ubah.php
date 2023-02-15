<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from penggajian where id_penggajian='$id'");
    $_data = $sql->fetch_assoc();

?> 


                           
                <form action="ubah_penggajian.php" method="POST">
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">EDIT DATA PENGGAJIAN</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <!--tr>
                                        <td>tanggal</td>
                                        <td></td>
                                        <td><input type="date" class="form-control" name="tanggal"   /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr-->
                                    <tr>
                                        <td>Id Karyawan</td>
                                        <td></td>
                                        <td><input type="hidden" class="form-control" name="id_penggajian"value="<?=$_data['id_penggajian']?>" />
                                            <select class="form-control" name="id_karyawan"  >
                                                <option value="<?=$_data['id_karyawan']?>"><?=$_data['id_karyawan']?></option>
                                                <?php
                                                    $sql = $koneksi->query("select * from karyawan ");
                                                    while ($data= $sql->fetch_assoc()) {       
                                                ?>
                                                <option value="<?php echo $data['id_karyawan'];?>"><?php echo $data['id_karyawan'];?> , <?php echo $data['nama_karyawan'];?> , <?php echo $data['bagian'];?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Gaji Pokok</td>
                                        <td></td>
                                        <td><input type="number" class="form-control" name="gaji_pokok" maxlength="12" value="1500000"  /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Tunjangan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="number" class="form-control" name="tunjangan" value="700000"  /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">insentif</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="insentif"value="<?=$_data['intensif']?>" placeholder="kosongkan jika Admin Laboratorium"  /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td width="20%">Pilih Tanggal Absensi :</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="50%"><div align="right"> Tanggal Awal : </div></td>
                                        <td><input type="date" class="form-control" name="tgl_awal"   /></td>
                                        <td width="50%"><div align="right">Tanggal Akhir : </div> </td>
                                        <td><input type="date" class="form-control" name="tgl_akhir"   /></td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col-md-12">
                            
                                <table style="float: right;" >
                                    <tr>
                                        <td width="80%">
                                            <input type="submit" name="sementara" value="PROSES" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                                            <a href="?page=penggajian" class="btn btn-primary">BATAL</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </form>
            <!-- END DATA TABLE-->

