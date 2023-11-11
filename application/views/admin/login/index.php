<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Pink Sipanda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>auth/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>auth/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/') ?>auth/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/') ?>auth/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/') ?>auth/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">

                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">PINK SIPANDA</h5>
                                        <p class="text-muted mt-2">Dinas Pemberdayaan Perempuan dan Perlindungan Anak - Kab. Nunukan</p>
                                    </div>
                                    <?php if (!empty($this->session->flashdata('failed'))) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $this->session->flashdata('failed') ?>
                                        </div>
                                    <?php } ?>  
                                    <form class="form-horizontal" action="<?= base_url('/auth/authenticate') ?>" method="post">

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                                In</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <!-- <a href="pages-recoverpw.html" class="text-muted"><i
                                                class="mdi mdi-lock me-1"></i> Forgot your password?</a> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-5 text-center">

                                    <p>©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> DSP3A<i class=""></i> DKISP Nunukan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay bg-primary"></div>
                        <!-- end bubble effect -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>


    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/') ?>auth/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>auth/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>auth/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/') ?>auth/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('assets/') ?>auth/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url('assets/') ?>auth/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="<?= base_url('assets/') ?>auth/libs/pace-js/pace.min.js"></script>
    <!-- password addon init -->
    <script src="<?= base_url('assets/') ?>auth/js/pages/pass-addon.init.js"></script>

</body>

</html>