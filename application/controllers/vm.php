<?php 
/* 
# Version: 1.1
# Filename: get.php 
# Author: 东方一叶
*/
	class Vm extends CI_Controller{
		function Vm(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin');  //判断是否已经登录 session
		}
			function index(){
				    $data_host['session_name']=$this->session->userdata('username');
				    $guser=$this->session->userdata('username');
					$this->load->model('vm_model');
					$data_host['ggroupid']=$this->vm_model->get_user($guser);
				    $ggid=$data_host['ggroupid'];
				    $ggroupid ="(";
				    if(count($ggid) > 0){  
				    foreach($ggid->result() as $row)
				   {
				    	$groupid =  $row->groupid;
				    	$ggroupid = $ggroupid."groupid=".$groupid." or " ;
				    }
				    }

				    $ggroupid=$ggroupid."groupid=1000".")"; //1000为构造数据查询无意义
					$data_host['query']=$this->vm_model->get_host($ggroupid);
					$this->load->view('vm_view',$data_host);
				}
		}
?>
