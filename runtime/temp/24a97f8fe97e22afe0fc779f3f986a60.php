<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"G:\phpStudy2017\PHPTutorial\WWW\jd\public/../application/admin\view\goods\upd.html";i:1492387720;s:86:"G:\phpStudy2017\PHPTutorial\WWW\jd\public/../application/admin\view\public\navbar.html";i:1493888042;s:87:"G:\phpStudy2017\PHPTutorial\WWW\jd\public/../application/admin\view\public\sidebar.html";i:1498195384;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>控制台 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="JS代码网提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="__ADMIN__/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="__ADMIN__/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="__ADMIN__/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!-- ace styles -->

		<link rel="stylesheet" href="__ADMIN__/assets/css/ace.min.css" />
		<link rel="stylesheet" href="__ADMIN__/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="__ADMIN__/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="__ADMIN__/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="__ADMIN__/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="__ADMIN__/assets/js/html5shiv.js"></script>
		<script src="__ADMIN__/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!-- navbar -->
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							ACE后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="__ADMIN__/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="__ADMIN__/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="__ADMIN__/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="__ADMIN__/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo \think\Session::get('admin_name'); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo url('login/logout'); ?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>
		<!-- /navbar -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				<!-- sidebar -->
				
				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li>
							<a href="typography.html">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 文字排版 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>

							</ul>
						</li>


						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-gift"></i>
								<span class="menu-text"> 商品管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">

								<li>
									<a href="<?php echo url('admin/catelist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										分类管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('cate/catelist'); ?>">
												<i class="icon-leaf"></i>
												分类列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('cate/add'); ?>">
												<i class="icon-external-link"></i>
												添加分类
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>

								<li>
									<a href="<?php echo url('admin/catelist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										商品管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('goods/goodslist'); ?>">
												<i class="icon-leaf"></i>
												商品列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('goods/add'); ?>">
												<i class="icon-external-link"></i>
												添加商品
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="<?php echo url('admin/catelist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										关键字管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('keywords/keywordslist'); ?>">
												<i class="icon-leaf"></i>
												关键字列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('keywords/add'); ?>">
												<i class="icon-external-link"></i>
												添加关键字
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										属性管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('property/propertylist'); ?>">
												<i class="icon-leaf"></i>
												属性列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('property/add'); ?>">
												<i class="icon-external-link"></i>
												添加属性
											</a>
										</li>

										<!-- <li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li> -->
									</ul>
								</li>
							</ul>
						</li>


						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-circle"></i>
								<span class="menu-text"> 管理员管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>


							<ul class="submenu">

								<li>
									<a href="<?php echo url('admin/adminlist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										管理员列表
									</a>

								</li>
								<li>
									<a href="<?php echo url('admin/add'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										添加管理员
									</a>

								</li>

								<li>
									<a href="<?php echo url('admin/catelist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										商品管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('goods/goodslist'); ?>">
												<i class="icon-leaf"></i>
												商品列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('goods/add'); ?>">
												<i class="icon-external-link"></i>
												添加商品
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="<?php echo url('admin/catelist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										关键字管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('keywords/keywordslist'); ?>">
												<i class="icon-leaf"></i>
												关键字列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('keywords/add'); ?>">
												<i class="icon-external-link"></i>
												添加关键字
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										属性管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('property/propertylist'); ?>">
												<i class="icon-leaf"></i>
												属性列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('property/add'); ?>">
												<i class="icon-external-link"></i>
												添加属性
											</a>
										</li>

										<!-- <li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li> -->
									</ul>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-exclamation-sign "></i>
								<span class="menu-text"> 订单管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>


							<ul class="submenu">

								<li>
									<a href="<?php echo url('order/orderlist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										订单列表
									</a>

								</li>
								<li>
									<a href="<?php echo url('admin/add'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										添加管理员
									</a>

								</li>

								<li>
									<a href="<?php echo url('admin/catelist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										商品管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('goods/goodslist'); ?>">
												<i class="icon-leaf"></i>
												商品列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('goods/add'); ?>">
												<i class="icon-external-link"></i>
												添加商品
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="<?php echo url('admin/catelist'); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										关键字管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('keywords/keywordslist'); ?>">
												<i class="icon-leaf"></i>
												关键字列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('keywords/add'); ?>">
												<i class="icon-external-link"></i>
												添加关键字
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										属性管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo url('property/propertylist'); ?>">
												<i class="icon-leaf"></i>
												属性列表
											</a>
										</li>

										<li>
											<a href="<?php echo url('property/add'); ?>">
												<i class="icon-external-link"></i>
												添加属性
											</a>
										</li>

										<!-- <li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li> -->
									</ul>
								</li>
							</ul>
						</li>


					
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
				<!-- /sidebar -->

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">控制台</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								商品管理
								<small>
									<i class="icon-double-angle-right"></i>
									 修改商品
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								<form class="form-horizontal" role="form" action="<?php echo url('goods/updhanddle'); ?>" method="post" enctype="multipart/form-data">
									<input type="hidden" name="goods_id" value="<?php echo $goods_find['goods_id']; ?>">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_name"> 商品名称 </label>

										<div class="col-sm-9">
											<input id="goods_name" name="goods_name" placeholder="请输入商品名称" class="col-xs-10 col-sm-5" type="text" value="<?php echo $goods_find['goods_name']; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="thumb"> 商品缩略图 </label>

										<div class="col-xs-4">
										<img src="<?php echo $goods_find['goods_thumb']; ?>" id="img" name="img" width="130">
										<div class="progress">
											<div id="thumb_progress" class="progress-bar" style="width:0%;"></div>
										</div>
										<span id="thumb_upload" class="btn btn-primary fileinput-button" style="display:">  
	    									<span>替换</span>
											<input id="goods_thumb" placeholder="" class="" type="file" name="goods_thumb">
										</span>
										<!-- <a id="thumb_cancle" href="javascript:void(0)" class="btn btn-warning" role="button" onclick="cancleUpload()" style="display:">删除</a>   -->
										</div>
									</div>




									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_price"> 商品价格 </label>

										<div class="col-sm-9">
											<input id="goods_price" name="goods_price" placeholder="请输入商品价格" class="col-xs-10 col-sm-5" type="text" value="<?php echo $goods_find['goods_price']; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_after_price"> 促销价格 </label>

										<div class="col-sm-9">
											<input id="goods_after_price" name="goods_after_price"  class="col-xs-10 col-sm-5" type="text" 
													<?php if($goods_find['goods_after_price']): ?>
													value="<?php echo $goods_find['goods_after_price']; ?>"
													<?php else: ?>
													placeholder="不促销就不填写"
													<?php endif; ?>
											 >
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_status"> 商品状态 </label>

										<div class="col-sm-9">
										<input name="goods_status" class="ace ace-switch ace-switch-7" type="checkbox" value="1" 
											<?php if($goods_find['goods_status'] == 1): ?>
										checked="true"
										<?php else: endif; ?>>
										<span class="lbl"></span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_sales"> 商品销量 </label>

										<div class="col-sm-9">
											<input id="goods_sales" name="goods_sales" placeholder="请输入商品销量" class="col-xs-10 col-sm-5" type="text" value="<?php echo $goods_find['goods_sales']; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_inventory"> 商品库存 </label>

										<div class="col-sm-9">
											<input id="goods_inventory" name="goods_inventory" placeholder="请输入商品库存" class="col-xs-10 col-sm-5" type="text" value="<?php echo $goods_find['goods_inventory']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_img"> 商品细节图 </label>
										<div class="col-xs-4">
											<div class="progress">
												<div id="img_progress" class="progress-bar" style="width:0%;"></div>
											</div>
											<span id="img_upload" class="btn btn-primary fileinput-button">  
												<span>上传</span>
												<input id="goods_img" placeholder="" class="" type="file" name="goods_img" multiple="">
											</span> 
											<div class="preview" style="margin-top:20px;">
												<?php if(is_array($img_select) || $img_select instanceof \think\Collection || $img_select instanceof \think\Paginator): $i = 0; $__LIST__ = $img_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
												<div style='margin-top:10px;'>
													<img src="<?php echo $vo['url']; ?>" width='100'>
													<a class='img_cancle btn btn-warning' role='button' style=''>删除</a>
												</div>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</div>
										</div>
									</div>




									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="goods_pid"> 所属分类 </label>
										<div class="col-xs-4">
										
											<ul class="nav nav-list">
											<?php if(is_array($cate_list1) || $cate_list1 instanceof \think\Collection || $cate_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
												<li class="active">
													<a href="#" class="dropdown-toggle">
														<!-- <i class="icon-desktop"></i> -->
														<span class="menu-text"> <?php echo $vo1['cate_name']; ?> </span>
														<b class="arrow icon-angle-down"></b>
													</a>
													
													<ul class="submenu" 
														<?php if($cate_in['one']['cate_id'] == $vo1['cate_id']): ?>
															style="display: block;"
														<?php else: ?>
															style="display: none;" 
														<?php endif; ?>
													>
														<?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
														<li class="open">
															<a href="#" class="dropdown-toggle">
																<i class="icon-double-angle-right"></i>

																<?php echo $vo2['cate_name']; ?>
																<b class="arrow icon-angle-down"></b>
															</a>
															<ul class="submenu" 
															<?php if($cate_in['two']['cate_id'] == $vo2['cate_id']): ?>
																style="display: block;"
																<?php else: ?>
																style="display: none;" 
															<?php endif; ?>>
																
																<div class="col-xs-4">
																	<!-- <select id="goods_pid" name="goods_pid"> -->
																	<?php if(is_array($vo2['children']) || $vo2['children'] instanceof \think\Collection || $vo2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>	
																		<li>&nbsp;&nbsp;&nbsp;
																		<input name="goods_pid" value="<?php echo $vo3['cate_id']; ?>" type="radio"
																			<?php if($goods_find['goods_pid'] == $vo3['cate_id']): ?>
																			checked="true"
																			<?php endif; ?> 
																		><?php echo $vo3['cate_name']; ?>
																		</li>
																	<?php endforeach; endif; else: echo "" ;endif; ?>
																	<!-- </select> -->
																</div>
																
																
															</ul>
														<?php endforeach; endif; else: echo "" ;endif; ?>
														</li>
													</ul>
													
												</li>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>
											
										</div>
									</div>
									<div class="space-4"></div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										<input type="submit" name="" value="修改商品" class="btn btn-info">
										<input type="reset" name="" value="重置" class="btn">
										</div>
									</div>
								</form>
							</div>
						</div>

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			</div><!-- /.main-container-inner -->

		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->


		<!-- <![endif]-->

		<!--[if IE]>
<![endif]-->

		<!--[if !IE]> -->

		<script src='__ADMIN__/assets/js/jquery-2.0.3.min.js'>
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='__ADMIN__/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='__ADMIN__/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="__ADMIN__/assets/js/bootstrap.min.js"></script>
		<script src="__ADMIN__/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="__ADMIN__/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="__ADMIN__/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="__ADMIN__/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="__ADMIN__/assets/js/jquery.slimscroll.min.js"></script>
		<script src="__ADMIN__/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="__ADMIN__/assets/js/jquery.sparkline.min.js"></script>
		<script src="__ADMIN__/assets/js/flot/jquery.flot.min.js"></script>
		<script src="__ADMIN__/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="__ADMIN__/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="__ADMIN__/assets/js/ace-elements.min.js"></script>
		<script src="__ADMIN__/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

	<!-- jqeury-file-upload -->
		<!-- <link href="__ADMIN__/css/bootstrap.min.css" rel="stylesheet">   -->
		<link rel="stylesheet" href="__ADMIN__/jfu/css/jquery.fileupload.css">  
		<link rel="stylesheet" href="__ADMIN__/jfu/css/jquery.fileupload-ui.css"> 
		<!-- <script src="__ADMIN__/js/jquery-2.0.3.min.js"></script>  -->
		<script src="__ADMIN__/jfu/js/vendor/jquery.ui.widget.js"></script>  
		<script src="__ADMIN__/jfu/js/jquery.fileupload.js"></script>  
		<script src="__ADMIN__/jfu/js/jquery.iframe-transport.js"></script>  

		<script type="text/javascript">
		    $(function() {  
		        $("#goods_thumb").fileupload({  
		                url: '<?php echo url("admin/goods/uploadthumb"); ?>',  
		                sequentialUploads: true  
		            }).bind('fileuploadprogress', function (e, data) {  
		                var progress = parseInt(data.loaded / data.total * 100, 10);  
		                $("#thumb_progress").css('width',progress + '%');  
		                $("#thumb_progress").html(progress + '%');  
		            }).bind('fileuploaddone', function (e, data) {console.log(data);
		                $("#img").attr("src",data.result);  
		                // $("#thumb_upload").css({display:"none"}); 
		                // $("#thumb_cancle").css({display:""}); 
		            });  
		                 
		        });
		    </script> 
		    <script type="text/javascript">
		    	$(function(){
		    		$('#thumb_cancle').click(function(){
		    			$.ajax({
		    				url:'<?php echo url("admin/goods/canclethumb"); ?>',
		    				type:'post',
		    				success:function(data){
		    					$("#thumb_upload").css({display:""}); 
		                		$("#thumb_cancle").css({display:"none"});
								$("#thumb_progress").css('width',0);
								$("#thumb_progress").html('');
		                		$("#img").attr("src","__ADMIN__/assets/images/upload.png");  
		    				}
		    			})
		    		});
		    	});
		    </script>
		    <!-- 商品细节图 -->
		    <script type="text/javascript">
			$(function(){
				$('#goods_img').fileupload({
					url:'<?php echo url("admin/goods/imgupload"); ?>',
					dataType: "json",   
				    multipart:true,
				    sequentialUploads: true,
				    done:function(e,data){
				    	$(".preview").append("<div style='margin-top:10px;'><img src="+data.result+" width='100'><a class='img_cancle btn btn-warning' role='button' style=''>删除</a></div>");
				    },
				    progressall:function(e,data){
				    	var progress = parseInt(data.loaded / data.total * 100, 10);  
				        $("#img_progress").css("width", progress + "%");  
				        $("#img_progress").html("上传总进度："+progress+"%"); 
				    }
				})
			})
			</script>
			<script type="text/javascript">
				$(function(){
					$(".preview").on("click",".img_cancle",function(){
						 var index = $(".preview a").index(this);
						 var me = this;
			   			 $.ajax({
			   			 	data:{'index':index},
			   			 	type:"post",
			   			 	url:"<?php echo url('admin/goods/imgcancle'); ?>",
			   			 	success:function(data){
			   			 		$(me).prev('div').css({display:"none"});
			   			 		$(me).prev('img').css({display:"none"});
			   			 		$(me).css({display:"none"});
			   			 	}
			   			 })
					})
				})
			</script>
			<!-- /商品细节图 -->
		    <!-- <script src="__ADMIN__/assets/js/fuelux/data/fuelux.tree-sampledata.js"></script> -->
		    <script src="__ADMIN__/assets/js/fuelux/fuelux.tree.min.js"></script>
		    <script type="text/javascript">
			jQuery(function($){

		$('#tree1').ace_tree({
			dataSource: treeDataSource ,
			multiSelect:true,
			loadingHTML:'&lt;div class="tree-loading"&gt;&lt;i class="icon-refresh icon-spin blue"&gt;&lt;/i&gt;&lt;/div&gt;',
			'open-icon' : 'icon-minus',
			'close-icon' : 'icon-plus',
			'selectable' : true,
			'selected-icon' : 'icon-ok',
			'unselected-icon' : 'icon-remove'
		});

		$('#tree2').ace_tree({
			dataSource: treeDataSource2 ,
			loadingHTML:'&lt;div class="tree-loading"&gt;&lt;i class="icon-refresh icon-spin blue"&gt;&lt;/i&gt;&lt;/div&gt;',
			'open-icon' : 'icon-folder-open',
			'close-icon' : 'icon-folder-close',
			'selectable' : false,
			'selected-icon' : null,
			'unselected-icon' : null
		});



		/**
		$('#tree1').on('loaded', function (evt, data) {
		});

		$('#tree1').on('opened', function (evt, data) {
		});

		$('#tree1').on('closed', function (evt, data) {
		});

		$('#tree1').on('selected', function (evt, data) {
		});
		*/
});
		</script>

		<!-- /jquery-file-upliad -->
	</body>
</html>

