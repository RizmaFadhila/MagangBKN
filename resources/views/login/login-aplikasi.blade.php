<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Loginadmin/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Loginadmin/css/util.css">
    <link rel="stylesheet" type="text/css" href="Loginadmin/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('Loginadmin/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" action="{{ route('login-user') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif
                    <div class="wrap-input100 validate-input" data-validate="Enter Email">
                        <input class="input100" type="email" id="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <p style="color: cornflowerblue">Belum punya akun ?
                            <a href="{{ url('registrasi') }}"
                                style="color: cornflowerblue;"><strong>Registrasi</strong></a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="Loginadmin/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="Loginadmin/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="Loginadmin/vendor/bootstrap/js/popper.js"></script>
    <script src="Loginadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="Loginadmin/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="Loginadmin/vendor/daterangepicker/moment.min.js"></script>
    <script src="Loginadmin/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="Loginadmin/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="Loginadmin/js/main.js"></script>

</body>

</html>
