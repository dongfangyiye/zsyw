<?php 
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Item_show extends CI_Controller{
		function Item_show(){
			session_start(); 
			parent::__construct();
			if(!$this->session->userdata('username')) redirect('admin'); 
		}
			function index(){
               $runip = $_POST['item'];
               if (!$runip) redirect('item'); 
               
               $iq = explode("::",$runip);
               $sipp = $iq[0];
               $name = $iq[1];
               $hostid= $iq[2];
               $key_item=$iq[3];
               $history_=$iq[4];
               $time_=time()-3600;
               
               if ($key_item == "cpu_idle"){
               $key_item_ = "system.cpu.util[,idle]";
               }
               if ($key_item == "net_eth0_in"){
               $key_item_ = "net.if.in[eth0]";
               }
               if ($key_item == "net_eth0_out"){
               $key_item_ = "net.if.out[eth0]";
               }
               if ($key_item == "cpu_load_avg1"){
               $key_item_ = "system.cpu.load[percpu,avg1]";
               }
               if ($key_item == "free_inode_root"){
               $key_item_ = "vfs.fs.inode[/,pfree]";
               }
               if ($key_item == "free_size_root"){
               $key_item_ = "vfs.fs.size[/,pfree]";
               }
               
			   $this->load->model('item_model');
			   $item_id=$this->item_model->get_itemid($hostid,$key_item_);
			   foreach ($item_id->result() as $row)
               {
               $itemid =  $row->itemid;
               }
			   $this->load->model('item_model');
               $data_iteminfo['query']=$this->item_model->get_iteminfo($itemid,$time_,$history_);
               
              $data_iteminfo['name']=$name;
              $data_iteminfo['sip']=$sipp;
              $data_iteminfo['key_item']=$key_item;
              
			  $this->load->view('item_show_view',$data_iteminfo);
			}
		}
?>
