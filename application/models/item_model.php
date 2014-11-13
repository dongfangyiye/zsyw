<?php
	class Item_model extends CI_Model{
    function Item_model(){  
        parent::__construct(); 
        $this->load->database(); 
    }
    function get_itemid($hostid,$key_item){
     $this->db->select('itemid');
     $this->db->from('items'); 
     $this->db->where('hostid', $hostid);
     $this->db->where('key_', $key_item);
     $data_itemid = $this->db->get();
     if($data_itemid->num_rows > 0){  
     return $data_itemid;  
     } 
    } 
     function get_iteminfo($item_id,$time_,$history_){
     $this->db->select('clock,value');
     $this->db->from($history_); 
     $this->db->where('itemid', $item_id);
     $this->db->where('clock >', $time_);
     $data_iteminfo = $this->db->get();
     if($data_iteminfo->num_rows > 0){  
     return $data_iteminfo;  
     }
     }
}
?>