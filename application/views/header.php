<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?= $this->config->item('app_title') ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  

    <link href="<?= base_url() ?>assets/css/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/calendar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-flash-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.2.0/r-2.1.1/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.css"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
   <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
   <link href="<?= base_url() ?>assets/css/tabs.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/fullcalendar.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/fullcalendar.print.css" rel="stylesheet">   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <h1><a href="index.html">ALGOMINE-MRS</a></h1>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                 
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                            <ul class="dropdown-menu animated fadeInUp">
                              <li><a href="profile.html">Profile</a></li>
                              <li><a href="login.html">Logout</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class="page-content" style="margin:20px">
        <div class="row">
    
          <div class="col-md-12" >
            <div class="row">
            <div class="content-box-large">
 
            <div  class="menu">
                <nav>
                    <ul>
                        <li <?php if (isset($link_status) && $token=='home'): ?>
                            class="<?= $link_status ?>"
                        <?php endif ?> ><a href="<?=site_url('auth/index')?>"  <?php if (isset($link_status) && $token=='home'): ?> <?= $active_style ?><?php endif ?> ><span><i class="glyphicon glyphicon-home"></i> Registration Desk</span></a></li>
                        <li <?php if (isset($link_status) && $token=='appointment'): ?>
                            class="<?= $link_status ?>"
                        <?php endif ?> ><a href="<?=site_url('auth/create_user')?>" <?php if (isset($link_status) && $token=='appointment'): ?> <?= $active_style ?><?php endif ?>><span><i  class="glyphicon glyphicon-calendar"></i> Appointment scheduling</span></a></li>
                        <li <?php if (isset($link_status) && $token=='visits'): ?>
                            class="<?= $link_status ?>"
                        <?php endif ?> ><a href="#section-3" <?php if (isset($link_status) && $token=='visits'): ?> <?= $active_style ?><?php endif ?>><span><i  class="glyphicon glyphicon-folder-open"></i> Visits</span></a></li>
                       <li <?php if (isset($link_status) && $token=='expenses'): ?>
                            class="<?= $link_status ?>"
                        <?php endif ?> ><a href="#section-4" <?php if (isset($link_status) && $token=='expenses'): ?> <?= $active_style ?><?php endif ?>><span><i  class="glyphicon glyphicon-folder-usd"></i> Expenses</span></a></li>
                       <li <?php if (isset($link_status) && $token=='reports'): ?>
                            class="<?= $link_status ?>"
                        <?php endif ?> ><a href="#section-5" <?php if (isset($link_status) && $token=='reports'): ?> <?= $active_style ?><?php endif ?>><span><i class="glyphicon glyphicon-list"></i> Reports</span></a></li>
                       <li <?php if (isset($link_status) && $token=='admin'): ?>
                            class="<?= $link_status ?>"
                        <?php endif ?> ><a href="<?=site_url('auth/users')?>" <?php if (isset($link_status) && $token=='admin'): ?> <?= $active_style ?><?php endif ?>><span><i class="glyphicon glyphicon-cog"></i> System Administration</span></a></li>
                    </ul>
                </nav>
        <div class="content">