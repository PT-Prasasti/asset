<?php
    include '../koneksi.php';
    session_start();
    $role = $_SESSION['role'];
    $role = $_SESSION['nama_pegawai'];
?>

<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Asset - Prasasti</title>

        <meta name="description" content="Asset - Prasasti">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="Asset">
        <meta property="og:site_name" content="PT. Prambanan Sarana Sejati">
        <meta property="og:description" content="Asset - Prasasti">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="assets/logo1.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/logo1.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/logo1.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="../assets/css/codebase.css">

        <link rel="stylesheet" href="../assets/js/plugins/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="../assets/js/plugins/simplemde/simplemde.min.css">

        <link rel="stylesheet" href="../assets/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../assets/js/plugins/dropzonejs/dist/dropzone.css">
        <link rel="stylesheet" href="../assets/js/plugins/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="../assets/js/plugins/fullcalendar/fullcalendar.min.css">


    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-fullrow">
            <nav id="sidebar">
                <div class="sidebar-content">
                    <div class="content-header content-header-fullrow px-15">
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <div class="content-header-item">
                                <img src="../assets/logosimple.png" width="45%">
                            </div>
                        </div>
                    </div>
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="#">
                                <img class="img-avatar" src="../assets/avrifan.jpeg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <p class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"><?= ucfirst($_SESSION['nama_pegawai']) ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-side content-side-full">
                        <ul class="nav-main nav-link">
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'dashboard')) ? 'active' : '' ?>" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'stock')) ? 'active' : '' ?>" href="../stock/index.php"><i class="fa fa-book"></i><span class="sidebar-mini-hide">Latest Stock</span></a>
                            </li>
                            
                            <li class="nav-main-heading">
                                <span class="text-white"><b>Transaction</b></span>
                            </li>
                            <li>
                                <a class="nav-submenu ?= (strpos($_SERVER['REQUEST_URI'], 'barang_masuk')) ? 'active' : '' ?>" data-toggle="nav-submenu" href="#"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Incoming</span></a>
                                    <ul>
                                        <li>
                                            <a href="../barang_masuk/index.php">List Incoming</a>
                                        </li>
                                        <li>
                                            <a href="../barang_masuk/form_add.php">Add Item</a>
                                        </li>
                                    </ul>
                                </li>
                            <!--  <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'data_barang')) ? 'active' : '' ?>" href="../data_barang/index.php"><i class="fa fa-chevron-circle-left"></i><span class="sidebar-mini-hide">Barang Keluar</span></a>
                            </li>
                             <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'data_barang')) ? 'active' : '' ?>" href="../data_barang/index.php"><i class="fa fa-gears"></i><span class="sidebar-mini-hide">Service</span></a>
                            </li> -->

                            <li class="nav-main-heading">
                                <span class="text-white"><b>Data Master</b></span>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'data_barang')) ? 'active' : '' ?>" href="../data_barang/index.php"><i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Data Item</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header id="page-header">
                <div class="content-header">
                    <div class="content-header-section">
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </div>
                    <div class="content-header-section">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block"><?= ucfirst($_SESSION['nama_pegawai']) ?></span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </header>