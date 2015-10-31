

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RPI India</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- css -->
<link href="<?php echo base_url();?>assets\assets\css\bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets\assets\css\fancybox\jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets\assets\css/jcarousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets\assets\css\flexslider.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets\assets\js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets\assets\css\style.css" rel="stylesheet">
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> <!-- <img class="img-responsive" src="<?php echo base_url();?>assets\img\service3.jpg" alt="">   -->
                    <a style="margin-top:0px;" class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets\img\logo.jpg" style="width:150px" salt="logo"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li <?php if($id==7){echo 'class="active"';}?> ><a href="<?php echo base_url();?>">Home</a></li> 
						<li <?php if($id==1){echo 'class="active"';}?> ><a href="<?php echo base_url().'users/aboutShow';?>">About Us</a></li>
						<li <?php if($id==2){echo 'class="active"';}?> ><a href="<?php echo base_url().'users/servicesShow';?>">Services</a></li>
                        <li <?php if($id==3){echo 'class="active"';}?> ><a href="<?php echo base_url().'users/researchShow';?>">Research</a></li>
                        <li <?php if($id==5){echo 'class="active"';}?> ><a href="<?php echo base_url().'users/strengthShow';?>">Strength</a></li>
                        <li <?php if($id==0){echo 'class="active"';}?> ><a href="<?php echo base_url().'users/contactUsShow';?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->