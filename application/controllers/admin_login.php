	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
# Version: 1.1
# Filename: admin_login.php 
# Author: 东方一叶
*/	
	class Admin_login extends CI_Controller {
		
		function Admin_login(){
			parent::__construct();
		}
	    public function index()
	{		
		$temp['info']=""; //info变量为登陆错误显示的信息
		$this->load->view('admin_view',$temp);
	}
		public function check_login(){
			
			if ($this->session->userdata('username')) {
	         	redirect('get');
	      	}
			
			$this->load->library('form_validation'); // 使用CI的表单验证, 如下:
			$this->form_validation->set_rules('username', 'Username', 'min_length[3]|required');
			$this->form_validation->set_rules('password', 'Password', 'min_length[4]|required');
			
			if($this->form_validation->run() !== false){
				// then validate password. Get from the Db.
				$this->load->model('admin_model');
				$res = $this->admin_model->verify_users(
												$this->input->post('username'),
												$this->input->post('password')
											);
				if($res !== false){
				print_r($res);
					$this->session->set_userdata('username', $this->input->post('username'));
					redirect('get'); 
				    }
		    }
		    $temp['info']="Login name or password is incorrect."; //info变量为登陆错误显示的信息
			$this->load->view('admin_login_view',$temp);

		}
		public function logout(){
			$this->session->sess_destroy();
			$this->load->view('admin_out_view'); 
		}

}
