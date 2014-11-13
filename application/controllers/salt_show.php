<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Salt_show extends CI_Controller{
		function Salt_show(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
               $runip = $_POST['item'];
               if (!$runip) redirect('salt'); 
               $this->load->model('history_model');
               
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $hostid= $iq[2];
               $key_item=$iq[3];
               $runcommand=$key_item;
               
               if ($key_item == "reboot"){
               $key_item_ = "reboot";
               }
               if ($key_item == "date"){
               $key_item_ = "date";
               }
               if ($key_item == "hostname"){
               $key_item_ = "hostname";
               }
               if ($key_item == "restart_ssh"){
               $key_item_ = "/etc/init.d/sshd restart";
               }
               if ($key_item == "restart_salt_master"){
               $key_item_ = "/etc/init.d/salt-master restart";
               }
               
               if ($key_item !== "restart_salt_master"){
               exec("/usr/bin/salt \"$name\" cmd.run \"$key_item_\"" , $output, $status);
               }
               
               if ($key_item == "restart_salt_master"){
               exec("/etc/init.d/salt-master restart" , $output, $status);
               }
               
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
