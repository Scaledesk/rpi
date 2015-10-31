<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 

?>
<?php if($this->session->flashdata('msg')){

   echo '<div style="color:green;font-size:18px; height:50px;width:500px; margin:0px auto;">'.$this->session->flashdata('msg').'</div>';
  } ?>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
       <!-- ...................................... -->



      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
       <!-- ...................................... -->


<h2>Capabilities Add</h2>
<form action="<?php echo base_url().'users/capabilities'; ?>" method="post">
	
<input type="text" name="capabilities_name" />


<input  type="submit" name="submit" value="submit">
</form>



       
<!-- ........................................................ -->

        </div>
      </div> -
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>