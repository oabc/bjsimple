<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>农产品质量安全监管追溯平台</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- The jQuery library is a prerequisite for all jqSuite products -->
		<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="../../plugins/font-awesome-4.7.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="../../plugins/ionicons-2.0.1/css/ionicons.min.css">

		<!-- We support more than 40 localizations -->
		<script src="../../plugins/jqgrid/js/i18n/grid.locale-zh.js" type="text/javascript" charset="utf-8"></script>
		<!-- This is the Javascript file of jqGrid -->
		<script type="text/ecmascript" src="../../plugins/jqgrid/js/jquery.jqGrid.min.js"></script>
		<!-- The link to the CSS that the grid needs -->
		<link rel="stylesheet" type="text/css" media="screen" href="../../plugins/jqgrid/css/ui.jqgrid-bootstrap.css" />

		<!-- Theme style -->
		<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
		<link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">

		<!-- Added -->
		<!-- daterange picker -->
		<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
		<!-- Bootstrap time Picker -->
		<link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">

		<link rel="stylesheet" href="../../dist/css/my.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

		<!-- REQUIRED JS SCRIPTS -->

		<!-- Bootstrap 3.3.5 -->
		<script src="../../bootstrap/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="../../dist/js/app.min.js"></script>

		<script src="../../plugins/bootstrap-treeview/bootstrap-treeview.js" type="text/javascript" charset="utf-8"></script>

		<!-- Added -->
		<!-- date-range-picker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
		<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap time picker -->
		<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>

		<!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->

		<script>
			$.jgrid.defaults.responsive = true;
			$.jgrid.defaults.styleUI = 'Bootstrap';
		</script>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">

			<!-- Main Header -->
			<header class="main-header">

				<!-- Logo -->
				<a href="" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>智旅</b></span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><img src="../../dist/img/logo.png"></span>
				</a>

				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>

					<div class="nav notify-row" id="top_menu">
						<!--  notification start -->
						<ul class="nav top-menu">
							<li class="dropdown">
								<a  class="dropdown-toggle" href="../mainpage/page1.html" >
									<i class="fa fa-cog"></i> 系统管理
								</a>
							</li>
							<!-- settings start -->
							<li class="dropdown" style="float:left;">
								<a class="dropdown-toggle" href="../mainpage/page2.html">
									<i class="fa fa-tasks"></i> 信息管理
								</a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="../mainpage/page3.html" >
									<i class="fa fa-tasks"></i> 投入品
								</a>
							</li>
							
