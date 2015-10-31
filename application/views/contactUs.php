<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<!-- <h2>Contact Us Page</h2> 

<form action="<?php echo base_url().'users/contactUs'; ?>" method="post">


<input type="email" name="email" placeholder="Email"/></br>
<input type="text" name="name" placeholder="Name"/></br>
<input type="text" name="mobile"  placeholder="Mobile No"/></br>

<textarea name="massage">Massage</textarea></br>

<input  type="submit" name="submit" value="Submit">
</form> 
 -->
 <!-- 

   echo '<div style="color:green;font-size:18px; height:50px;width:500px; margin:0px auto;">'..'</div>';
  } ?>
 -->


<section id="content">
	
	<div class="container">
	<?php if($this->session->flashdata('msg')){ ?>
	<?php  echo ' <div class="alert alert-success" role="alert">'.$this->session->flashdata('msg').'</div>';}?>
	<div class="row">
	<?php /*echo "<pre/>";print_r($data)*/ ?>
								<div class="col-md-6">
								<h3> Our Address</h3>
								<p> 
								   <?php echo $data[0]['rpi_contact_address'];?><br>
								   <?php echo $data[0]['rpi_contact_state'];?><br>
								    Contact Person: <?php echo $data[0]['rpi_contact_person'];?><br>
								   Contact number:  <?php echo $data[0]['rpi_contact_number'];?><br>
								    Contact Email Id: <?php echo $data[0]['rpi_contact_email'];?><br>
								</p>
									<h3> Leave Us a Message</h3>
									<div class="contact-form">
										<form action="<?php echo base_url().'users/contactUs'; ?>" method="post" id="contact-form" role="form" novalidate="novalidate">
											<div class="form-group has-feedback">
												<label for="name">Name*</label>
												<input type="text" class="form-control" id="name" name="name" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">Email*</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="mobile">Mobile No*</label>
												<input type="text" class="form-control" id="mobile" name="mobile" placeholder="">
												<i class="fa fa-navicon form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="message">Message*</label>
												<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Submit" class="btn btn-default">
										</form>
									</div>
								</div>
								<div class="col-md-6">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:620px;width:600px;"><div id="gmap_canvas" style="height:620px;width:600px;">
	
</div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
<a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div>
<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(28.549291,77.2678137),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.549291,77.2678137)});infowindow = new google.maps.InfoWindow({content:"<b>Okhla</b><br/>Phase-II<br/> New Delhi" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								
							 </div>
							</div>
	</div>
 
	</section>