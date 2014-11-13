<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Vm_show extends CI_Controller{
		function Vm_show(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
               $runip = $_POST['item'];
               if (!$runip) redirect('vm'); 
               $this->load->model('history_model');
               
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $hostid= $iq[2];
               $key_item=$iq[3];
               
               
               if ($key_item == "getstate"){
               $key_item_ = "power.getstate";
               }
               if ($key_item == "on"){
               $key_item_ = "power.on";
               }
               if ($key_item == "off"){
               $key_item_ = "power.off";
               }
               if ($key_item == "reset"){
               $key_item_ = "power.reset";
               }

               $runcommand=$key_item_ ;

               exec("ssh $sipp vim-cmd vmsvc/$key_item_ $hostid" , $output, $status);

               
               $output = end($output);
               $output_gb=$output;
               
               $encode = mb_detect_encoding($output, array("ASCII","UTF-8","GB2312","GBK","BIG5"));
               if ($encode == "EUC-CN"){
               $output = mb_convert_encoding($output, "UTF-8", "GB2312");
               }
               
               if ($encode == "UTF-8"){
               $output_gb = mb_convert_encoding($output, "GB2312", "UTF-8");
               }
               $this->history_model->addHistory($name,$sipp,$runcommand,$output,$status);
               $history[]=$name."::".$sipp."::".$output_gb."::".$status."::".$runcommand ;
               $arr["history"]=$history;
			   $this->load->view('history_view',$arr);
			}
		}
?>
