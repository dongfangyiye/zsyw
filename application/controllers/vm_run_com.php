<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Vm_run_com extends CI_Controller{
		function Vm_run_com(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
               $runip = $_POST['item'];
               if (!$runip) redirect('vm'); 
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $vmid = $iq[2];
               
			   $vm["ip"]=$sipp;
               $vm["name"]=$name;
               $vm["vmid"]=$vmid;
			   $this->load->view('vm_run_com_view',$vm);
			}
		}
?>
