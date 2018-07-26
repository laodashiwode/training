<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
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
        <!--<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 工单管理  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>-->
            <!--<ul>-->
                <!--<li><a href="/index.php/Admin/Case/index">案例列表</a></li>-->
                <!--<li><a href="/index.php/Admin/Case/add">案例添加</a></li>-->
            <!--</ul>-->
        <!--</li>-->
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
            <h2 class="pull-left"><i class="icon-table"></i> 商品列表</h2>

            <!-- Breadcrumb -->
            <div class="bread-crumb pull-right">
                <a href="index.html"><i class="icon-home"></i> Home</a>
                <!-- Divider -->
                <span class="divider">/</span>
                <a href="#" class="bread-current">Dashboard</a>
            </div>

            <div class="clearfix"></div>

        </div>
        <!-- Page heading ends -->

        <!-- Matter -->

        <div class="matter">
            <div class="container">

                <!-- Table -->

                <div class="row">

                    <div class="col-md-12">

                        <div class="widget">

                            <!--<div class="widget-head">-->
                                <!--<div class="pull-left"><a href="/index.php/Admin/Admin/add"><button type="button" class="btn btn-danger">添加管理员</button></a></div>-->
                                <!--<div class="widget-icons pull-right">-->
                                    <!--<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>-->
                                    <!--<a href="#" class="wclose"><i class="icon-remove"></i></a>-->
                                <!--</div>-->
                                <!--<div class="clearfix"></div>-->
                            <!--</div>-->

                            <div class="widget-content">

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>用戶名</th>
                                        <th>对外称呼</th>
                                        <th>对内称呼</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                            <td><?php echo ($vo["id"]); ?>
                                            <td><?php echo ($vo["user_name"]); ?></td>
                                            <td><?php echo ($vo["nickname"]); ?></td>
                                            <td><?php echo ($vo["nickout"]); ?></td>
                                            <td>
                                                <!--<button class="btn btn-xs btn-success"><i class="icon-ok"></i></button>-->
                                                <a href="/index.php/Admin/Admin/edit/id/<?php echo ($vo["id"]); ?>"><button class="btn btn-xs btn-warning"><i class="icon-pencil"></i></button></a>
                                                <a href="" class="del" data-id="<?php echo ($vo["id"]); ?>" onClick=""><button class="btn btn-xs btn-danger"><i class="icon-remove"></i></button></a>
                                                </button>

                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                    </tr>

                                    </tbody>
                                </table>

                                <div class="widget-foot">
                                    <ul class="pagination pull-right">
                                        <?php echo ($page); ?>
                                    </ul>


                                </div>

                            </div>

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

<!--</div>-->
<!-- Content ends -->

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



</body>
<script>
    $('.del').click(function () {
        if (confirm("确定要删除吗？")) {
            var admin_id = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                url: "/index.php/Admin/Admin/del/id/"+admin_id,
                processData: false,
                contentType: false,
                cache: false,
//                data: formData
            }).done(function (response) {
                //...
                alert('刪除成功！！');
                location.reload();
            }).fail(function (data) {
                //...
                alert('刪除失败！');
            });
        }
    });
</script>
</html>