<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Ipmi_tools_run extends CI_Controller{
		function Ipmi_tools_run(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
               $runip = $_POST['ip'];
               if (!$runip) redirect('ipmi_tools'); 
               
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $hostid= $iq[2];
               $encode = mb_detect_encoding($name, array("ASCII","UTF-8","GB2312","GBK","BIG5"));
               if ($encode == "UTF-8"){
               $name = mb_convert_encoding($name, "GB2312", "UTF-8");
               }
               $data_ipmi['name']=$name;
               $data_ipmi['ip']=$sipp;
			   $data_ipmi['hostid']=$hostid;
			   $this->load->view('ipmi_tools_run_view',$data_ipmi);
			}
		}
?>
