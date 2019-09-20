<?php
//echo "<pre>", print_r($my_contact), "</pre>";
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tawanda Marunga | Address Book</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custon-icon.css');?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/meanmenu.min.css');?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css');?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/data-table/bootstrap-table.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/data-table/bootstrap-editable.css');?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/c3.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form.css');?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css');?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js');?>"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="<?php echo base_url('assets/img/message/1.jpg');?>" alt="" />
                    </a>
                    <h3>Tawanda Marunga</h3>
                    <p>tawanda.marunga@gmail.com</p>
                    
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                          <li class="nav-item"><a href="<?php echo site_url('Welcome/') ?>" role="button" aria-expanded="false" class="nav-link"><i class="fa fa-eye"></i> <span class="mini-dn">  My Contacts</span> </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                            </div>
                        </li>
                       
                        <li class="nav-item"><a href="<?php echo site_url('Welcome/New_Contact') ?>" role="button" aria-expanded="false" class="nav-link"><i class="fa fa-plus"></i> <span class="mini-dn">  Add New Contact</span> </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End of Header top area-->
        