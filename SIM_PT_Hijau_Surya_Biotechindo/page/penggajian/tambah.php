
                           
                <form action="tambah_penggajian.php" method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">INPUT DATA PENGGAJIAN</h3>
                        </div>

                        <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td>id_karyawan</td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" name="id_karyawan"  >
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
                                        <td>gaji_pokok</td>
                                        <td></td>
                                        <td><input type="number" class="form-control" name="gaji_pokok" maxlength="12" value="1500000"  /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">tunjangan</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="number" class="form-control" name="tunjangan" value="700000"  /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">intensif</td>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td width="80%"><input type="text" class="form-control" name="intensif" placeholder="kosongkan jika Admin Laboratorium"  /></td>
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