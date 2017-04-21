<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('cookie');
	}
}