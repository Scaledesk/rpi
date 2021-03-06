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


public function admin(){
    
if($this->session->userdata("admin")){
		if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){

			if($this->_insertAbout($this->input->post())){
				
				$this->session->set_flashdata('msg', 'About Us Page Updated Successfully');
		      	redirect(base_url().'users/admin');
			}
			else{

				
				$this->session->set_flashdata('msg', ' About Us Page Not Updated. Please try again.');
		   	redirect(base_url().'users/admin');
			}
		}

		else{
			$data['data']=$this->Mdl_users->getAbout();
			$this->load->view('header');
			$this->load->view('index',$data);
			//$this->load->view('demo');
			$this->load->view('footer');
		}
  }

else{
	redirect('users/login');
}
}


public function login(){

	if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
	   $data=$this->input->post();
   
/*
       echo  $data['password'];
       die();*/
		   if($data['password']=='password'){

		   	$this->session->set_userdata('admin','admin');
		   	redirect('users/admin');

		   }
		   else{
		   	 $this->session->set_flashdata('msg', "The username and password you entered don't match.");
		   	redirect(base_url().'users/login');
		   }



   }
   else{
            
			$this->load->view('login');
			
   }

}

public function logout(){

        $this->session->sess_destroy();
        redirect('users/login');
   
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
	if($this->session->userdata("admin")){
	$data['data']=$this->Mdl_users->getServices();
	$this->load->view('header');
	 $this->load->view('services_table',$data);
	 $this->load->view('footer');
	}
	else{
		redirect('users/login');
	}
}


public function services(){
	if($this->session->userdata("admin")){
	if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		     $data=$this->input->post();
				if($this->Mdl_users->insertServices($data)){
			       echo "Services Page Updated Successfully "; 
			       redirect('users/services');
				}
			   else{
			   
			   	$this->session->set_flashdata('msg', 'Services Page Not Updated. Please try again.');
 	            redirect('users/servicesView');
			   }

			}
			else{
				$this->load->view('header');
                 $this->load->view('services');
                 $this->load->view('footer');
			}
			}
	else{
		redirect('users/login');
	}

 }


public function servicesUpdateShow($id){

if($this->session->userdata("admin")){
 $data['data']=$this->Mdl_users->servicesUpdateShow($id);
 $this->load->view('header');
  $this->load->view('servicesupdate',$data);
  $this->load->view('footer');

  }
	else{
		redirect('users/login');
	}
}
public function updateServies($id){
if($this->session->userdata("admin")){

$data=$this->input->post();
if($this->Mdl_users->updateServices($id,$data)){

			       	$this->session->set_flashdata('msg', ' Services Page Updated Successfull ');
 	            redirect('users/servicesView');
				}
			   else{
			   		$this->session->set_flashdata('msg', 'Services Page Not Updated. Please try again');
 	            redirect('users/servicesView');
			   
			   }
			   }
	else{
		redirect('users/login');
	}
}

public function deleteServices($id){
if($this->session->userdata("admin")){

if($this->Mdl_users->deleteServices($id)){
			       
			       $this->session->set_flashdata('msg', 'Service Deleted Successfully. ');
 	            redirect('users/servicesView');
				}
			   else{
			   	
			   	 $this->session->set_flashdata('msg', 'Service Not Deleted. Please try again');
 	            redirect('users/servicesView');
			   }
			}
			   else{
		redirect('users/login');
	}
}




public function research(){

if($this->session->userdata("admin")){
		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertResearch($data)){
					       
					        $this->session->set_flashdata('msg', 'Research inserted Successfully.');
 	                        redirect('users/getResearch');
						}
					   else{
					   
					   	 $this->session->set_flashdata('msg', 'Research  Not inserted . Please try again');
 	                    redirect('users/getResearch');
					   }
		}
		else{
           $this->load->view('header');
              $this->load->view('research');
              $this->load->view('footer');

		}
      }
		else{
		redirect('users/login');
	}
    }
