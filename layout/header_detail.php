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
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-boxed">
            <header id="page-header">
                <div class="content-header">
                    <div class="content-header-section w-100">
                        <div class="row no-gutters">
                            <div class="col">
                            </div>
                            <div class="col-3 text-center">
                                <div class="content-header-item">
                                    <img src="../assets/logosimple.png" width="100%">
                                </div>
                            </div>
                            <div class="col text-right">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>