<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/Public/style/uploads.css">
<script src="/Public/js/jquery.js"></script <!-- jQuery -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <!-- Title and other stuffs -->
    <title>title</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <!-- Stylesheets -->
    <link href="/Public/style/bootstrap.css" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="/Public/style/font-awesome.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="/Public/style/jquery-ui.css">
    <!-- Calendar -->
    <link rel="stylesheet" href="/Public/style/fullcalendar.css">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="/Public/style/prettyPhoto.css">
    <!-- Star rating -->
    <link rel="stylesheet" href="/Public/style/rateit.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="/Public/style/bootstrap-datetimepicker.min.css">
    <!-- CLEditor -->
    <link rel="stylesheet" href="/Public/style/jquery.cleditor.css">
    <!-- Uniform -->
    <!--<link rel="stylesheet" href="/Public/style/uniform.default.css">-->
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="/Public/style/bootstrap-switch.css">
    <!-- Main stylesheet -->
    <link href="/Public/style/style.css" rel="stylesheet">
    <!-- Widgets stylesheet -->
    <link href="/Public/style/widgets.css" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>


<!-- Header starts -->
<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">


    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span>菜单</span>
            </button>
            <!-- Site name for smallar screens -->
            <a href="index.html" class="navbar-brand hidden-lg">首页</a>
        </div>



        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <!-- Links -->
            <ul class="nav navbar-nav pull-left">
                <li class="dropdown pull-right">
                    <a  class="dropdown-toggle" href="index.html">
                        XX科技
                    </a>
                </li>

            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-user"></i> 管理员 <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> 资料</a></li>
                        <li><a href="#"><i class="icon-cogs"></i> 设置</a></li>
                        <li><a href="login.html"><i class="icon-off"></i> 退出</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>


<!-- Header starts -->
<header>
    <div class="container">
        <div class="row">
            <!-- Logo section -->
            <div class="col-md-4">
                <!-- Logo. -->
                <div class="logo">
                    <!--<h1><a href="#">决心<span class="bold"></span></a></h1>-->
                    <!--<p class="meta">后台管理系统</p>-->
                </div>
                <!-- Logo ends -->
            </div>

        </div>


    </div>
</header>

<!-- Header ends -->
<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">导航</a></div>

    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
        <!-- Main menu with font awesome icon -->
        <li><a href="/index.php/Admin/Index/index" class="open"><i class="icon-home"></i> 首页</a>
            <!-- Sub menu markup
            <ul>
              <li><a href="#">Submenu #1</a></li>
              <li><a href="#">Submenu #2</a></li>
              <li><a href="#">Submenu #3</a></li>
            </ul>-->
        </li>
        <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 管理员  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
            <ul>
                <li><a href="/index.php/Admin/Admin/index">管理员列表</a></li>
            </ul>
        </li>
        <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 工单管理  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
            <ul>
                <li><a href="/index.php/Admin/Case/index">案例列表</a></li>
                <li><a href="/index.php/Admin/Case/add">案例添加</a></li>
            </ul>
        </li>
        <!--<li class="has_sub"><a href="#"><i class="icon-magic"></i> 图片管理  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>-->
            <!--<ul>-->
                <!--<li><a href="/index.php/Admin/Photo/index">图片列表</a></li>-->
                <!--<li><a href="/index.php/Admin/Photo/add">图片添加</a></li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li class="has_sub"><a href="#"><i class="icon-file-alt"></i> 页面模块<span class="pull-right"><i class="icon-chevron-right"></i></span></a>-->
            <!--<ul>-->
                <!--<li><a href="post.html">表单Post</a></li>-->
                <!--<li><a href="login.html">登录页</a></li>-->
                <!--<li><a href="register.html">注册页面</a></li>-->
                <!--<li><a href="support.html">帮助页</a></li>-->
                <!--<li><a href="invoice.html">购物清单</a></li>-->
                <!--<li><a href="profile.html">个人资料</a></li>-->
                <!--<li><a href="gallery.html">相册页面</a></li>-->
            <!--</ul>-->
        <!--</li>-->
        <!--<li><a href="charts.html"><i class="icon-bar-chart"></i>图表</a></li>-->
        <!--<li><a href="/index.php/Admin/System/index"><i class="icon-table"></i>网站设置</a></li>-->
        
    </ul>
</div>

<!-- Sidebar ends -->
    <!-- Sidebar ends -->

    <!-- Main bar -->
    <div class="mainbar">

        <!-- Page heading -->
        <div class="page-head">
            <!-- Page heading -->
            <h2 class="pull-left">
                <!-- page meta -->
                <span class="page-meta">Something Change Here</span>
            </h2>


            <!-- Breadcrumb -->
            <div class="bread-crumb pull-right">
                <a href="index.html"><i class="icon-home"></i> Home</a>
                <!-- Divider -->
                <span class="divider">/</span>
                <a href="#" class="bread-current">forms</a>
            </div>

            <div class="clearfix"></div>

        </div>
        <!-- Page heading ends -->

        <!-- Matter -->

        <div class="matter">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">


                        <div class="widget wgreen">

                            <div class="widget-head">
                                <div class="pull-left">修改</div>
                                <div class="widget-icons pull-right">
                                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget-content">
                                <div class="padd">
                                    <!-- Form starts.  -->
                                    <form class="form-horizontal" id="formid" role="form" method="post"
                                          onsubmit="checkUser();" action="/index.php/Admin/Admin/handle" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">对外称呼</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="title" name="nickname"
                                                       placeholder="对外称呼" value="<?php echo ($info["nickname"]); ?>">
                                                <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">对内称呼</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="orderby_id" name="nickout" placeholder="对内称呼" value="<?php echo ($info["nickout"]); ?>">
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <div class="col-lg-offset-1 col-lg-9">
                                                <z></z>
                                                <input type="button" class="btn btn-success" value="保存"
                                                       name="display" onclick="checksubmit()">
                                                <button type="submit" class="btn btn-default" onclick="history.back()">
                                                    取消
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget-foot">
                                <!-- Footer goes here -->
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- Matter ends -->

    </div>

    <!-- Mainbar ends -->
    <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<!-- Footer starts -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Copyright info -->
                <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<!-- JS -->
<script src="/Public/js/jquery.js"></script> <!-- jQuery -->
<script src="/Public/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/Public/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="/Public/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/Public/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="/Public/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src="/Public/js/excanvas.min.js"></script>
<script src="/Public/js/jquery.flot.js"></script>
<script src="/Public/js/jquery.flot.resize.js"></script>
<script src="/Public/js/jquery.flot.pie.js"></script>
<script src="/Public/js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="/Public/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="/Public/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="/Public/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="/Public/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="/Public/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="/Public/js/sparklines.js"></script> <!-- Sparklines -->
<script src="/Public/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="/Public/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<!--<script src="/Public/js/jquery.uniform.min.js"></script> &lt;!&ndash; jQuery Uniform &ndash;&gt;-->
<script src="/Public/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="/Public/js/filter.js"></script> <!-- Filter for support page -->
<script src="/Public/js/custom.js"></script> <!-- Custom codes -->
<script src="/Public/js/charts.js"></script> <!-- Charts & Graphs -->

<!-- Footer ends -->


<script>
    function checksubmit()
    {
        var title = document.getElementById("title").value;
        var order = document.getElementById("orderby_id").value;

        if (title == "") {
            alert("对外昵称不能为空");
            return false;
        }
        if (order == "") {
            alert("对内昵称不能为空");
            return false;
        }
        document.getElementById("formid").submit();
    }
</script>


</body>
</html>