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
<title>ERP Admin </title>
</head>
<!--
Body的参数选择:
=================
Apply one or more of the following classes to get the
desired effect
选择一个或多个class去得到你想要的效果
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class = "hold-transition skin-purple sidebar-mini">
<div class = "wrapper">

    <!-- 顶部主菜单 -->
<header class = "main-header">

    <!-- 商标 -->
    <a href = "index.html" class = "logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class = "logo-mini"><b>ERP</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class = "logo-lg"><b>ERP</b>Admin</span>
    </a>

    <!-- 顶部菜单 -->
    <nav class = "navbar navbar-static-top" role = "navigation">
        <!-- 适配小屏幕时的导航按钮 -->
        <a href = "#" class = "sidebar-toggle" data-toggle = "offcanvas" role = "button">
            <span class = "sr-only">Toggle navigation</span>
        </a>
        <!-- 右边导航 -->
        <div class = "navbar-custom-menu">
            <ul class = "nav navbar-nav">
                <!-- 消息菜单 -->
                <li class = "dropdown messages-menu">
                    <!-- 消息菜单小按钮 -->
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <i class = "fa fa-envelope-o"></i>
                        <span class = "label label-success">1</span>
                    </a>
                    <ul class = "dropdown-menu">
                        <li class = "header">您有1条信息</li>
                        <li>
                            <!-- 点击打开后的列表 -->
                            <ul class = "menu">
                                <li><!-- 第一条消息 -->
                                    <a href = "#">
                                        <div class = "pull-left">
                                            <!-- 用户头像 -->
                                            <img src = "/MinAdmin/Public/img/user2-160x160.jpg" class = "img-circle"
                                                 alt = "用户头像">
                                        </div>
                                        <!-- 右边的时间 -->
                                        <h4>
                                            技术支持
                                            <small><i class = "fa fa-clock-o"></i> 5分钟前</small>
                                        </h4>
                                        <!-- 消息文字，小字体 -->
                                        <p>Min的Admin</p>
                                    </a>
                                </li>
                                <!-- 结束第一条消息 -->
                            </ul>
                            <!-- 结束消息列表 -->
                        </li>
                        <li class = "footer"><a href = "#">查看所有信息</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- 通知小菜单 -->
                <li class = "dropdown notifications-menu">
                    <!-- 通知小菜单的按钮 -->
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <i class = "fa fa-bell-o"></i>
                        <span class = "label label-warning">1</span>
                    </a>
                    <ul class = "dropdown-menu">
                        <li class = "header">您有1条通知</li>
                        <li>
                            <!-- 点击打开后的列表 -->
                            <ul class = "menu">
                                <li><!-- 第一条通知 -->
                                    <a href = "#">
                                        <i class = "fa fa-users text-aqua"></i>Min的Admin
                                    </a>
                                </li>
                                <!-- 结束通知列表 -->
                            </ul>
                        </li>
                        <li class = "footer"><a href = "#">查看所有通知</a></li>
                    </ul>
                </li>
                <!-- 任务小菜单 -->
                <li class = "dropdown tasks-menu">
                    <!-- 任务小菜单的按钮 -->
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <i class = "fa fa-flag-o"></i>
                        <span class = "label label-danger">1</span>
                    </a>
                    <ul class = "dropdown-menu">
                        <li class = "header">您有1个任务</li>
                        <li>
                            <!-- 点击打开后的列表 -->
                            <ul class = "menu">
                                <li><!-- 第一条任务 -->
                                    <a href = "#">
                                        <!-- 任务的文字描述和进度条 -->
                                        <h3>
                                            完成情况：
                                            <small class = "pull-right">20%</small>
                                        </h3>
                                        <!-- 进度条 -->
                                        <div class = "progress xs">
                                            <!-- 改变width属性去修改进度 -->
                                            <div class = "progress-bar progress-bar-aqua" style = "width: 20%"
                                                 role = "progressbar" aria-valuenow = "20" aria-valuemin = "0"
                                                 aria-valuemax = "100">
                                                <span class = "sr-only">20% 完成</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- 结束任务列表 -->
                            </ul>
                        </li>
                        <li class = "footer">
                            <a href = "#">查看所有任务</a>
                        </li>
                    </ul>
                </li>
                <!-- 用户账号菜单 -->
                <li class = "dropdown user user-menu">
                    <!-- 用户菜单按钮 -->
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <!-- 用户头像 -->
                        <img src = "/MinAdmin/Public/img/user2-160x160.jpg" class = "user-image" alt = "User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <!--当达到xs大小的设备大小就只显示头像，把名字隐藏-->
                        <span class = "hidden-xs"><?php echo session('userInfo')[0]["u_userName"];?></span>
                    </a>
                    <ul class = "dropdown-menu">
                        <!-- 在列表里的头像，居中的 -->
                        <li class = "user-header">
                            <img src = "/MinAdmin/Public/img/user2-160x160.jpg" class = "img-circle" alt = "User Image">

                            <p>
                                <?php echo session('userInfo')[0]["u_userName"];?> - AdminLTE定制
                                <small><?php echo date("Y-m-d");?></small>
                            </p>
                        </li>
                        <!-- 头像菜单 -->
                        <li class = "user-body">
                            <div class = "row">
                                <div class = "col-xs-4 text-center">
                                    <a href = "#">Followers</a>
                                </div>
                                <div class = "col-xs-4 text-center">
                                    <a href = "#">Sales</a>
                                </div>
                                <div class = "col-xs-4 text-center">
                                    <a href = "#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- 列表的底部 -->
                        <li class = "user-footer">
                            <div class = "pull-left">
                                <a href = "#" class = "btn btn-default btn-flat">基本信息</a>
                            </div>
                            <div class = "pull-right">
                                <a href = "#" class = "btn btn-default btn-flat">登出</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- 右边导航条的触发按钮 -->
                <li>
                    <a href = "#" data-toggle = "control-sidebar"><i class = "fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <!--左边的导航菜单，包括商标和导航菜单-->
