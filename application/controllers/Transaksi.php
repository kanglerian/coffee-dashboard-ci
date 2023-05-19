<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Transaksi';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('pages/transaksi/index');
		$this->load->view('templates/dashboard/footer');
	}

	public function detail()
	{
		$data['title'] = 'Transaksi';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('pages/transaksi/detail');
		$this->load->view('templates/dashboard/footer');
	}

}