public function getResearch(){
	if($this->session->userdata("admin")){
	
	$data['data']=$this->Mdl_users->getResearch();
	$this->load->view('header');
  $this->load->view('research_table',$data);
  $this->load->view('footer');

   }
		else{
		redirect('users/login');
	}
 
}


public function researchUpdateShow($id){

if($this->session->userdata("admin")){
 $data['data']=$this->Mdl_users->researchUpdateShow($id);
 $this->load->view('header');
  $this->load->view('researchupdate',$data);
  $this->load->view('footer');
   }
		else{
		redirect('users/login');
	}
}


public function updateResearch($id){
	if($this->session->userdata("admin")){

$data=$this->input->post();
if($this->Mdl_users->updateResearch($id,$data)){
			       
			        $this->session->set_flashdata('msg', 'Research updated Successfully.');
 	                    redirect('users/getResearch');
				}
			   else{
			   

			        	 $this->session->set_flashdata('msg', 'Research  Not updated. Please Try Again');
 	                    redirect('users/getResearch');
			   }

			    }
		else{
		redirect('users/login');
	}
}



public function deleteResearch($id){

if($this->session->userdata("admin")){

if($this->Mdl_users->deleteResearch($id)){
			       
			        $this->session->set_flashdata('msg', 'Research Delete Successfully.');
 	                    redirect('users/getResearch');
				}
			   else{
			  
			   	 $this->session->set_flashdata('msg', 'Research Not Delete . Please try again');
 	                    redirect('users/getResearch');
			   }

			    }
		else{
		redirect('users/login');
	}
}
/*..................................*/


public function researchTool(){

if($this->session->userdata("admin")){
		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertResearchTool($data)){
					       
					        $this->session->set_flashdata('msg', 'Research Tool Inserted Successfully.');
 	                    redirect('users/getResearchTool');
						}
					   else{
					   
					   	 $this->session->set_flashdata('msg', 'Research Tool Not Inserted. Please try again');
 	                    redirect('users/getResearchTool');
					   }
		}
		else{
           $this->load->view('header');
              $this->load->view('research_tool');
              $this->load->view('footer');

		}
		  }
		else{
		redirect('users/login');
	}
    }
public function getResearchTool(){
	if($this->session->userdata("admin")){
	$data['data']=$this->Mdl_users->getResearchTool();
	$this->load->view('header');
  $this->load->view('research_tool_table',$data);
  $this->load->view('footer');
  }
		else{
		redirect('users/login');
	}
}


public function researchUpdateShowTool($id){
if($this->session->userdata("admin")){
 $data['data']=$this->Mdl_users->researchUpdateShowTool($id);
 $this->load->view('header');
  $this->load->view('research_tool_update',$data);
  $this->load->view('footer');
   }
		else{
		redirect('users/login');
	}
}


public function updateResearchTool($id){
if($this->session->userdata("admin")){
$data=$this->input->post();
if($this->Mdl_users->updateResearchTool($id,$data)){
			      
			        $this->session->set_flashdata('msg', 'Research Tool Updated Successfully.');
 	                    redirect('users/getResearchTool');
				}
			   else{
			   
			   	 $this->session->set_flashdata('msg', 'Research Tool Not Inserted . Please try again');
 	                    redirect('users/getResearchTool');
			   }

			   }
		else{
		redirect('users/login');
	}
}



public function deleteResearchTool($id){

if($this->session->userdata("admin")){
if($this->Mdl_users->deleteResearchTool($id)){
			       
			       $this->session->set_flashdata('msg', 'Research Tool Deleted Successfully. ');
 	                    redirect('users/getResearchTool');
				}
			   else{

			       $this->session->set_flashdata('msg', 'Research Tool Not Deleted . Please Try Again');
 	                    redirect('users/getResearchTool');
			   	
			   }
			      }
		else{
		redirect('users/login');
	}
}



