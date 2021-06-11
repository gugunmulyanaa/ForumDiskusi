<?php
Class model_frontend extends CI_Model
{
	function __constuct()
	{
		parent::__constuct();  // Call the Model constructor 
		loader::database();    // Connect to current database setting.
	}
	function data_about(){
		$this->db->select('*');
		$this->db->from('tb_front_about');
		return $this->db->get();
	}

}