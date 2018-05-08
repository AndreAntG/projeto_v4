<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
		<title>Bank Security - Admin Dashboard</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/favicon.png">

        <!-- plugins css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/node_modules/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/node_modules/PACE/themes/blue/pace-theme-minimal.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
	  	<link href="<?php echo base_url(); ?>assets/css/sweetalert.css" rel="stylesheet" type="text/css" >
	    <script src="<?php echo base_url(); ?>assets/js/sweetalert.js"></script>
	  	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


	  


		<!-- core css -->
		<link href="<?php echo base_url(); ?>assets/css/ei-icon.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
	  
	  
		<link rel="icon" href="./favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>dist/admin4b.min.css" rel="stylesheet">

      <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }



      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }
    </style>
	</head>
 