<li class="dropdown">
								<a class="dropdown-toggle" href="../mainpage/page4.html" >
									<i class="fa fa-tasks"></i> 农产品
								</a>
							</li>
							<li class="dropdown" style="float:left;">
								<a class="dropdown-toggle" href="../mainpage/page5.html">
									<i class="fa fa-tasks"></i> 质量检测
								</a>
							</li>
						</ul>
						<!--  notification end -->
					</div>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account Menu -->
							<li class="dropdown user user-menu">
								<!-- Menu Toggle Button -->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<!-- The user image in the navbar-->
									<img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
									<!-- hidden-xs hides the username on small devices so only the image appears. -->
									<span class="hidden-xs">王先生</span>
								</a>
								<ul class="dropdown-menu">
									<!-- The user image in the menu -->
									<li class="user-header">
										<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
										<p>
											王先生 - 景区用户
											<small>会员自 2016年4月</small>
										</p>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">个人信息</a>
										</div>
										<div class="pull-right">
											<a href="#" class="btn btn-default btn-flat">退出</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">

				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar Menu -->
					<!-- Sidebar Menu -->
						<ul class="sidebar-menu">
							<li class="header">我的数据</li>
							<!-- Optionally, you can add icons to the links -->
							<li class="treeview">
								<a href="#"><i class="fa fa-database"></i> <span>农产品生产信息管理监控系统基础管理</span> <i class="fa fa-angle-left pull-right"></i></a>
								<ul class="treeview-menu">
									<li>
										<a href="../ncp/4.11.php"><i class="fa fa-circle-o"></i> 生产企业信息管理</a>
									</li>
									<li>
										<a href="../ncp/4.12.php"><i class="fa fa-circle-o"></i> 基地信息管理</a>
									</li>
									<li>
										<a href="../ncp/4.13.php"><i class="fa fa-circle-o"></i> 农户信息管理</a>
									</li>
									<li>
										<a href="../ncp/4.14.php"><i class="fa fa-circle-o"></i> 地块属性维护</a>
									</li>
									<li>
										<a href="../ncp/4.15.php"><i class="fa fa-circle-o"></i> 地块信息管理</a>
									</li>
									<li>
										<a href="../ncp/4.16.php"><i class="fa fa-circle-o"></i> 农产品分类管理</a>
									</li>
									<li>
										<a href="../ncp/4.17.php"><i class="fa fa-circle-o"></i> 农产品属性维护</a>
									</li>
									<li>
										<a href="../ncp/4.18.php"><i class="fa fa-circle-o"></i> 农产品信息管理</a>
									</li>
									<li>
										<a href="../ncp/4.19.php"><i class="fa fa-circle-o"></i> 农事操作行为及关联属性管理</a>
									</li>
									<li>
										<a href="../ncp/4.20.php"><i class="fa fa-circle-o"></i> 农产品追溯码规则管理和编辑</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-database"></i> <span>生产环境监测子系统</span> <i class="fa fa-angle-left pull-right"></i></a>
								<ul class="treeview-menu">
									<li>
										<a href="../ncp/4.21.php"><i class="fa fa-circle-o"></i> 检测环境（地块）管理</a>
									</li>
									<li>
										<a href="../ncp/4.22.php"><i class="fa fa-circle-o"></i> 监测设备（传感器）及传输数据管理</a>
									</li>
									<li>
										<a href="../ncp/4.23.php"><i class="fa fa-circle-o"></i> 监测点管理</a>
									</li>
									<li>
										<a href="../ncp/default.php"><i class="fa fa-circle-o"></i> 监测结果查看、查询及图表</a>
									</li>
									<li>
										<a href="../ncp/default.php"><i class="fa fa-circle-o"></i> 生产环境监测APP</a>
									</li>
									<li>
										<a href="../ncp/default.php"><i class="fa fa-circle-o"></i> 实时视频监控</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-database"></i> <span>生产履历管理子系统</span> <i class="fa fa-angle-left pull-right"></i></a>
								<ul class="treeview-menu">
									<li>
										<a href="../ncp/4.31.php"><i class="fa fa-circle-o"></i> 种植（养殖）计划管理</a>
									</li>
									<li>
										<a href="../ncp/default.php"><i class="fa fa-circle-o"></i> 农事行为信息操作</a>
									</li>
									<li>
										<a href="../ncp/default.php"><i class="fa fa-circle-o"></i> 生产履历信息生成和查询</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="../testpage/index.html"><i class="fa fa-database"></i> <span>生产情况统计子系统</span></a>
							</li>
							<li class="treeview">
								<a href="#"><i class="fa fa-database"></i> <span>追溯信息识别与传递子系统</span> <i class="fa fa-angle-left pull-right"></i></a>
								<ul class="treeview-menu">
									<li>
										<a href="../ncp/default.php"><i class="fa fa-circle-o"></i> 产地证明（追溯码）生成</a>
									</li>
									<li>
										<a href="../ncp/default.php"><i class="fa fa-circle-o"></i> 产地证明（追溯信息）查询</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="../ncp/default.php"><i class="fa fa-database"></i> <span>追溯码生成管理子系统</span></a>
							</li>
							<li class="treeview">
								<a href="../ncp/default.php"><i class="fa fa-database"></i> <span>追溯信息公共查询子系统</span></a>
							</li>
						</ul>
				</section>
				<!-- /.sidebar -->
			</aside>