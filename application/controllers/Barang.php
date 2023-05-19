<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Barang';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('pages/barang/index');
		$this->load->view('templates/dashboard/footer');
	}

}
