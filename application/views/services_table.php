<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */ 
//print_r($data);
?>

<?php if($this->session->flashdata('msg')){ ?>
  <?php  echo ' <div style="text-align: center;" class="alert alert-success " role="alert">'.$this->session->flashdata('msg').'</div>'; }?>

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
       <!-- ...................................... -->




              <div class="table-responsive">
                <h4 class="margin-bottom-15">Services  Table </h4>
                <a href="<?php echo base_url().'users/services';?>">Add Services</a>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                     
                      <th>Services Name</th>
                      
                      <th>Edit</th>
                      
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $row) {

 ?>
                    <tr>
                      
                      <td><?php echo $row['rpi_services_name']; ?></td>
                      
                      <td><a href="<?php echo base_url().'users/servicesUpdateShow/'.$row['rpi_services_id']; ?>" class="btn btn-default">Edit</a></td>                    
                      
                      <td><a href="<?php echo base_url().'users/deleteServices/'.$row['rpi_services_id']; ?>" class="btn btn-link">Delete</a></td>
                    </tr>
                   <?php } ?>
                   
                    
                                  
                  </tbody>
                </table>
              </div>
<!-- 
 <a href="<?php echo base_url().'users/contactUpdateShow';?>">Contact Update</a>
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
 -->

      
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