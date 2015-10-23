<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<h2>Update Research</h2>
<form action="<?php echo base_url().'users/updateResearch/'.$data[0]['rpi_research_id']; ?>" method="post">
	
<input type="text" name="research_name" value="<?php echo $data[0]['rpi_research_name']; ?>" />


<input  type="submit" name="submit" value="submit">
</form>