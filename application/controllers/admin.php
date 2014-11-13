	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
# Version: 1.1
# Filename: admin.php 
# Author: 东方一叶
*/
	class Admin extends CI_Controller {
		
		function __construct(){
			parent::__construct();
		}
	    public function index()
	{
		$this->load->view('admin_view');
	}
}
