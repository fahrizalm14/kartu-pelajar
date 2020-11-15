<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <title><?= $title; ?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?= base_url('asset/kartu/logo/') . $sekolah['logo']; ?>">
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?= base_url('vendor'); ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('vendor'); ?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('vendor'); ?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert -->
    <link href="<?= base_url('vendor'); ?>/plugins/sweet-alert2/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('vendor'); ?>/plugins/summernote/summernote-bs4.css" rel="stylesheet" type="text/css">
    <!-- Plugins css -->
    <link href=" <?= base_url('vendor'); ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor'); ?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor'); ?>/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
    <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flash-error'); ?>"></div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo-->
                    <div>

                        <a href="<?= base_url(); ?>" class="logo">
                            <img src="<?= base_url('vendor/vertical/'); ?>assets/images/logo.png" alt="" height="26">
                        </a>

                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="<?= base_url('dashboard'); ?>"><i class="dripicons-home"></i> Dashboard</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="<?= base_url('siswa'); ?>"><i class="dripicons-graduation"></i>Data Siswa</i></a>
                                </li>
                                <li class="has-submenu">
                                    <a href="<?= base_url('sekolah'); ?>"><i class="dripicons-briefcase"></i>Data Sekolah</i></a>
                                </li>
                                <li class="has-submenu">
                                    <a href="<?= base_url('kartu'); ?>"><i class="dripicons-view-apps"></i>Kartu Sekolah</i></a>
                                </li>
                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->

                        <!-- Search input -->

                        <ul class="list-inline ml-auto mb-0">
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= base_url('vendor/vertical/'); ?>assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                    <span class="d-none d-md-inline-block ml-1">Administrator <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Administrator</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>
                </div> <!-- end container -->
            </div>
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->