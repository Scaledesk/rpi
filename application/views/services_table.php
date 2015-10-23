<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<h2>Services Table</h2> <a href="<?php echo base_url().'users/contactUpdateShow';?>">Contact Update</a>
<table>
	<a href="<?php echo base_url().'users/services'; ?>">Add Services</a> <a href="<?php echo base_url();?>">About Update</a>
<tr>
	<td>Services Name</td>
	<td>Update</td>
	<td>Delete</td>
	
</tr>
<?php foreach ($data as $row) {

 ?>
<tr style="boder:1px solid red">
	<td><?php echo $row['rpi_services_name']; ?></td>
	<td><a href="<?php echo base_url().'users/servicesUpdateShow/'.$row['rpi_services_id']; ?>">Update</a></td>
	<td><a href="<?php echo base_url().'users/deleteServices/'.$row['rpi_services_id']; ?>">Delete</a></td>
	<td></td> 
</tr>
<?php } ?>
</table>