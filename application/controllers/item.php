<?php 
/* 
# Version: 1.1
# Filename: get.php 
# Author: 东方一叶
*/
	class Item extends CI_Controller{
		function Item(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin');  //判断是否已经登录 session
		}
			function index(){
				    $data_host['session_name']=$this->session->userdata('username');
				    $guser=$this->session->userdata('username');
					$this->load->model('get_model');
					$data_host['ggroupid']=$this->get_model->get_user($guser);
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
					$data_host['query']=$this->get_model->get_host($ggroupid);
					$this->load->view('item_view',$data_host);
				}
		}
?>
