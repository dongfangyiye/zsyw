<?php
class Welcome extends CI_Controller {
	
function Welcome(){ 
    session_start(); 
    parent::__construct(); 
               
    if(!$this->session->userdata('username')) redirect('admin'); 
    }

	function index(){
   redirect('get');
  }
}
?>