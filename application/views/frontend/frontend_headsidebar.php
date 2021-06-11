<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Forum Diskusi</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('GUI/frontend/css/bootstrap.css'); ?>" media="screen">
    <!-- Awesome Icons Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('GUI/frontend/css/font-awesome.css'); ?>" media="screen">
    <!-- FlexSlider Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('GUI/frontend/css/flexslider.css'); ?>" media="screen">
    <!-- CSS3 Animation Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('GUI/frontend/css/animate.min.css'); ?>" media="screen">
    <!-- Css Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('GUI/frontend/style.css'); ?>" media="screen">
    <!-- Normalize Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('GUI/frontend/css/normalize.css'); ?>" media="screen">

    <!-- Support for HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- Enable media queries on older bgeneral_rowsers -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->

    <!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/switcher.css'); ?>" media="all" />
    <!-- END Switcher Styles -->

    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/pink.css'); ?>" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/purple.css'); ?>" title="purple" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/blue.css'); ?>" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/green.css'); ?>" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/red.css'); ?>" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/yellow.css'); ?>" title="yellow" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/orange.css'); ?>" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/switcher/css/grey.css'); ?>" title="grey" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('GUI/frontend/dark.css" title="dark'); ?>" media="all" />
    <!-- END Demo Examples -->

</head>

<body>

    <!-- ADD Switcher -->
    <div class="demo_changer">
        <div class="demo-icon"><i class="fa fa-cog fa-spin fa-2x"></i></div>
        <div class="form_holder">
            <h4>CHOOSE YOUR STYLE</h4>
            <p>Choose a color via Color picker or click the predefined style names!</p>
            <div class="predefined_styles">
                <h4>LIGHT OR DARK</h4>
                <a href="#" rel="light" class="styleswitch"><img class="img-thumbnail" src="switcher/images/light.png" alt=""></a>
                <a href="#" rel="dark" class="styleswitch"><img class="img-thumbnail" src="switcher/images/dark.png" alt=""></a>
                <hr>
                <h4>EXAMPLE PATTERNS</h4>
                <div class="stBgs">
                    <a href="switcher/images/bg_01.jpg" class="bg_t"><img src="switcher/images/bg_01.jpg" alt=""></a>
                    <a href="switcher/images/bg_02.jpg" class="bg_t"><img src="switcher/images/bg_02.jpg" alt=""></a>
                    <a href="switcher/images/bg_03.jpg" class="bg_t"><img src="switcher/images/bg_03.jpg" alt=""></a>
                    <a href="switcher/images/bg_04.jpg" class="bg_t"><img src="switcher/images/bg_04.jpg" alt=""></a>
                    <a href="switcher/images/bg_05.jpg" class="bg_t"><img src="switcher/images/bg_05.jpg" alt=""></a>
                    <a href="switcher/images/bg_06.jpg" class="bg_t"><img src="switcher/images/bg_06.jpg" alt=""></a>
                    <a href="switcher/images/bg_07.jpg" class="bg_t"><img src="switcher/images/bg_07.jpg" alt=""></a>
                    <a href="switcher/images/bg_08.jpg" class="bg_t"><img src="switcher/images/bg_08.jpg" alt=""></a>
                </div>
                <hr>
                <h4>PREDEFINED SKINS</h4>
                <a href="#" rel="pink" class="styleswitch"><img src="switcher/images/pink.png" alt=""></a>
                <a href="#" rel="purple" class="styleswitch"><img src="switcher/images/purple.png" alt=""></a>
                <a href="#" rel="blue" class="styleswitch"><img src="switcher/images/blue.png" alt=""></a>
                <a href="#" rel="green" class="styleswitch"><img src="switcher/images/green.png" alt=""></a>
                <a href="#" rel="red" class="styleswitch"><img src="switcher/images/red.png" alt=""></a>
                <a href="#" rel="yellow" class="styleswitch"><img src="switcher/images/yellow.png" alt=""></a>
                <a href="#" rel="orange" class="styleswitch"><img src="switcher/images/orange.png" alt=""></a>
                <a href="#" rel="grey" class="styleswitch"><img src="switcher/images/grey.png" alt=""></a>
            </div>
            <hr>
            <p>This tools is just for demo site.</p>
        </div>
    </div>
    <!-- END Switcher -->

    <div id="wrapper" class="container">
        <div class="row">
            <div id="left-sidebar" class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="logo-wrapper">
                    <a href="<?php echo base_url('frontend'); ?>" class="#">
                        <font size="5"> - Forum Diskusi - </font><br>
                    </a>
                </div><!-- end logo-wrapper -->
                <div class="menu-wrapper">
                    <nav class="flat-menu flat-menu-dark-orange flat-menu-slide-up">
                        <input type="checkbox" id="toggle-one" name="toggle" class="toggle-menu-input">
                        <label for="toggle-one" class="toggle-menu-label"><span class="fa fa-bars"></span>Menu</label>
                        <ul class="flat-responsive-menu">
                            <li>
                                <a href="<?php echo base_url('frontend'); ?>">Thread</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('frontend/beranda'); ?>">Beranda</a>
                            </li>


                            <li>
                                <input type="checkbox" id="menu-three" name="menu" class="menu-1">
                                <a href="<?php echo base_url('frontend/pendaftaran'); ?>">Pendaftaran</a>

                            </li>

                            <li>
                                <a href="<?php echo base_url('frontend/visi_misi'); ?>">Visi dan Misi</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('frontend/login_member'); ?>">Login</a>
                            </li>
                        </ul>
                    </nav><!-- end menu -->
                </div><!-- end menu wrapper -->

                <div class="mini-widget">
                    <form id="search_form">
                        <input class="form-control" placeholder="Search on this blog..." />
                    </form><!-- mini-widget -->
                </div><!-- mini-widget -->
            </div><!-- end left-sidebar -->