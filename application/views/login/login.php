<!DOCTYPE html>

<html lang="es" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Empire | B4+ admin template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template">
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes">
    <link rel="icon" type="image/x-icon" href="assets\img\favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="<?= base_url()?>assets\fonts\fontawesome.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\fonts\ionicons.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\fonts\linearicons.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\fonts\open-iconic.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\fonts\pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\fonts\feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?= base_url()?>assets\css\bootstrap-material.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\css\shreerang-material.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\css\uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="<?= base_url()?>assets\libs\perfect-scrollbar\perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url()?>assets\css\pages\authentication.css">
    <link rel="stylesheet" href="<?= base_url()?>assets\libs\toastr\toastr.css">



</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('assets/img/bg/21.jpg');">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="assets\img\logo-dark.png" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->

                    <h5 class="text-center text-muted font-weight-normal mb-4">Ingrese a su cuenta</h5>

                    <!-- Form -->
                    <form action="<?= base_url(); ?>login" method="POST">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <label class="form-label d-flex justify-content-between align-items-end">
                                <span>Contraseña</span>
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="txtPassword">
                                <span class="input-group-prepend">
                                <button class="btn btn-secondary" type="button" id="btnToggle"><i id="eyeIcon"  class="fas fa-eye" ></i></button>
                                    <div class="clearfix"></div>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-0">
                            <!--<label class="custom-control custom-checkbox m-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>-->
                            </label>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                    </form>
                    <!-- [ Form ] End -->

                </div>

            </div>

        </div>
    <div class="layout-overlay layout-sidenav-toggle"></div>

    </div>
    <!-- / Content -->


    <!-- Core scripts -->
    <script src="<?= base_url()?>assets\js\pace.js"></script>
    <script src="<?= base_url()?>assets\js\jquery-3.2.1.min.js"></script>
    <script src="<?= base_url()?>assets\libs\popper\popper.js"></script>
    <script src="<?= base_url()?>assets\js\bootstrap.js"></script>
    <script src="<?= base_url()?>assets\js\sidenav.js"></script>
    <script src="<?= base_url()?>assets\js\layout-helpers.js"></script>
    <script src="<?= base_url()?>assets\js\material-ripple.js"></script>

    <!-- Libs -->
    <script src="<?= base_url()?>assets\libs\perfect-scrollbar\perfect-scrollbar.js"></script>

    <!-- Demo -->
   
    <script src="<?= base_url()?>assets\libs\toastr\toastr.js"></script>

    <!-- Demo -->
    <script src="<?= base_url()?>assets\js\analytics.js"></script>
    <script src="<?= base_url()?>assets\js\pages\<?=$error ?>"></script>

    <script>
        let passwordInput = document.getElementById('txtPassword'),
            toggle = document.getElementById('btnToggle'),
            icon =  document.getElementById('eyeIcon');

        function togglePassword() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.add("fa-eye-slash");
            //toggle.innerHTML = 'hide';
        } else {
            passwordInput.type = 'password';
            icon.classList.remove("fa-eye-slash");
            //toggle.innerHTML = 'show';
        }
        }

        function checkInput() {
        //if (passwordInput.value === '') {
        //toggle.style.display = 'none';
        //toggle.innerHTML = 'show';
        //  passwordInput.type = 'password';
        //} else {
        //  toggle.style.display = 'block';
        //}
        }

        toggle.addEventListener('click', togglePassword, false);
        passwordInput.addEventListener('keyup', checkInput, false);
    </script>

    

</body>

</html>
