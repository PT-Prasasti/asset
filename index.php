<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Asset Prasasti</title>

        <meta name="description" content="Asset Prasasti">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="E-PRASS">
        <meta property="og:site_name" content="PT. Prambanan Sarana Sejati">
        <meta property="og:description" content="Asset Prasasti">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="assets/logo1.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/logo1.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/logo1.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">
            <main id="main-container">
                <div class="bg-body-dark bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <div class="py-30 text-center">
                                    <img src="assets/logosimple.png" width="70%">
                                    <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
                                </div>
                                <form class="js-validation-signin" action="query_login.php" method="post">
                                    <div class="block block-themed block-rounded block-shadow">
                                        <div class="block-header bg-gd-dusk">
                                            <h3 class="block-title">Please Sign In</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="text-center mb-5">
                                                <?php 
                                                    if(isset($_GET['pesan'])){
                                                        if($_GET['pesan'] == "gagal"){
                                                            echo "Login failed! Incorrect username or password!";
                                                        }
                                                        else if($_GET['pesan'] == "logout"){
                                                            echo "You have successfully logout";
                                                        }
                                                        else if($_GET['pesan'] == "belum_login"){
                                                            echo "You must log in to access the admin page";
                                                        }
                                                    }
                                                ?>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-username">Username</label>
                                                    <input type="text" class="form-control" id="login-username" name="username">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-password">Password</label>
                                                    <input type="password" class="form-control" id="login-password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-12 text-center push">
                                                    <button type="submit" class="btn btn-block btn-alt-primary">
                                                        <i class="si si-login mr-10"></i> Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content bg-body-light">
                                            <div class="form-group text-center">
                                                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#">RIFAN_HD</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>

        <script src="assets/js/codebase.core.min.js"></script>
        <script src="assets/js/codebase.app.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/pages/op_auth_signin.min.js"></script>
    </body>
</html>