public function capabilities(){
	if($this->session->userdata("admin")){

		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertCapabilities($data)){
					     
                         $this->session->set_flashdata('msg', 'Capabilities Inserted Successfully.');
 	                    redirect('users/capabilities');
						}
					   else{
					   	
					   	$this->session->set_flashdata('msg', 'Capabilities Not Inserted. Please try again');
 	                    redirect('users/capabilities');
					   }
		}
		else{
              $this->load->view('header');
              $this->load->view('capabilities');
              $this->load->view('footer');

		}
		  }
		else{
		redirect('users/login');
	}
    }



public function capabilitiesUpdateShow($id){
	if($this->session->userdata("admin")){

 $data['data']=$this->Mdl_users->capabilitiesUpdateShow($id);
 $this->load->view('header');
  $this->load->view('capabilitiesupdate',$data);
  $this->load->view('footer');
  }
		else{
		redirect('users/login');
	}
}


public function updateCapabilities($id){

if($this->session->userdata("admin")){
$data=$this->input->post();
if($this->Mdl_users->updateCapabilities($id,$data)){
			     
			       	$this->session->set_flashdata('msg', 'Capabilities Updated Successfully. ');
 	                    redirect('users/capabilities');
				}
			   else{
			   	$this->session->set_flashdata('msg', 'Capabilities Not Updated . Please Try Again');
 	                    redirect('users/capabilities');
			   	
			   }
			   }
		else{
		redirect('users/login');
	}
}



public function deleteCapabilities($id){

if($this->session->userdata("admin")){
if($this->Mdl_users->deleteCapabilities($id)){
			     
			       $this->session->set_flashdata('msg', 'Capabilities Deleted Successfully. ');
 	                    redirect('users/capabilities');
				}
			   else{
			   	
			   	$this->session->set_flashdata('msg', 'Capabilities Not Deleted Successfully. Please Try Again');
 	                    redirect('users/capabilities');
			   }
			    }
		else{
		redirect('users/login');
	}
}




public function strength(){

if($this->session->userdata("admin")){
		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertStrength($data)){
					      
					       	$this->session->set_flashdata('msg', 'Strength  Inserted Successfully. ');
 	                        redirect('users/strength');
						}
					   else{
					  
					   		$this->session->set_flashdata('msg', 'Strength Not Inserted. Please Try Again');
 	                        redirect('users/strength');
					   }
		}
		else{
            $this->load->view('header');
              $this->load->view('strength');
              $this->load->view('footer');

		}
		 }
		else{
		redirect('users/login');
	}
    }



public function strengthUpdateShow(){

if($this->session->userdata("admin")){
 $data['data']=$this->Mdl_users->strengthUpdateShow();
 $this->load->view('header');
  $this->load->view('strengthupdate',$data);
  $this->load->view('footer');
  }
		else{
		redirect('users/login');
	}
}


public function updateStrength($id){
if($this->session->userdata("admin")){
$data=$this->input->post();
if($this->Mdl_users->updateStrength($id,$data)){
			       

			       $this->session->set_flashdata('msg', 'Strength Page Updated Successfully.');
 	                        redirect('users/strength');
				}
			   else{
			   
			   	 $this->session->set_flashdata('msg', 'Strength Page Not  Updated . Please Try Again');
 	                        redirect('users/strength');
			   }

 }
		else{
		redirect('users/login');
	}			   
}



public function deleteStrength($id){

if($this->session->userdata("admin")){
if($this->Mdl_users->deleteStrength($id)){
			       
			           $this->session->set_flashdata('msg', 'Strength  Deleted Successfully. ');
 	                        redirect('users/strength');
				}
			   else{
			   	
			   	 $this->session->set_flashdata('msg', 'Strength Not  Deleted. Please Try Again');
 	                        redirect('users/strength');
			   }
			   }
		else{
		redirect('users/login');
	}
}




public function contact(){
if($this->session->userdata("admin")){
		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertContact($data)){
					      
					        $this->session->set_flashdata('msg', 'Contact   Inserted Successfully. ');
 	                        redirect('users/strength');
						}
					   else{
					   	
					   	 $this->session->set_flashdata('msg', 'Contact Not  Inserted Successfully. Please Try Again');
 	                        redirect('users/strength');
					   }
		}
		else{
             $this->load->view('header');
              $this->load->view('contact');
              $this->load->view('footer');

		}
		}
		else{
		redirect('users/login');
	}
    }



