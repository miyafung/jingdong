<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"G:\phpStudy2017\PHPTutorial\WWW\jd\public/../application/admin\view\cate\catelist.html";i:1491465250;s:86:"G:\phpStudy2017\PHPTutorial\WWW\jd\public/../application/admin\view\public\navbar.html";i:1493888042;s:87:"G:\phpStudy2017\PHPTutorial\WWW\jd\public/../application/admin\view\public\sidebar.html";i:1498195384;}*/ ?>
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
					<div class="page-content">
						<div class="page-header">
							<h1>
								分类管理
								<small>
									<i class="icon-double-angle-right"></i>
									分类列表
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">

										<div class="table-responsive">
											<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
											<form action="<?php echo url('cate/sort'); ?>" method="post">
												<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
												<thead>
													<tr role="row"><th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 66px;" aria-label="
														">
															<!-- <label>
																<input class="ace" type="checkbox">
																<span class="lbl"></span>
															</label> -->
														</th>
														<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 157px;" aria-label="Domain: activate to sort column ascending">ID</th>
														<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 118px;" aria-label="Price: activate to sort column ascending">分类名称</th>
														<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 118px;" aria-label="Price: activate to sort column ascending">排序</th>
														<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 132px;" aria-label="Clicks: activate to sort column ascending">操作</th>
														
														</tr>
												</thead>

											<tbody role="alert" aria-live="polite" aria-relevant="all">
												<?php if(is_array($cate_list) || $cate_list instanceof \think\Collection || $cate_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
													<tr class="odd">
														<td class="center  sorting_1">
															<label>
																<input class="ace" type="checkbox">
																<span class="lbl"></span>
															</label>
														</td>

														<td class=" ">
															<a href="#"><?php echo $vo['cate_id']; ?></a>
														</td>
														<td class=" "><?php echo $vo['str']; ?><?php echo $vo['cate_name']; ?></td>
														<td class=" "><input type="text" name="<?php echo $vo['cate_id']; ?>" value="<?php echo $vo['cate_sort']; ?>"></td>
														<td class=" ">
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="green" href="<?php echo url('cate/upd',array('cate_id'=>$vo['cate_id'])); ?>">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="javascript:if(confirm('确认删除？')) location='<?php echo url('cate/del',array('cate_id'=>$vo['cate_id'])); ?>'">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</tbody>
											</table><?php echo $show; ?>
											<div class="clearfix form-actions">
												<div class="col-md-offset-3 col-md-9">
													<input type="submit" name="" value="分类排序" class="btn btn-info">
												</div>
											</div>
											</form>
											
										</div>
									</div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
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

	</body>
</html>

