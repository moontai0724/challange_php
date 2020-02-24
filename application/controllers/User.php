<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Succeed_users_model');
		$this->load->helper('cookie');
	}

	public function __destruct()
	{
	}

	public function index()
	{
		if ($this->session->userdata("logged_in")) {
			redirect('User/checkLogin');
		} else {
			$this->load->view('user/login');
		}
	}

	public function login()
	{
		$account = $_POST["account"];
		$password = $_POST["password"];

		if (isset($account) && isset($password) && $this->User_model->login($account, $password)) {
			$this->session->set_userdata("logged_in", true);
			redirect('User/checkLogin');
		} else {
			redirect('User/index');
		}
	}

	public function getMyImage()
	{
		$account = $_POST["account"];
		$password = $_POST["password"];

		if (isset($account) && isset($password) && $this->User_model->login($account, $password)) {
			$image = $this->User_model->get_image($account, $password);
			$this->load->view('User/showImage', $image);
		} else {
			redirect('User/index');
		}
	}

	public function checkLogin()
	{
		if ($this->session->userdata("logged_in")) {
			$this->load->view("user/logged_in");
		} else {
			redirect('User/login');
		}
	}

	public function logSuccess()
	{
		if ($this->session->userdata("logged_in")) {
			$name = $this->input->post("name");
			$password = $this->input->post("password");
			if ($name != false && $password != false && $this->User_model->checkPassword($password)) {
				if ($this->Succeed_users_model->log($name, true)) {
					$this->load->view('user/name_saved');
				} else {
					echo "處理請求失敗，請告知組長。";
				}
			} else if ($name != false && $password == false) {
				if ($this->Succeed_users_model->log($name, false)) {
					$this->load->view('user/name_saved');
				} else {
					echo "處理請求失敗，請告知組長。";
				}
			} else {
				redirect('User/login');
			}
		} else {
			redirect('User/login');
		}
	}

	public function listSucceed()
	{
		$succeed_users = $this->Succeed_users_model->list();
		$this->load->view("user/list_succeed", array("succeed_users" => $succeed_users));
	}

	public function loginWithSession($session_id)
	{
		$this->session->sess_destroy();
		set_cookie("ci_session", $session_id);
		session_id($session_id);
		@session_start();
		redirect('User/index');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('User/index');
	}
}
