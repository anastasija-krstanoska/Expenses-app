<!doctype html>
<html lang="en" dir="ltr">
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">



    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="public/background_assets/images/brand/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- TITLE -->
    <title>LOGIN</title>


{{--    <link href="/backend_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/css/style.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/css/dark-style.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/css/skin-modes.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">--}}
{{--    <link href="/backend_assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/css/icons.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/plugins/sidebar/sidebar.css" rel="stylesheet">--}}
{{--    <link href="/backend_assets/plugins/select2/select2.min.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet"/>--}}
{{--    <link href="/backend_assets/colors/color1.css" id="theme" rel="stylesheet" type="text/css" media="all"/>--}}

    <!-- BOOTSTRAP CSS -->
    <link href="public/background_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/background_assets/css/style.css" rel="stylesheet"/>
    <link href="public/background_assets/css/dark-style.css" rel="stylesheet"/>
    <link href="public/background_apublicssets/css/skin-modes.css" rel="stylesheet" />
    <link href="public/background_assets/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">
    <link href="public/background_assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">
    <link href="public/background_assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>
    <link href="public/background_assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <link href="public/background_assets/css/icons.css" rel="stylesheet"/>
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="public/background_assets/colors/color1.css" />

</head>

<body>

<!-- BACKGROUND-IMAGE -->
<div class="login-img">

    <!-- GLOABAL LOADER -->
    <div id="global-loader">

        <img src="public/backend_assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOABAL LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto">
                <div class="text-center">
                    <img src="/background_assets/images/brand/logo.png" class="header-brand-img" alt="">
                </div>
            </div>
            <div class="container-login100">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        <form class="login100-form validate-form">
									<span class="login100-form-title">
										Login
									</span>
                            <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
                            </div>
                            <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                                <input class="input100" type="password" name="pass" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
                            </div>
                            <div class="text-end pt-1">
                                <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p>
                            </div>
                            <div class="container-login100-form-btn">
                                <a href="index.html" class="login100-form-btn btn-primary">
                                    Login
                                </a>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Not a member?<a href="/register" class="text-primary ms-1">Create an Account</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center my-3">
                            <a href="" class="social-login  text-center me-4">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="" class="social-login  text-center me-4">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="" class="social-login  text-center">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>
<!-- BACKGROUND-IMAGE CLOSED -->

<script src="public/background_assets/js/jquery.min.js"></script>
<script src="public/background_assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="public/background_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="public/background_assets/js/jquery.sparkline.min.js"></script>
<script src="public/background_assets/js/circle-progress.min.js"></script>
<script src="public/background_assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="public/background_assets/plugins/input-mask/jquery.mask.min.js"></script>
<script src="public/background_assets/js/custom.js"></script>

</body>
</html>
