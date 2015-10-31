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

<script src="//code.jquery.com/jquery-1.9.1.min.js"></script> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet"> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script> 
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

<h2>Research Add</h2>
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="<?php echo base_url().'users/research'; ?>" method="post">
                <div class="row">
                  <div class="col-md-12 margin-bottom-15">
                    <label for="firstName" class="control-label">Research Name</label>
                    <textarea class="form-control"  id="summernote" name="research_name"></textarea>
                    
                    <input  type="submit" name="submit" class="btn btn-primary"value="submit">  

                    
             
                  </div>
                  </div>
                  </form>
                  </div>
                  </div>



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

<script type="text/javascript">
  $(document).ready(function() {
  $('#summernote').summernote();
});

</script>

<link href="<?php echo base_url(); ?>/assets/summernote/dist/summernote.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/assets/summernote/dist/summernote.min.js"></script>

