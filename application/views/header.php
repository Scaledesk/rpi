<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>RPI India</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/templatemo_main.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->

</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Admin </h1> </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"> </span>
        </button> 
      </div>  
      <div style="float: right; width: 200px;"><a href="<?php echo base_url().'users/logout';?>" style=" text-decoration:non;  text-align: left;  blink;color:#7F7F7F;"><h4>Logout</h4></a> </div>
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          
          
          <li class="sub open">
           <!--  <a href="javascript:;">
             <div class="pull-right"><span class="caret"></span></div>
            </a> -->
            <ul class="templatemo-submenu">

                  <li><a href="<?php echo base_url().'users/getResearch'; ?>">Research</a>
                  <li> <a href="<?php echo base_url().'users/contactUpdateShow';?>">Contact Update</a>
                 <li>  <a href="<?php echo base_url().'users/servicesView'; ?>">Services</a>
                  <li> <a href="<?php echo base_url().'users/admin';?>">About Update</a>
                  <li> <a href="<?php echo base_url().'users/strengthUpdateShow';?>">Strength</a>
             <!--  <li><a href="#">Aenean</a></li>
              <li><a href="#">Pellentesque</a></li>
              <li><a href="#">Congue</a></li>             
              <li><a href="#">Interdum</a></li>
              <li><a href="#">Facilisi</a></li> -->
            </ul>
          </li>
         <!--  <li><a href="data-visualization.html"><i class="fa fa-cubes"></i><span class="badge pull-right">9</span>Data Visualization</a></li>
          <li><a href="maps.html"><i class="fa fa-map-marker"></i><span class="badge pull-right">42</span>Maps</a></li>
          <li><a href="tables.html"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Manage Users</a></li>
          <li><a href="preferences.html"><i class="fa fa-cog"></i>Preferences</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li> -->
        </ul>
      </div><!--/.navbar-collapse -->

