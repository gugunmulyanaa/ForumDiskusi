    <?php $avatar = $this->session->userdata('avatar'); ?>
    <?php $nama_user = $this->session->userdata('username'); ?>
    <?php $id_no = $this->session->userdata('id_no'); ?>
    <?php $nama = $this->session->userdata('nama'); ?>
    <?php $level = $this->session->userdata('level'); ?>
    <div id="wrapper">
        <div id="layout-static">
            <div class="static-sidebar-wrapper sidebar-blue">
                <div class="static-sidebar">
                    <div class="sidebar">
                        <div class="widget" id="widget-profileinfo">
                            <div class="widget-body">
                                <div class="userinfo ">
                                    <div class="avatar pull-left">
                                        <img src="<?php echo base_url('GUI/avatar/' . $avatar . ''); ?>" class="img-responsive img-circle">
                                    </div>
                                    <div class="info">
                                        <span class="username"><?php echo $nama; ?></span>
                                    </div>

                                    <div class="acct-dropdown clearfix dropdown">
                                        <span class="pull-left"><span class="online-status online"></span>Online</span>
                                        <!-- <span class="pull-right dropdown-toggle" data-toggle="dropdown"><a href="javascript:void(0)" class="btn btn-fab-caret btn-xs btn-fab"><i class="material-icons">arrow_drop_down</i><div class="ripple-container"></div></a></span>
                    <ul class="dropdown-menu">
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                    </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($level == 'admin') { ?>

                            <div class="widget stay-on-collapse" id="widget-sidebar">
                                <nav role="navigation" class="widget-body">
                                    <ul class="acc-menu">
                                        <li class="nav-separator"><span>Navigation</span></li>
                                        <li><a class="withripple" href="<?php echo base_url('frontend'); ?>"><span class="icon">
                                                    <i class="material-icons">home</i></span><span>Ke halaman depan</span><span class="badge badge-teal"></span></a></li>
                                        <li><a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">code</i></span><span>Member</span></a>
                                            <ul class="acc-menu">
                                                <li><a class="withripple" href="<?php echo base_url('backend/input_member'); ?>">Input Member</a></li>
                                                <li><a class="withripple" href="<?php echo base_url('backend/lihat_member'); ?>">Lihat Member</a></li>
                                            </ul>
                                        </li>

                                        <li><a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">create</i></span><span>Thread</span></a>
                                            <ul class="acc-menu">
                                                <li><a class="withripple" href="<?php echo base_url('backend/kelola_kategori'); ?>">Kelola Kategori</a></li>
                                                <li><a class="withripple" href="<?php echo base_url('backend/input_berita'); ?>">Input Thread</a></li>
                                                <li><a class="withripple" href="<?php echo base_url('backend/lihat_berita'); ?>">Lihat Thread</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">create</i></span><span>Frontend</span></a>
                                            <ul class="acc-menu">
                                                <li><a class="withripple" href="<?php echo base_url('backend/kelola_visimisi'); ?>">Kelola Visi Misi</a></li>
                                                <li><a class="withripple" href="<?php echo base_url('backend/kelola_beranda'); ?>">Kelola Beranda</a></li>
                                                <li><a class="withripple" href="<?php echo base_url('backend/kelola_komentar'); ?>">Kelola Komentar</a></li>
                                            </ul>
                                        </li>




                                </nav>
                            </div>
                        <?php } else if ($level == 'mhs') { ?>

                            <div class="widget stay-on-collapse" id="widget-sidebar">
                                <nav role="navigation" class="widget-body">
                                    <ul class="acc-menu">
                                        <li class="nav-separator"><span>Navigation</span></li>
                                        <li><a class="withripple" href="<?php echo base_url('frontend'); ?>"><span class="icon">
                                                    <i class="material-icons">home</i></span><span>Ke halaman depan</span><span class="badge badge-teal"></span></a></li>
                                        <li><a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">code</i></span><span>Member</span></a>
                                            <ul class="acc-menu">
                                                <li><a class="withripple" href="<?php echo base_url('backend/lihat_member'); ?>">Lihat Member</a></li>
                                            </ul>
                                        </li>

                                        <li><a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">create</i></span><span>Thread</span></a>
                                            <ul class="acc-menu">
                                                <li><a class="withripple" href="<?php echo base_url('backend/input_berita'); ?>">Input Thread</a></li>
                                                <li><a class="withripple" href="<?php echo base_url('backend/lihat_berita_saya/' . $id_no . ''); ?>">Lihat Thread Saya</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">create</i></span><span>Settings akun</span></a>
                                            <ul class="acc-menu">
                                                <li><a class="withripple" href="<?php echo base_url('backend/kelola_akun/' . $id_no . ''); ?>">Kelola Akun saya</a></li>
                                            </ul>
                                        </li>




                                </nav>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>