<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>
<h2>Contact Us Page</h2> 

<form action="<?php echo base_url().'users/contactUs'; ?>" method="post">


<input type="email" name="email" placeholder="Email"/></br>
<input type="text" name="name" placeholder="Name"/></br>
<input type="text" name="mobile"  placeholder="Mobile No"/></br>

<textarea name="massage">Massage</textarea></br>

<input  type="submit" name="submit" value="Submit">
</form> 