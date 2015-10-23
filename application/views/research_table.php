<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<h2>Research Table</h2>
<a href="<?php echo base_url().'users/research'; ?>">Add Research</a>
 <a href="<?php echo base_url().'users/contactUpdateShow';?>">Contact Update</a>
 <a href="<?php echo base_url().'users/servicesView'; ?>">Services</a>
 <a href="<?php echo base_url();?>">About Update</a>
<table>
	 
<tr>
	<td>Research Name</td>
	<td>Update</td>
	<td>Delete</td>
	
</tr>
<?php foreach ($data as $row) {

 ?>
<tr style="boder:1px solid red">
	<td><?php echo $row['rpi_research_name']; ?></td>
	<td><a href="<?php echo base_url().'users/researchUpdateShow/'.$row['rpi_research_id']; ?>">Update</a></td>
	<td><a href="<?php echo base_url().'users/deleteResearch/'.$row['rpi_research_id']; ?>">Delete</a></td>
	<td></td> 
</tr>
<?php } ?>
</table>