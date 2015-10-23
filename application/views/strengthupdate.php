<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<h2>Update Strength</h2>
<form action="<?php echo base_url().'users/updateStrength/'.$data[0]['rpi_strength_id']; ?>" method="post">
	
<input type="text" name="strength_name" value="<?php echo $data[0]['rpi_strength_name']; ?>" />


<input  type="submit" name="submit" value="submit">
</form>