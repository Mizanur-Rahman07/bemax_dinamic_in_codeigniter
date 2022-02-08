<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->

<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>backend-dashboard-master/css/bootstrap.min.css">
	<!-- 
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet"> -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>backend-dashboard-master/css/bootstrap-responsive.min.css">
	<!-- <link href="css/bootstrap-responsive.min.css" rel="stylesheet"> -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>backend-dashboard-master/css/style.css">
	<!-- <link id="base-style" href="css/style.css" rel="stylesheet"> -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>backend-dashboard-master/css/style-responsive.css">
	<!-- <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet"> -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>backend-dashboard-masterimg/favicon.ico">
	<!-- <link rel="shortcut icon" href="img/favicon.ico"> -->
	<!-- end: Favicon -->




</head>

<body>
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="http://localhost/bemax/admin/backend"><span>Metro</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
									<a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span>
									</a>
								</li>
								<li class="warning">
									<a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span>
									</a>
								</li>
								<li class="warning">
									<a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">Transaction was canceled</span>
										<span class="time">6 hour</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span>
									</a>
								</li>
								<li class="dropdown-menu-sub-footer">
									<a>View all notifications</a>
								</li>
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
									<a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
										<div class="taskProgress progressSlim red">80</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
										<div class="taskProgress progressSlim green">47</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="header">
											<span class="title">Django Project For Google</span>
											<span class="percent"></span>
										</span>
										<div class="taskProgress progressSlim yellow">32</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="header">
											<span class="title">SEO for new sites</span>
											<span class="percent"></span>
										</span>
										<div class="taskProgress progressSlim greenLight">63</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="header">
											<span class="title">New blog posts</span>
											<span class="percent"></span>
										</span>
										<div class="taskProgress progressSlim orange">80</div>
									</a>
								</li>
								<li>
									<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
												Łukasz Holeczek
											</span>
											<span class="time">
												6 min
											</span>
										</span>
										<span class="message">
											Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="img/avatar2.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
												Megan Abott
											</span>
											<span class="time">
												56 min
											</span>
										</span>
										<span class="message">
											Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="img/avatar3.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
												Kate Ross
											</span>
											<span class="time">
												3 hours
											</span>
										</span>
										<span class="message">
											Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
												Julie Blank
											</span>
											<span class="time">
												yesterday
											</span>
										</span>
										<span class="message">
											Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="img/avatar5.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
												Jane Sanders
											</span>
											<span class="time">
												Jul 25, 2012
											</span>
										</span>
										<span class="message">
											Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
										</span>
									</a>
								</li>
								<li>
									<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Łukasz Holeczek
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="http://localhost/bemax/admin/backend"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
						<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> First Slider</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/first_slider/edit_slider"><i class="icon-edit"></i><span class="hidden-tablet"> Edit Slider</span></a></li>
								<li><a href="http://localhost/bemax/admin/first_slider/add_slider"><i class="icon-edit"></i><span class="hidden-tablet"> Add Slider</span></a></li>
								<li><a href="http://localhost/bemax/admin/first_slider/slider_list"><i class="icon-edit"></i><span class="hidden-tablet"> Slider List</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> CTA area</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/cta_area/add_cta"><i class="icon-edit"></i><span class="hidden-tablet"> Add CTA area</span></a></li>
								<li><a href="http://localhost/bemax/admin/cta_area/cta_list"><i class="icon-edit"></i><span class="hidden-tablet"> CTA area List</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">1st services area</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/first_services_area/add_first_srvc_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/first_services_area/first_srvc_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> First area List</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">2nd services area</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/secound_services_area/add_secound_srvc_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/secound_services_area/secound_srvc_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> Secound area List</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">3rd services area</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/Third_services_area/add_third_srvc_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Third_services_area/third_srvc_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> Third area List</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">4th services area</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/Fourth_services_area/add_fourth_srvc_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Fourth_services_area/fourth_srvc_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> Fourth area List</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">5th services area</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/Fifth_services_area/add_fifth_srvc_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Fifth_services_area/fifth_srvc_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> Fifth area List</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">6th services area</span><span class="label label-important"> 4 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/Sixth_services_area/add_sixth_left_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Left Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Sixth_services_area/sixth_left_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> Left area List</span></a></li>
								<li><a href="http://localhost/bemax/admin/Sixth_services_area/add_sixth_svcs_right_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Right Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Sixth_services_area/sixth_right_svcs_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> Right area List</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">7th services area</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/Seven_services_area/add_seven_svcs_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Services Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Seven_services_area/seven_srvc_area_list"><i class="icon-edit"></i><span class="hidden-tablet"> Seven area List</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">8th services area</span><span class="label label-important"> 8 </span></a>
							<ul>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/add_step_one_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Step 1 Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/step_one_list"><i class="icon-edit"></i><span class="hidden-tablet"> Step 1 List</span></a></li>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/add_step_two_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Step 2 Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/step_two_list"><i class="icon-edit"></i><span class="hidden-tablet"> Step 2 List</span></a></li>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/add_step_three_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Step 3 Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/step_three_list"><i class="icon-edit"></i><span class="hidden-tablet"> Step 3 List</span></a></li>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/add_step_four_area"><i class="icon-edit"></i><span class="hidden-tablet"> Add Step 4 Area</span></a></li>
								<li><a href="http://localhost/bemax/admin/Eight_services_area/step_four_list"><i class="icon-edit"></i><span class="hidden-tablet"> Step 4 List</span></a></li>
							</ul>
						</li>
						<li><a href="login"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
						<li><a href="registration/reg_form"><i class="icon-lock"></i><span class="hidden-tablet"> Registration Form</span></a></li>

					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="http://localhost/bemax/admin/backend">Home</a>
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Dashboard</a></li>
				</ul>

				<?php
				$this->load->view('admin-view/flass_message_show');

				?>