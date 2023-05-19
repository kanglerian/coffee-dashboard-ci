<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Rekap Transaksi';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('pages/rekap/index');
		$this->load->view('templates/dashboard/footer');
	}

}
