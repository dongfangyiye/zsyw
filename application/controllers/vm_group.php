<?php 
	class Vm_group extends CI_Controller{
		function Vm_group(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
				    $data_host['session_name']=$this->session->userdata('username');
				    $guser=$this->session->userdata('username');
					$this->load->model('vm_model');
					$data_host['ggroupid']=$this->vm_model->get_user($guser);

					$data_host['gid_now']= $_POST['gg_now'];
					if (!$data_host['gid_now']) redirect('vm');
					$g_now=$data_host['gid_now'] ;
				    $ggroupid="(";
				    $ggroupid=$ggroupid."groupid=$g_now".")";
				    $this->load->model('vm_model');
					$data_host['query']=$this->vm_model->get_host($ggroupid);
					$this->load->view('vm_group_view',$data_host);
				}
		}
?>
