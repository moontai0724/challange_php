<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function __destruct()
	{
	}

	public function login($account, $password)
	{
		$sql = "SELECT * FROM `user` WHERE `account` = '$account' AND `password` = '$password'";
		$queryResult = $this->db->query($sql);

		if ($queryResult->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
		return false;
	}

	public function getProfileImage($account, $password)
	{
		$sql = "SELECT * FROM `user` WHERE `account` = '$account' AND `password` = '$password'";
		$queryResult = $this->db->query($sql);

		if ($queryResult->num_rows() > 0) {
			return $queryResult->result_array()[0];
		} else {
			return false;
		}
	}

	public function checkPassword($password)
	{
		$sql = "SELECT * FROM `user` WHERE `account` = 'admin' AND `password` = ?";
		$queryResult = $this->db->query($sql, $password);

		if ($queryResult->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
