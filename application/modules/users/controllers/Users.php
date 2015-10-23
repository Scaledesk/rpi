<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 ** 
 * User: Nitesh
 * Date: 20/10/15
 * Time: 11:05 PM
 */

class Users extends MX_Controller{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_users');
       
    }


public function index(){

	$this->load->view('index');
}

}