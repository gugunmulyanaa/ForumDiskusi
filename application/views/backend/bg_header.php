<html lang="en">

<!-- Mirrored from paper.kaijuthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2016 09:31:53 GMT -->

<head>
	<meta charset="utf-8">
	<title>Backend</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="description" content="Paper - Material Admin Theme">
	<meta name="author" content="KaijuThemes">

	<link rel="shortcut icon" href="<?php echo base_url('GUI/backend/assets/img/logo-icon-dark.png'); ?>">

	<link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
	<link type='text/css' href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="<?php echo base_url('GUI/backend/assets/fonts/font-awesome/css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet"> <!-- Font Awesome -->
	<link href="<?php echo base_url('GUI/backend/assets/css/styles.css" type="text/css'); ?>" rel="stylesheet"> <!-- Core CSS with all styles -->

	<link href="<?php echo base_url('GUI/backend/assets/plugins/codeprettifier/prettify.css'); ?>" type="text/css" rel="stylesheet"> <!-- Code Prettifier -->

	<link href="<?php echo base_url('GUI/backend/assets/plugins/dropdown.js/jquery.dropdown.css'); ?>" type="text/css" rel="stylesheet"> <!-- iCheck -->
	<link href="<?php echo base_url('GUI/backend/assets/plugins/progress-skylo/skylo.css'); ?>" type="text/css" rel="stylesheet"> <!-- Skylo -->

	<!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->
	<!-- The following CSS are included as plugins and can be removed if unused-->

	<link href="<?php echo base_url('GUI/backend/assets/plugins/form-daterangepicker/daterangepicker-bs3.css'); ?>" type="text/css" rel="stylesheet"> <!-- DateRangePicker -->
	<link href="<?php echo base_url('GUI/backend/assets/plugins/fullcalendar/fullcalendar.css" type="text/css'); ?>" rel="stylesheet"> <!-- FullCalendar -->
	<link href="<?php echo base_url('GUI/backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url('GUI/backend/assets/less/card.less" type="text/css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('GUI/backend/assets/plugins/datatables/dataTables.bootstrap.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url('GUI/backend/assets/plugins/datatables/dataTables.themify.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url('GUI/backend/assets/plugins/chartist/dist/chartist.min.css'); ?>" type="text/css" rel="stylesheet"> <!-- chartist -->
	<!-- DateTime Picker -->
</head>

<body class="animated-content infobar-overlay">


	<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
		<!-- <div id="page-progress-loader" class="show"></div> -->

		<div class="logo-area">
			<a class="navbar-brand navbar-brand-primary" href="index.html">
				<img class="show-on-collapse img-logo-white" alt="Paper" src="<?php echo base_url('GUI/backend/assets/img/logo-icon-white.png'); ?>">
				<img class="show-on-collapse img-logo-dark" alt="Paper" src="<?php echo base_url('GUI/backend/assets/img/logo-icon-dark.png'); ?>">
				<img class="img-white" alt="Paper" src="<?php echo base_url('GUI/backend/assets/img/un.png'); ?>">
				<img class="img-dark" alt="Paper" src="<?php echo base_url('GUI/backend/assets/img/un.png'); ?>">
			</a>

			<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
				<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
					<span class="icon-bg">
						<i class="material-icons">menu</i>
					</span>
				</a>
			</span>
			<span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
				<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
					<span class="icon-bg">
						<i class="material-icons">search</i>
					</span>
				</a>
			</span>
			<div id="search-box">
				<input class="form-control" type="text" placeholder="Search..." id="search-input"></input>
			</div>
		</div><!-- logo-area -->

		<ul class="nav navbar-nav toolbar pull-right">

			<li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
				<a class="toggle-fullscreen"><span class="icon-bg">
						<i class="material-icons">close</i>
					</span></i></a>
			</li>
			<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
				<a href="#" class="toggle-fullscreen"><span class="icon-bg">
						<i class="material-icons">fullscreen</i>
					</span></i></a>
			</li>




			<li class="toolbar-icon-bg" id="trigger-infobar">
				<a href="<?php echo base_url('backend/logout'); ?>">Logout</a>
				</a>
			</li>

		</ul>

	</header>