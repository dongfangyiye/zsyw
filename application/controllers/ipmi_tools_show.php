<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Ipmi_tools_show extends CI_Controller{
		function Ipmi_tools_show(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
               $runip = $_POST['item'];
               if (!$runip) redirect('ipmi_tools'); 
               $this->load->model('history_model');
               
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $hostid= $iq[2];
               $key_item=$iq[3];
               $runcommand=$key_item;
               
               if ($key_item == "ipmi_power_reboot"){
               $key_item_ = "power reset";
               }
               if ($key_item == "ipmi_cold_reset"){
               $key_item_ = "mc reset cold";
               }
               if ($key_item == "ipmi_power_status"){
               $key_item_ = "power status";
               }
               if ($key_item == "restart_cause"){
               $key_item_ = "chassis restart_cause";
               }
               
               $output ="";
               exec("/usr/bin/ipmitool -I lan -U admin -P ys890iopidc $key_item_  -H $sipp" , $output, $status);
               $output = end($output);

               $encode = mb_detect_encoding($output, array("ASCII","UTF-8","GB2312","GBK","BIG5"));
               if ($encode == "EUC-CN"){
               $output = mb_convert_encoding($output, "UTF-8", "GB2312");
               }
               $this->history_model->addHistory($name,$sipp,$runcommand,$output,$status);
               $history[]=$name."::".$sipp."::".$output."::".$status."::".$runcommand ;
               $arr["history"]=$history;
			   $this->load->view('history_view',$arr);
			}
		}
?>
