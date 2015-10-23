<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 ** 
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */

class Users extends CI_controller{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_users');
       
    }


public function index(){


		if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){

			if($this->_insertAbout($this->input->post())){
				echo "update  Successful";
				redirect(base_url());
			}
			else{

				echo "update not Successful";
				redirect(base_url());
			}
		}

		else{
			$data['data']=$this->Mdl_users->getabout();
			$this->load->view('index',$data);
		}
  }




public function _insertAbout($data){

	/*$this->Mdl_products->setData('insert',data['about_1'],$data['about_1'],$data['about_1'],
            $data['about_1'],$data['about_1'],$data['about_1']);*/




	if($this->Mdl_users->insert($data)){
       return true;
	}
   else{
   	return flase;
   }
}

public function servicesView(){
	$data['data']=$this->Mdl_users->getservices();
	 $this->load->view('services_table',$data);
}


public function services(){
	if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		     $data=$this->input->post();
				if($this->Mdl_users->insertServices($data)){
			       echo "Add Services Successful";
			       redirect('users/servicesView');
				}
			   else{
			   	echo "Add Services  not Successful";
			   	redirect('users/servicesView');
			   }

			}
			else{
				
                 $this->load->view('services');
			}
		   }


public function servicesUpdateShow($id){

 $data['data']=$this->Mdl_users->servicesUpdateShow($id);
  $this->load->view('servicesupdate',$data);
}
public function updateServies($id){

$data=$this->input->post();
if($this->Mdl_users->updateServices($id,$data)){
			       echo "Update Services Successful";
			       redirect('users/servicesView');
				}
			   else{
			   	echo "Update Services  not Successful";
			   	redirect('users/servicesView');
			   }
}

public function deleteServices($id){


if($this->Mdl_users->deleteServices($id)){
			       echo "Delete Services Successful";
			       redirect('users/servicesView');
				}
			   else{
			   	echo "Delete Services  not Successful";
			   	redirect('users/servicesView');
			   }
}




public function research(){

		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertResearch($data)){
					       echo "Add Research Successful";
					       redirect('users/getResearch');
						}
					   else{
					   	echo "Add Research  not Successful";
					   }
		}
		else{
      
              $this->load->view('research');

		}
    }
public function getResearch(){
	$data['data']=$this->Mdl_users->getResearch();
  $this->load->view('research_table',$data);
}


public function researchUpdateShow($id){

 $data['data']=$this->Mdl_users->researchUpdateShow($id);
  $this->load->view('researchupdate',$data);
}


public function updateResearch($id){

$data=$this->input->post();
if($this->Mdl_users->updateResearch($id,$data)){
			       echo "Update Research Successful";
			       redirect('users/getResearch');
				}
			   else{
			   	echo "Update Research  not Successful";
			   }
}



public function deleteResearch($id){


if($this->Mdl_users->deleteResearch($id)){
			       echo "Delete Research Successful";
			       redirect('users/getResearch');
				}
			   else{
			   	echo "Delete Research  not Successful";
			   }
}




public function capabilities(){

		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertCapabilities($data)){
					       echo "Add Capabilities Successful";
						}
					   else{
					   	echo "Add Capabilities  not Successful";
					   }
		}
		else{
      
              $this->load->view('capabilities');

		}
    }



public function capabilitiesUpdateShow($id){

 $data['data']=$this->Mdl_users->capabilitiesUpdateShow($id);
  $this->load->view('capabilitiesupdate',$data);
}


public function updateCapabilities($id){

$data=$this->input->post();
if($this->Mdl_users->updateCapabilities($id,$data)){
			       echo "Update Capabilities Successful";
				}
			   else{
			   	echo "Update Capabilities  not Successful";
			   }
}



public function deleteCapabilities($id){


if($this->Mdl_users->deleteCapabilities($id)){
			       echo "Delete Capabilities Successful";
				}
			   else{
			   	echo "Delete Capabilities  not Successful";
			   }
}




public function strength(){

		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertStrength($data)){
					       echo "Add Strength Successful";
						}
					   else{
					   	echo "Add Strength  not Successful";
					   }
		}
		else{
      
              $this->load->view('strength');

		}
    }



public function strengthUpdateShow($id){

 $data['data']=$this->Mdl_users->strengthUpdateShow($id);
  $this->load->view('strengthupdate',$data);
}


public function updateStrength($id){

$data=$this->input->post();
if($this->Mdl_users->updateStrength($id,$data)){
			       echo "Update Strength Successful";
				}
			   else{
			   	echo "Update Strength  not Successful";
			   }
}



public function deleteStrength($id){


if($this->Mdl_users->deleteStrength($id)){
			       echo "Delete Strength Successful";
				}
			   else{
			   	echo "Delete Strength not Successful";
			   }
}




public function contact(){

		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertContact($data)){
					       echo "Add Contact Successful";
						}
					   else{
					   	echo "Add Contact  not Successful";
					   }
		}
		else{
      
              $this->load->view('contact');

		}
    }



public function contactUpdateShow(){

 $data['data']=$this->Mdl_users->contactUpdateShow();
  $this->load->view('contactupdate',$data);
}


public function updateContact($id){

$data=$this->input->post();
if($this->Mdl_users->updateContact($id,$data)){
			       echo "Update Contact Successful";
				}
			   else{
			   	echo "Update Contact  not Successful";
			   }
}



public function deleteContact($id){


if($this->Mdl_users->deleteContact($id)){
			       echo "Delete Contact Successful";
				}
			   else{
			   	echo "Delete Contact not Successful";
			   }
}






public function contactUs(){

		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertContactUs($data)){
					       echo "Add Contact Successful";
						}
					   else{
					   	echo "Add Contact  not Successful";
					   }
		}
		else{
      
              $this->load->view('contactUs');

		}
    }

public function contactUsShow(){

 $data['data']=$this->Mdl_users->contactUsShow();
  $this->load->view('',$data);
}

}