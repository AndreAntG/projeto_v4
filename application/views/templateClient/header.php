<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Bank Security</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assetsv2/css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assetsv2/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assetsv2/css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assetsv2/css/jcarousel.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assetsv2/css/flexslider.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assetsv2/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assetsv2/css/slitslider.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/sweetalert.css" rel="stylesheet" type="text/css" >

	
  <!-- Theme skin -->
  <link href="<?php echo base_url(); ?>/assetsv2/skins/kissme.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>/assetsv2/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>/assetsv2/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>/assetsv2/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>/assetsv2/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assetsv2/ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                <li><a href="<?php echo base_url('user/logout'); ?>" data-toggle="modal"><i class="icon-off"></i> Fechar Sessão </a></li>
              </ul>
            </div>
            <!-- end signin modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="<?php echo base_url(); ?>/assetsv2/img/logo.png" alt="" class="logo" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown">
                      <a href="<?php echo base_url(); ?>account/index">Inicio <i class="icon-home"></i></a>
                     </li>
                     <li class="dropdown">
                      <a href="#">Transferencias <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>account/transference">Tranf. Nacional</a></li>
                        <li><a href="pricingbox.html">Tranf. Internacional</a></li>
                        <li><a href="pricingbox.html">Tranf. Entre Minhas Contas</a></li>
                      </ul>
                    </li> 
                    <li class="dropdown">
                      <a href="#">Pagamentos <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">Pagamento Serviços</a></li>
                        <li><a href="pricingbox.html">Pagamento Compras</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Contas <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">Contas Visíveis</a></li>
                        <li><a href="pricingbox.html">Saldos e Movimentos</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->