<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function login_validation($username, $password)
	{
		$this->db->where('user_accountUsername', $username);
		$this->db->where('user_accountPassword', $password);
		$query = $this->db->get('user_account');
		return $query;
	}
}