<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<h2>Update Contact</h2>
<a href="<?php echo base_url().'users/research'; ?>">Add Research</a>
 <a href="<?php echo base_url().'users/contactUpdateShow';?>">Contact Update</a>
 <a href="<?php echo base_url().'users/servicesView'; ?>">Services</a>
 <a href="<?php echo base_url();?>">About Update</a>


<form action="<?php echo base_url().'users/updateContact/'.$data[0]['rpi_contact_id']; ?>" method="post">
	

	Contact Person </br>
<input type="text" name="contact_person" value="<?php echo $data[0]['rpi_contact_person']; ?>" /></br>
  Contact Number </br>
<input type="text" name="contact_number" value="<?php echo $data[0]['rpi_contact_number']; ?>" /></br>
 Email </br>
<input type="text" name="contact_email"  value="<?php echo $data[0]['rpi_contact_email']; ?>" /></br>
Address </br>
<input type="text" name="contact_address" value="<?php echo $data[0]['rpi_contact_address']; ?>"/></br>
State </br>
<input type="text" name="contact_state"  value="<?php echo $data[0]['rpi_contact_state']; ?>"/> </br>
 
<input  type="submit" name="submit" value="Update">
</form>