<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */

class Mdl_users extends CI_Model
{


public function getAbout(){

  $data=$this->db->get('rpi_about');
  return $data->result_array();
}

		public function insert($data){
      

      
             $data = [
            'rpi_about_1' => $data['about']
           /* 'rpi_about_2' =>$data['about_1'],
            'rpi_about_3' => $data['about_2'],
            'rpi_about_4' => $data['about_3'],

            'rpi_about_5' => $data['about_4'],
            'rpi_about_6' =>$data['about_5']*/

        ];
         
      if($this->db->update('rpi_about',$data)){

      	return true;
		 }
       else{

		 return flase;
		}
      }



  public function insertServices($data){


             $data = [
            'rpi_services_name' => $data['services_name']

        ];
         
      if($this->db->insert('rpi_services',$data)){

      	return true;
		 }
       else{

		 return flase;
		}

  }



  public function servicesUpdateShow($id){

  	$data=$this->db->where('rpi_services_id',$id)->get('rpi_services')->result_array();

  	return $data;
  }


public function getServices(){
  $data=$this->db->get('rpi_services')->result_array();
  return $data;
}

public function updateServices($id,$data){


 $data = [
            'rpi_services_name' => $data['service_name']

        ];
        if($this->db->where('rpi_services_id',$id)->update('rpi_services',$data)){
        	return true;
        }
        else{
        	return flase;
        }
}


public function deleteServices($id){

if($this->db->where('rpi_services_id',$id)->delete('rpi_services')){
        	return true;
        }
        else{
        	return flase;
        }

}




  public function insertResearch($data){


             $data = [
            'rpi_research_name' => $data['research_name']

        ];
         
      if($this->db->insert('rpi_research',$data)){

      	return true;
		 }
       else{

		 return flase;
		}

  }

public function getResearch(){

  $data=$this->db->get('rpi_research')->result_array();
  return $data;
}

  public function researchUpdateShow($id){

  	$data=$this->db->where('rpi_research_id',$id)->get('rpi_research')->result_array();

  	return $data;
  }


public function updateResearch($id,$data){


 $data = [
            'rpi_research_name' => $data['research_name']

        ];
        if($this->db->where('rpi_research_id',$id)->update('rpi_research',$data)){
        	return true;
        }
        else{
        	return flase;
        }
}




public function deleteResearch($id){

if($this->db->where('rpi_research_id',$id)->delete('rpi_research')){
        	return true;
        }
        else{
        	return flase;
        }

}
/*.............................................*/


  public function insertResearchTool($data){


             $data = [
            'rpi_research_tool_name' => $data['research_tool_name']

        ];
         
      if($this->db->insert('rpi_research_tool',$data)){

        return true;
     }
       else{

     return flase;
    }

  }

public function getResearchTool(){

  $data=$this->db->get('rpi_research_tool')->result_array();
  return $data;
}

  public function researchUpdateShowTool($id){

    $data=$this->db->where('rpi_research_tool_id',$id)->get('rpi_research_tool')->result_array();

    return $data;
  }


public function updateResearchTool($id,$data){

/*print_r($data['research_tool_name']);
die();*/
 $data = [
            'rpi_research_tool_name' => $data['research_tool_name']

        ];
        if($this->db->where('rpi_research_tool_id',$id)->update('rpi_research_tool',$data)){
          return true;
        }
        else{
          return flase;
        }
}




public function deleteResearchTool($id){

if($this->db->where('rpi_research_tool_id',$id)->delete('rpi_research_tool')){
          return true;
        }
        else{
          return flase;
        }

}
// ..................................................................



  public function insertCapabilities($data){


             $data = [
            'rpi_capabilities_name' => $data['capabilities_name']

        ];
         
      if($this->db->insert('rpi_capabilities',$data)){

      	return true;
		 }
       else{

		 return flase;
		}

  }



  public function capabilitiesUpdateShow($id){

  	$data=$this->db->where('rpi_capabilities_id',$id)->get('rpi_capabilities')->result_array();

  	return $data;
  }


public function updateCapabilities($id,$data){


 $data = [
            'rpi_capabilities_name' => $data['capabilities_name']

        ];
        if($this->db->where('rpi_capabilities_id',$id)->update('rpi_capabilities',$data)){
        	return true;
        }
        else{
        	return flase;
        }
}




public function deleteCapabilities($id){

if($this->db->where('rpi_capabilities_id',$id)->delete('rpi_capabilities')){
        	return true;
        }
        else{
        	return flase;
        }

}
// ..................................................................



  public function insertStrength($data){


             $data = [
            'rpi_strength_name' => $data['strength_name']

        ];
         
      if($this->db->insert('rpi_strength',$data)){

      	return true;
		 }
       else{

		 return flase;
		}

  }



  public function strengthUpdateShow(){

  	$data=$this->db->get('rpi_strength')->result_array();

  	return $data;
  }


public function updateStrength($id,$data){


 $data = [
            'rpi_strength_name' => $data['strength_name']

        ];
        if($this->db->where('rpi_strength_id',$id)->update('rpi_strength',$data)){
        	return true;
        }
        else{
        	return flase;
        }
}




public function deleteStrength($id){

if($this->db->where('rpi_strength_id',$id)->delete('rpi_strength')){
        	return true;
        }
        else{
        	return flase;
        }

}
// .....................................................................................
// rpi_contact_id`, ``, 
// `rpi_contact_number`, `rpi_contact_email`, `rpi_contact_address`, `rpi_contact_state`

  public function insertContact($data){


             $data = [
            'rpi_contact_person' => $data['contact_person'], 
            'rpi_contact_number' => $data['contact_number'],
            'rpi_contact_email' => $data['contact_email'],
            'rpi_contact_address' => $data['contact_address'],
            'rpi_contact_state' => $data['contact_state']

        ];
         
      if($this->db->insert('rpi_contact',$data)){

      	return true;
		 }
       else{

		 return flase;
		}

  }



  public function contactUpdateShow(){

  	$data=$this->db->get('rpi_contact')->result_array();

  	return $data;
  }


public function updateContact($id,$data){
  /*echo $data['contact_number'];
  die();*/

 $data = [
            'rpi_contact_person' => $data['contact_person'],
            'rpi_contact_number' => $data['contact_number'],
            'rpi_contact_email' => $data['contact_email'],
            'rpi_contact_address' => $data['contact_address'],
            'rpi_contact_state' => $data['contact_state']

        ];
        if($this->db->where('rpi_contact_id',$id)->update('rpi_contact',$data)){
        	return true;
        }
        else{
        	return flase;
        }
}




public function deleteContact($id){

if($this->db->where('rpi_contact_id',$id)->delete('rpi_contact')){
        	return true;
        }
        else{
        	return flase;
        }

}


public function insertContactUs($data){
     
             $data = [
            'rpi_contact_us_email' => $data['email'], 
            'rpi_contact_us_name' => $data['name'],
            'rpi_contact_us_mobile' => $data['mobile'],
            'rpi_contact_us_message' => $data['message']
            

        ];
         
      if($this->db->insert('rpi_contact_us',$data)){

        return true;
     }
       else{

     return flase;
    }
}



  public function contactUsShow(){

    $data=$this->db->get('rpi_contact_us')->result_array();

    return $data;
  }


  public function getStrength(){
    $data=$this->db->get('rpi_strength')->result_array();

    return $data;
  }
}
