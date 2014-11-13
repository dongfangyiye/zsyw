<?php
	class Ipmi_tools_model extends CI_Model{
    function Ipmi_tools_model(){  
        parent::__construct(); 
        $this->load->database(); 
    }
    function get_host($ggroupid){
     $this->db->select('*');
     $this->db->from('interface'); 
     $this->db->join('hosts', 'hosts.hostid = interface.hostid'); 
     $this->db->join('hosts_groups', 'hosts.hostid = hosts_groups.hostid'); 
     $this->db->where('port', '623');
     $this->db->where($ggroupid);
     $this->db->group_by("hosts.host");
     $data_host = $this->db->get();
     if($data_host->num_rows > 0){  
     return $data_host;  
     } 
    } 
     function get_command(){
     $this->db->select('cm_name,cm_command');
     $this->db->from('cm_command'); 
     $data_command = $this->db->get();
     if($data_command->num_rows > 0){  
     return $data_command;  
     }
     }
     function get_user($guser){
     $data_user=$this->db->query("select hosts_groups.groupid as groupid,groups.name as name from hosts_groups 
     join rights on hosts_groups.groupid=rights.id 
     join users_groups on users_groups.usrgrpid=rights.groupid 
     join users on users_groups.userid=users.userid 
     join groups on hosts_groups.groupid=groups.groupid
     where users.alias='$guser' group by hosts_groups.groupid");
     if($data_user->num_rows > 0){  
     return $data_user;  
     }
     }
}
?>