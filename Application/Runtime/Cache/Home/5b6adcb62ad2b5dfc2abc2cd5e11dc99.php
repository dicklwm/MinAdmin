<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content = "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name = "viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel = "stylesheet" href = "/MinAdmin/Public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel = "stylesheet" href = "/MinAdmin/Public/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel = "stylesheet" href = "/MinAdmin/Public/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel = "stylesheet" href = "/MinAdmin/Public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel = "stylesheet" href = "/MinAdmin/Public/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src = "/MinAdmin/Public/js/html5shiv.min.js"></script>
    <script src = "/MinAdmin/Public/js/respond.min.js"></script>
    <![endif]-->
<title>ERP Admin Login</title>
<!-- iCheck -->
<link rel = "stylesheet" href = "/MinAdmin/Public/plugins/iCheck/square/blue.css">
</head>

<body class = "hold-transition login-page">
<div class = "login-box">
    <div class = "login-logo">
        <b>ERP</b>Admin
    </div>
    <!-- /.login-logo -->
    <div class = "login-box-body">
        <p class = "login-box-msg">登录系统</p>

        <form action = "<?php echo U('Login/Login');?>" method = "post">
            <div class = "form-group has-feedback">
                <input type = "text" class = "form-control" name = "account" placeholder = "账户">
                <span class = "glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class = "form-group has-feedback">
                <input type = "password" class = "form-control" name = "password" placeholder = "密码">
                <span class = "glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class = "row">
                <div class = "col-xs-8">
                    <div class = "checkbox icheck">
                        <label>
                            <input type = "checkbox"> 记住密码
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class = "col-xs-4">
                    <button type = "submit" class = "btn btn-primary btn-block btn-flat">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class = "social-auth-links text-center">
            <p>- OR -</p>
            <a href = "#" class = "btn btn-block btn-social btn-facebook btn-flat"
               style = "background-color:#14D112;"><i class = "fa fa-wechat"></i> 微信登录</a>
            <a href = "#" class = "btn btn-block btn-social btn-twitter btn-flat"><i class = "fa fa-qq"></i> QQ登录</a>
        </div>
        <!-- /.social-auth-links -->

        <a href = "#">忘记密码</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src = "/MinAdmin/Public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src = "/MinAdmin/Public/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src = "/MinAdmin/Public/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>