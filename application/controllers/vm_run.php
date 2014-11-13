<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Vm_run extends CI_Controller{
		function Vm_run(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
               $runip = $_POST['ip'];
               if (!$runip) redirect('vm'); 
               
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $hostid= $iq[2];


               exec("/usr/bin/ssh $sipp vim-cmd vmsvc/getallvms | awk -F \" \" '{print \$1,\$2}'" , $output, $status);

               $arr["sipp"]=$sipp;
               $arr["name"]=$name;
               $arr["output"]=$output;
			   $this->load->view('vm_run_view',$arr);
			}
		}
?>