<aside class = "main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class = "sidebar">

        <!--导航菜单的用户面板，可选-->
        <div class = "user-panel">
            <div class = "pull-left image">
                <img src = "/MinAdmin/Public/img/user2-160x160.jpg" class = "img-circle" alt = "用户头像">
            </div>
            <div class = "pull-left info">
                <p><?php echo session('userInfo')[0]["u_userName"];?></p>
                <!-- 状态 -->
                <a href = "#"><i class = "fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>

        <!--搜索栏表单，可选-->
        <form action = "#" method = "get" class = "sidebar-form">
            <div class = "input-group">
                <input type = "text" name = "q" class = "form-control" placeholder = "输入关键字...">
              <span class = "input-group-btn">
                <button type = "submit" name = "search" id = "search-btn" class = "btn btn-flat"><i
                        class = "fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- 左边导航菜单 -->
        <ul class = "sidebar-menu">
            <!--<li class="header">菜单</li>-->
            <!--任选的，可以增加自己的图标到链接上-->
            <li><a href = "#"><i class = "fa fa-link"></i> <span>流程管理</span></a></li>
            <li><a href = "#"><i class = "fa fa-link"></i> <span>定时任务</span></a></li>
            <!--多级菜单-->
            <li class = "treeview active">
                <a href = "#"><i class = "fa fa-link"></i> <span>组织机构</span>
            <span class = "pull-right-container">
              <i class = "fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class = "treeview-menu menu-open">
                    <li class = "active"><a href = "#"><i class = "fa fa-sitemap"></i> 机构管理</a></li>
                    <li><a href = "#"><i class = "fa fa-user"></i> 机构人员管理</a></li>
                    <li><a href = "#"><i class = "fa fa-users"></i> 岗位管理</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

    <!--内容主面板，包括页里面的内容-->
    <div class = "content-wrapper">
        <!--内容头部-->
        <section class = "content-header">
            <h1>
                组织机构
                <small>机构管理</small>
            </h1>
            <ol class = "breadcrumb">
                <li><a href = "#"><i class = "fa fa-home"></i> 首页</a></li>
                <li class = "active">机构管理</li>
            </ol>
        </section>

        <!--主内容容器-->
        <section class = "content">

            <!--你的页面内容-->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- 右边的隐藏导航 -->
<aside class = "control-sidebar control-sidebar-dark">
    <!-- 标签页 -->
    <ul class = "nav nav-tabs nav-justified control-sidebar-tabs">
        <li class = "active"><a href = "#control-sidebar-home-tab" data-toggle = "tab"><i class = "fa fa-home"></i></a>
        </li>
    </ul>
    <!-- 标签页的内容 -->
    <div class = "tab-content">
        <!-- Home的标签页 -->
        <div class = "tab-pane active" id = "control-sidebar-home-tab">
            <h3 class = "control-sidebar-heading">最近的动态</h3>
            <ul class = "control-sidebar-menu">
                <li>
                    <a href = "javascript:void(0);">
                        <i class = "menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class = "menu-info">
                            <h4 class = "control-sidebar-subheading">Min Lee的生日</h4>

                            <p>10月27日</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class = "control-sidebar-heading">任务进度：</h3>
            <ul class = "control-sidebar-menu">
                <li>
                    <a href = "javascript:void(0);">
                        <h4 class = "control-sidebar-subheading">
                            后台模板设计
                <span class = "pull-right-container">
                  <span class = "label label-danger pull-right">10%</span>
                </span>
                        </h4>

                        <div class = "progress progress-xxs">
                            <div class = "progress-bar progress-bar-danger" style = "width: 10%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class = "control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src = "/MinAdmin/Public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src = "/MinAdmin/Public/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="/MinAdmin/Public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/MinAdmin/Public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src = "/MinAdmin/Public/js/app.min.js"></script>

<script src="/MinAdmin/Public/js/setting.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<!--另外，你可以添加 Slimscroll 和 FastClick 插件；这两个插件都是推荐开发者去增强用户体验的，Slimscroll需要固定菜单栏的布局-->
</body>
</html>