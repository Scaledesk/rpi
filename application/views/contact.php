<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 

?>
<h2>Contact Add</h2>
<form action="<?php echo base_url().'users/contact'; ?>" method="post">
	
<input type="text" name="contact_person" placeholder="Contact Person"/>
<input type="text" name="contact_number" placeholder="Mob. Number"/>
<input type="text" name="contact_email"  placeholder="Email"/>
<input type="text" name="contact_address"placeholder="Address" />
<input type="text" name="contact_state"  placeholder="State"/>

    
<input  type="submit" name="submit" value="submit">
</form>