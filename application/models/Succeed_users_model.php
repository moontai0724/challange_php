<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Succeed_users_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function __destruct()
	{
	}

	public function log($name, $pwnedPassword)
	{
		$response = array("name" => $name, "pwnedPassword" => $pwnedPassword);
		$this->db->insert("succeed_users", $response);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function list()
	{
		$sql = "SELECT * FROM `succeed_users`";
		$queryResult = $this->db->query($sql);

		if ($queryResult->num_rows() > 0) {
			return $queryResult->result_array();
		} else {
			return array();
		}
	}
}
