
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block" style="background-color: white; color: black;" >
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img width="50px" src="<?=$icon?>" />
                        </a>
                        <h5>Sistem Informasi Manajemen PT.Hijau Surya Biotechindo</h5>
                    </div>
                    <div class="header__navbar" >
                        <ul class="list-unstyled" style="float: right; padding-right: 35px;">
                            <li>
                                <a href="index.php"><strong><font color="green">BERANDA</font></strong>
                                    <span class="bot-line"></span>
                                </a>
                            </li>

                            <!--Akses Admin Kepegawaian-->
                            <?php if ($_level=="0") { ?>
                            <li class="has-sub">
                                <a href="index.php?page=admin_user"><strong><font color="green">USER &nbsp; &nbsp;</font></strong>
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <!--Akses Admin Kepegawaian-->


                            <!--Akses Admin Kepegawaian-->
                            <?php if ($_level=="1") { ?>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">KARYAWAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">KARYAWAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=karyawan"><font color="green">Data Karyawan</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=absensi"><font color="green">Absensi</font></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LAPORAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LAPORAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=absensi&aksi=laporan"><font color="green">Laporan Absensi</font></a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <!--Akses Admin Kepegawaian-->

                            <!--Akses Admin Labolatorium-->
                            <?php if ($_level=="2") { ?>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LABORATORIUM &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LABORATORIUM</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=benih"><font color="green">Data Benih</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=subkultur"><font color="green">Subkultur</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=kontaminasi"><font color="green">Kontaminasi</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=bibit"><font color="green">Data Bibit</font></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LAPORAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LAPORAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=bibit&aksi=laporan"><font color="green">Laporan Data Bibit</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=kontaminasi&aksi=laporan"><font color="green">Laporan Kontaminasi</font></a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <!--Akses Admin Labolatorium-->

                            <!--Akses Admin Distribusi dan Keuangan-->
                            <?php if ($_level=="3") { ?>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">D & K &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">D & K</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=penggajian"><font color="green">Penggajian</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=bibit_siap_jual"><font color="green">Bibit Siap Jual</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=penjualan"><font color="green">Penjualan</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=pengeluaran"><font color="green">Pengeluaran</font></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LAPORAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LAPORAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=penggajian&aksi=laporan"><font color="green">Laporan Penggajian</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=bibit_siap_jual&aksi=laporan"><font color="green">Laporan Bibit Siap Jual</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=penjualan&aksi=laporan"><font color="green">Laporan Keuntungan</font></a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <!--Akses Admin Distribusi dan Keuangan-->

                            <!--Akses Direktur-->
                            <?php if ($_level=="4") { ?>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">KARYAWAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">KARYAWAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=karyawan&aksi=tampil"><font color="green">Data Karyawan</font></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LAPORAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LAPORAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=absensi&aksi=laporan"><font color="green">Laporan Absensi</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=penggajian&aksi=laporan"><font color="green">Laporan Penggajian</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=kontaminasi&aksi=laporan"><font color="green">Laporan Kontaminasi</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=bibit&aksi=laporan"><font color="green">Laporan Bibit</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=bibit_siap_jual&aksi=laporan"><font color="green">Laporan Bibit Siap Jual</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=penjualan&aksi=laporan"><font color="green">Laporan Keuntungan</font></a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <!--Akses Direktur-->

                            <!--Akses Supervisior-->
                            <?php if ($_level=="5") { ?>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">KARYAWAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">KARYAWAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=karyawan&aksi=tampil"><font color="green">Data Karyawan</font></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LAPORAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LAPORAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=absensi&aksi=laporan"><font color="green">Laporan Absensi</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=kontaminasi&aksi=laporan"><font color="green">Laporan Kontaminasi</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=bibit&aksi=laporan"><font color="green">Laporan Bibit</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=bibit_siap_jual&aksi=laporan"><font color="green">Laporan Bibit Siap Jual</font></a>
                                    </li><br>
                                </ul>
                            </li>
                            <?php } ?>
                            <!--Akses Supervisior-->

                            <!--Akses Area Manajer-->
                            <?php if ($_level=="6") { ?>
                            <li class="has-sub">
                                <a href="index.php?page=admin_user"><strong><font color="green">USER &nbsp; &nbsp;</font></strong>
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">KARYAWAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">KARYAWAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=karyawan&aksi=tampil"><font color="green">Data Karyawan</font></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LAPORAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LAPORAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=absensi&aksi=laporan"><font color="green">Laporan Absensi</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=penggajian&aksi=laporan"><font color="green">Laporan Penggajian</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=kontaminasi&aksi=laporan"><font color="green">Laporan Kontaminasi</font></a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=bibit&aksi=laporan"><font color="green">Laporan Bibit</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=bibit_siap_jual&aksi=laporan"><font color="green">Laporan Bibit Siap Jual</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=penjualan&aksi=laporan"><font color="green">Laporan Keuntungan</font></a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <!--Akses Area Manajer-->

                            <!--Akses Manajer-->
                            <?php if ($_level=="7") { ?>
                            <li class="has-sub">
                                <a href="#"><strong><font color="green">LAPORAN &nbsp; &nbsp; <i class="fas  fa-sort-desc" ></i></font></strong>
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <center><a href="#"><font color="green">LAPORAN</font></a></center>
                                    </li>
                                    <li>
                                        <a href="index.php?page=penggajian&aksi=laporan"><font color="green">Laporan Penggajian</font></a>
                                    </li><br>
                                    <li>
                                        <a href="index.php?page=penjualan&aksi=laporan"><font color="green">Laporan Keuntungan</font></a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <!--Akses Manajer-->
                            <li>
                                <a href="logout.php"><strong><font color="green">LOGOUT</font></strong>
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="gambar/user/<?=$Fhoto?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->