public function contactUpdateShow(){

if($this->session->userdata("admin")){
 $data['data']=$this->Mdl_users->contactUpdateShow();
 $this->load->view('header');
  $this->load->view('contactupdate',$data);
  $this->load->view('footer');
  }
		else{
		redirect('users/login');
	}
}


public function updateContact($id){

if($this->session->userdata("admin")){
$data=$this->input->post();
if($this->Mdl_users->updateContact($id,$data)){
			       
	              $this->session->set_flashdata('msg', 'Contact  Page Updated Successfully. ');
 	                        redirect('users/admin');
				}
			   else{
			   
			   	 $this->session->set_flashdata('msg', 'Contact Page  Not Updated . Please Try Again');
 	                        redirect('users/contactUpdateShow');

			   }
  }
		else{
		redirect('users/login');
	}			   
}



public function deleteContact($id){

if($this->session->userdata("admin")){
if($this->Mdl_users->deleteContact($id)){
			     
			        $this->session->set_flashdata('msg', ' Contact   Deleted Successfully.');
 	                        redirect('users/contact');
				}
			   else{
			  
			   	 $this->session->set_flashdata('msg', 'Contact   Not Deleted . Please Try Again');
 	                        redirect('users/contact');
			   }

			    }
		else{
		redirect('users/login');
	}
}






public function contactUs(){

		  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post') {
		  	
		  
			  $data=$this->input->post();
						if($this->Mdl_users->insertContactUs($data)){
					       
					       $this->session->set_flashdata('msg', 'Your message has been recorded. We will contact you shortly');
					       redirect(base_url().'users/contactUsShow');
						}
					   else{
					   	$this->session->set_flashdata('msg', 'There was an error sending your message');
					       redirect(base_url());
					   
					   }
		}
		else{
            $this->load->view('header');
              $this->load->view('contactUs');
              $this->load->view('footer');

		}
    }

public function contactUsShow(){
 $data['id']=0;
 $data['data']=$this->Mdl_users->contactUpdateShow();
 $this->load->view('header/header',$data);
  $this->load->view('contactUs',$data);
  $this->load->view('header/footer');
}




public function aboutShow(){
	 $data['id']=1;
	$data['about']=$this->Mdl_users->getAbout();
	$this->load->view('header/header',$data);
	$this->load->view('theme/about',$data);
	$this->load->view('header/footer');
}

public function servicesShow(){
$data['id']=2;
$data['services']=$this->Mdl_users->getServices();
	$this->load->view('header/header',$data);
	$this->load->view('theme/services',$data);
	$this->load->view('header/footer');

}
public function researchShow(){
	$data['id']=3;
	$data['research']=$this->Mdl_users->getResearch();
	$this->load->view('header/header',$data);
	$this->load->view('theme/research',$data);
	$this->load->view('header/footer');
}
public function researchToolShow(){
	$data['id']=4;
	$data['researchTool']=$this->Mdl_users->getResearchTool();
	$this->load->view('header/header',$data);
	$this->load->view('theme/research_tool',$data);
	$this->load->view('header/footer');
}
public function strengthShow(){
	$data['id']=5;
	$data['strength']=$this->Mdl_users->getStrength();
	$this->load->view('header/header',$data);
	$this->load->view('theme/strength',$data);
	$this->load->view('header/footer');
}
public function capabilitiesShow(){
	$data['id']=6;
	$data['strength']=$this->Mdl_users->getStrength();
	$this->load->view('header/header',$data);
	$this->load->view('theme/strength',$data);
	$this->load->view('header/footer');
}

public function home(){
	$data['id']=7;
  $data['about']=$this->Mdl_users->getAbout();
	$this->load->view('header/header',$data);
	$this->load->view('theme/index',$data);
	$this->load->view('header/footer');
}

}



