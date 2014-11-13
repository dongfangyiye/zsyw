	<?php
/* 
# Version: 1.1
# Filename: admin_model.php 
# Author: ¶«·½Ò»Ò¶
*/
	class Admin_model extends CI_Model{
	
		function verify_users($username, $password){
			$q = $this->db
				->where('alias', $username)
				->where('passwd', md5($password))
				->limit(1)->get('users');
				
			if($q->num_rows > 0){
				return $q->row();
			}
			return false;
		}
	}

