<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 

?>
<h2>Capabilities Add</h2>
<form action="<?php echo base_url().'users/capabilities'; ?>" method="post">
	
<input type="text" name="capabilities_name" />


<input  type="submit" name="submit" value="submit">
</form>