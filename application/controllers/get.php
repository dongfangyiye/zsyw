<?php 
/* 
# Version: 1.1
# Filename: get.php 
# Author: 东方一叶
*/
	class Get extends CI_Controller{
		function Get(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin');  //判断是否已经登录 session
		}
			function index(){
					$this->load->view('get_view');
				}
		}
?>
