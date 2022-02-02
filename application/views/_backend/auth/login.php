<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $setting[0]->setting_appname; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="<?php echo base_url(); ?>assets/core-images/<?php echo $setting[0]->setting_logo; ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/core-admin/core-component/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/core-admin/core-component/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/core-admin/core-component/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/core-admin/core-dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker|Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <style type="text/css">
        .fontQuicksand {
            font-family: 'Quicksand', sans-serif;
        }

        .fontPoppins {
            font-family: 'Poppins', sans-serif;
        }

        .login-box-body {
            padding: 28px;
            background: radial-gradient(100% 1036.14% at 0% 0%, rgba(255, 255, 255, 0.42) 0%, rgba(255, 255, 255, 0.06) 100%);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-sizing: border-box;
            backdrop-filter: blur(12px);
            /* Note: backdrop-filter has minimal browser support */
            border-radius: 34px
        }

        input {
            padding: 20px !important;
            border-radius: 12px !important;
        }

        span {
            margin-top: 5px;
        }

        button {
            padding: 10px !important;
            border-radius: 12px !important;
            background: #085690 !important;
        }
    </style>
</head>

<body class="hold-transition login-page fontPoppins" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image:linear-gradient(90deg, rgba(0,71,116,0.4774860627844888) 0%, rgba(31,60,54,0.592332001159839) 100%), url(<?php echo base_url(); ?>assets/core-images/<?php echo $setting[0]->setting_background; ?>)">
    <div class="login-box">
        <div class="login-logo">
            <a href="#" style="color: white; font-weight: 600; font-size: 28px;"><?php echo $setting[0]->setting_appname; ?></a>
        </div>

        <div class="login-box-body">

            <p class="login-box-msg" style="color: white;">Sign in to start your session</p>
            <?php
            if ($this->session->flashdata('alert')) {
                echo $this->session->flashdata('alert');
                unset($_SESSION['alert']);
            }
            ?>
            <!-- Start Form Login -->
            <?php echo form_open("auth/validate", "class='login-form'"); ?>
            <div class="form-group has-feedback">
                <?php echo csrf(); ?>
                <input type="text" class="form-control" placeholder="Username" name="username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-facebook btn-block btn-flat">Sign In</button>
                </div>
            </div>
            <?php echo form_close(); ?>
            <!-- End Form Login -->
            <p class="text-center" style="color: white; font-weight: 400; font-size: 16px; margin-top:10px">
                <?php echo $setting[0]->setting_owner_name; ?><br>
                <b>Since @<?php echo date('Y'); ?></b>
            </p>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/core-admin/core-component/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/core-admin/core-component/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>