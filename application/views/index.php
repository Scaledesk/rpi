<script src="//code.jquery.com/jquery-1.9.1.min.js"></script> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet"> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script> 
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<h2>About input</h2> 

<a href="<?php echo base_url().'users/getResearch'; ?>"> Research</a>
 <a href="<?php echo base_url().'users/contactUpdateShow';?>">Contact Update</a>
 <a href="<?php echo base_url().'users/servicesView'; ?>">Services</a>
 <a href="<?php echo base_url();?>">About Update</a>
<form action="<?php echo base_url().'users'; ?>" method="post">

<script type="text/javascript">
	$(document).ready(function() {
  $('#summernote').summernote();
});

</script>
<textarea id="summernote" name="about"><?php echo $data[0]['rpi_about_1'];?></textarea>
<!-- <textarea name="about_1"><?php echo $data[0]['rpi_about_2'];?></textarea>
<textarea name="about_2"><?php echo $data[0]['rpi_about_3'];?></textarea>
<textarea name="about_3"><?php echo $data[0]['rpi_about_4'];?></textarea>
<textarea name="about_4"><?php echo $data[0]['rpi_about_5'];?></textarea>
<textarea name="about_5"><?php echo $data[0]['rpi_about_6'];?></textarea> -->
	
<!-- <input type="text" name="about"value="<?php echo $data[0]['rpi_about_1'];?>" />

<input type="text" name="about_1" value="<?php echo $data[0]['rpi_about_2'];?>" />
<input type="text" name="about_2" value="<?php echo $data[0]['rpi_about_3'];?>"/>
<input type="text" name="about_3" value="<?php echo $data[0]['rpi_about_4'];?>"/>
<input type="text" name="about_4" value="<?php echo $data[0]['rpi_about_5'];?>"/>
<input type="text" name="about_5" value="<?php echo $data[0]['rpi_about_6'];?>"/> -->
<input  type="submit" name="submit" value="update">
</form>


<link href="<?php echo base_url(); ?>/assets/summernote/dist/summernote.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/assets/summernote/dist/summernote.min.js"></script>