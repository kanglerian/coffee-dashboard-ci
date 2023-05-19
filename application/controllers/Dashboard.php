<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('pages/dashboard/index');
		$this->load->view('templates/dashboard/footer');
	}

}
