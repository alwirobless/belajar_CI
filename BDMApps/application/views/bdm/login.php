<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>asset/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <!-- <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small> -->
            <img src="<?php echo base_url();?>asset/images/pertaminalogo.png" style="width: 350px; height: 100px" >
        </div>
        <div class="cardlogin">
            <div class="body">
                <form id="sign_in" action="<?php echo base_url(); ?>Welcome/login" method="POST">
                    <div class="msg">Login With Your Account</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons" style="color: white">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="ID_ADMIN" placeholder=" Input Your ID" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons" style="color: white">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="Password" placeholder=" Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-9" style="padding-left: 100px">
                            <button class="btn btn-block bg-white waves-effect" type="submit"><b style="color:red">SIGN IN</b></button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <!-- <a href="sign-up.html">Register Now!</a> -->
                        </div>
                        <div class="col-xs-6 align-right">
                           <!--  <a href="forgot-password.html">Forgot Password?</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-in.js"></script>
</body>

</html>