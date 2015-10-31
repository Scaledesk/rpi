<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 

?>
<?php if($this->session->flashdata('msg')){ ?>
  <?php  echo ' <div class="alert alert-success " role="alert">'.$this->session->flashdata('msg').'</div>'; }?>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
       <!-- ...................................... -->
  <h2>Contact Add</h2>
 <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="<?php echo base_url().'users/research'; ?>" method="post">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="contact_person" class="control-label">Contact Person</label>
                    <!-- <textarea class="form-control" id="firstName" name="research_name"></textarea> -->
                    <input class="form-control"type="text" name="contact_person" />
                    <label for="contact_number" class="control-label">Mob. Number</label>
                    <input class="form-control"type="text" name="contact_number" />
                    <label for="contact_email" class="control-label">Email</label>
                    <input class="form-control" type="text" name="contact_email"  />
                    <label for="contact_address" class="control-label">Address</label>
                    <input class="form-control" type="text" name="contact_address" />
                    <label for="contact_state" class="control-label">State</label>
                    <input class="form-control" type="text" name="contact_state"  />
                   <input  type="submit" name="submit" class="btn btn-primary"value="submit">                 
                  </div>
                  </div>
                  </form>
                  </div>
                  </div>



<form action="<?php echo base_url().'users/contact'; ?>" method="post">
	


    
<input  type="submit" name="submit" value="submit">
</form>


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