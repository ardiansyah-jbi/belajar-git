        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">

                <?php if (session()->get('level') == "1") { ?>
                    <li><a href="<?php echo base_url('admin') ?>">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url('fakultas') ?>">Fakultas</a></li>
                            <li><a href="<?php echo base_url('gedung') ?>">Gedung</a></li>
                            <li><a href="<?php echo base_url('ruangan') ?>">Ruangan</a></li>
                            <li><a href="<?php echo base_url('prodi') ?>">Prodi</a></li>
                            <li><a href="<?php echo base_url('ta') ?>">Tahun Akademik</a></li>
                            <li><a href="<?php echo base_url('matkul') ?>">Mata Kuliah</a></li>
                            <li><a href="<?php echo base_url('mhs') ?>">Mahasiswa</a></li>
                            <li><a href="<?php echo base_url('dosen') ?>">Dosen</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url('kelas') ?>">Kelas</a></li>
                            <li><a href="<?php echo base_url('jadwal_ta') ?>">Jadwal Kuliah</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url('user') ?>">User</a></li>
                            <li><a href="<?php echo base_url('ta/setting') ?> ">Setting Tahun Akademik</a></li>
                        </ul>
                    </li>


                    <li><a href="#">About</a></li>
                <?php  } elseif (session()->get('level') == "2") {   ?>
                    <li><a href="<?php echo base_url('dasbor_mhs') ?>">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url('krs') ?>">KRS</a></li>
                            <li><a href="<?php echo base_url('dasbor_mhs/absensi') ?>">ABSENSI</a></li>
                        </ul>
                    </li>


                <?php  } elseif (session()->get('level') == "3") {   ?>
                    <li><a href="">Dosen</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Menu1</a></li>
                            <li><a href="#">Menu2</a></li>
                        </ul>
                    </li>

                <?php  } ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?php if (session()->get('username') == "") { ?>
                    <li><a href="<?= base_url('auth') ?>"><i class="fa fa-sign-in"></i>Login</a></li>
                <?php  } else { ?>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if (session()->get('level') == 1) {  ?>
                                <!-- The user image in the navbar-->
                                <img src="<?php echo base_url('foto/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                            <?php } elseif (session()->get('level') == 2) {  ?>
                                <img src="<?php echo base_url('fotomhs/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                            <?php  } else {  ?>
                                <img src="<?php echo base_url('fotodosen/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                            <?php  } ?>

                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?= session()->get('nama') ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <?php if (session()->get('level') == 1) {  ?>
                                    <!-- The user image in the navbar-->
                                    <img src="<?php echo base_url('foto/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
                                <?php } elseif (session()->get('level') == 2) {  ?>
                                    <img src="<?php echo base_url('fotomhs/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
                                <?php  } else {  ?>
                                    <img src="<?php echo base_url('fotodosen/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
                                <?php  } ?>

                                <p>
                                    <?php echo session()->get('nama') ?> || <?php if (session()->get('level') == 1) {
                                                                                echo 'Admin';
                                                                            } elseif (session()->get('level') == 2) {
                                                                                echo 'Mahasiswa';
                                                                            } elseif (session()->get('level') == 3) {
                                                                                echo 'dosen';
                                                                            } ?>

                                    <small><?= date('D M Y') ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo  base_url('auth/logout') ?>" class="btn btn-default btn-flat">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php  } ?>
            </ul>
        </div>
        <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
        </nav>
        </header>


        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <!-- <section class="content-header">
                    <h1>
                        Top Navigation
                        <small>Example 2.0</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Layout</a></li>
                        <li class="active">Top Navigation</li>
                    </ol>
                </section> -->

                <!-- Main content -->
                <section class="content">