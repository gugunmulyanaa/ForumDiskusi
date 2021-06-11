<!DOCTYPE html>
<html>
<?php




error_reporting(0);
session_start();
if ((!$_SESSION['username']) AND (!$_SESSION['password']))
{
echo "<center><font color=white size=+3><b>
Anda belum login!<br><a href='login.php'>Please login to accses</a></b></font><br>";
exit;
}
?>
?
    
<!-- Mirrored from lambdathemes.in/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2016 12:23:49 GMT -->
<head>
        
        <!-- Title -->
        <title>Cyber 4 panel IG</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>  
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>  
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>   
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>  
        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>    
            
        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
            </div>
        </nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Hi There!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Hi! How are you?
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Fine! do you like my project?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Yes, It's clean and creative, good job!
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Thanks, I tried!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Good luck with your sales!
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
        </nav>
        
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index-2.html" class="logo-text"><span>Modern</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                <li>
                                    <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                                </li>
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Choose Theme Color
                                                    <div class="color-switcher">
                                                        <a class="colorbox color-blue" href="indexca00.html?theme=blue" title="Blue Theme" data-css="blue"></a>
                                                        <a class="colorbox color-green" href="indexaf91.html?theme=green" title="Green Theme" data-css="green"></a>
                                                        <a class="colorbox color-red" href="index0e99.html?theme=red" title="Red Theme" data-css="red"></a>
                                                        <a class="colorbox color-white" href="index13d4.html?theme=white" title="White Theme" data-css="white"></a>
                                                        <a class="colorbox color-purple" href="index938c.html?theme=purple" title="purple Theme" data-css="purple"></a>
                                                        <a class="colorbox color-dark" href="index4965.html?theme=dark" title="Dark Theme" data-css="dark"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>    
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 4 new  messages !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                        <p class="msg-name">Christopher Palmer</p>
                                                        <p class="msg-text">See you soon !</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                        <p class="task-details">New user registered.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                        <p class="task-details">Database error.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                        <p class="task-details">Reached 24k likes</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">David<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                        <i class="fa fa-comments"></i>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>David Green<br><small>Art Director</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="index-2.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        
                        
                        
                        </li>
                       
                        </li>
                       
                        
                       
                    
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-map-marker"></span><p>Social IG</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">IG Like!</a></li>
                                <li><a href="maps-vector.html">IG Followers!</a></li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
<h3 class="widget-title judul-menu-sidebar">IG SOCIAL</h3>
<select name="harga" id="harga" class="form-control">
  <label for="harga">*paket</label>
<option value="0">100</option>
<option value="1">100</option>

</select>


<button type="submit" id="connect" class="btn btn-success col-md-4 btn-connect" /> Connect</button>

<?php 
$harga-$saldo 
echo =="sukses membeli kondom sehargra 100 dlolat"
?>
   <div id="main-wrapper">
                    <div class="row">
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                     
                                                    
                                        <span class="info-box-title">Page views</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p>$<span class="counter">653,000</span></p>
                                        <span class="info-box-title">Monthly revenue goal</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">47,500</p>
                                        <span class="info-box-title">New emails recieved</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-envelope"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    <di>
                        
                        
                        
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Cyb4panel</p>
                    </a>
                </li>
                
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
    

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
        <script src="assets/plugins/toastr/toastr.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/metrojs/MetroJs.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnrrKOU8lJFivmjaWTY1ElQdCrPQphqKt4MBIYxoWdLCqT0JUN%2f2rNiVqAhOekHAq7BJXq2InucRhzPliNqvPHz%2fSqQQvJqjRe3RF0tt5BgM5B9IgHO1jU5Z0wJiMVSQ3vcmeQDxTcsuodT6qc1MrvgxibRlf8%2fdmCFpezn2HsKG%2f8RuGHvETpA61f8EiyNy5%2fz8bjFJoHxyMV81UvIV8EwEutnNazkRsCg1RaTBfRPcol79c1nGRLE7B5CSPOAUWY3seCoHoh8w2wyyPJoypCy%2fDylgEBWGJo%2bMAEM2H3OQMYBAZLA%2fOX9cSFJGSreIXWAbbTjQ4u7m6aTEzEqPMSEU2%2f9tagtxP1TxOaQb2YifcL%2byAgifiFlyTqX7%2foxJfgIxQ9pJaFOk7F3qRAY3xTS1VE2lv%2bLTnFpcWwAztibx8T4stLjwullzJ1wpitNZpnccchbzr4TVDGmT65IehJSN%2bH4mfQrb5lBkcLcKDDCF0%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from lambdathemes.in/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2016 12:31:10 GMT -->
</html>