<?php
//ULTRA COMMUNITY
Class backend extends CI_Model
{
	function __constuct()
	{
		parent::__constuct();  // Call the Model constructor 
		loader::database();    // Connect to current database setting.
	}
	
	
 	function cek_data($username,$password){
		$this->db->where('password',$password);
		$this->db->where('username',$username);
		return $this->db->get('tb_admin');
		
		}

	}