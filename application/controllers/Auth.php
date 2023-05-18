<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/auth/header');
		$this->load->view('pages/auth/login');
		$this->load->view('templates/auth/footer');
	}

	public function register()
	{
		$this->load->view('templates/auth/header');
		$this->load->view('pages/auth/register');
		$this->load->view('templates/auth/footer');
	}
}
