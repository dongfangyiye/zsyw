<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Ping_run extends CI_Controller{
		function Ping_run(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
			   $history="";
               $runip = $_POST['ip'];
               if (!$runip) redirect('ping'); 
               $runcommand = "ping";
               $this->load->model('history_model');
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $output ="";
               exec("/bin/ping -c4 $sipp" , $output, $status);
               $output = end($output);
               $output_ping = explode(" ",$output);
               $ping_len = count($output_ping);
               $ping_id = $ping_len-2 ;
               $output = $output_ping[$ping_id];
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
