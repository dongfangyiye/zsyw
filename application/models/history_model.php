<?php  
class History_model extends CI_Model{  
    function History_model(){  
        parent::__construct();  
        $this->load->database(); 
    }
  function addHistory($name,$sipp,$runcommand,$output,$status){
  $now = time();
  $data = array( 
    'name' => $name ,
    'sipp' => $sipp ,
    'runcommand'  => $runcommand ,
    'output' => $output,
    'status' => $status,
    'ipaddress' => $this->input->ip_address(),
    'sname' => $this->session->userdata('username'),
    'stamp' => $now
  );

  $this->db->insert('cm_history', $data);
 }
}
?>
