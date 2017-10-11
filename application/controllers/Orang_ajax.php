<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orang_ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Orang_ajax_m','orang');
		$this->load->library('session');
	}
	public function index()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$this->load->view('orang_ajax/header');
		$this->load->view('orang_ajax/sidebar');
		$this->load->view('orang_ajax/table');
		$this->load->view('orang_ajax/form');
		$this->load->view('orang_ajax/footer');
	}

	public function ambilorang()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$h = $this->orang->ambilorang();
		echo json_encode($h);
	}

	public function simpanorang()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$h = $this->orang->simpanorang();
		$msg['success'] = false;
		$msg['type'] = "simpan";
		if ($h) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editorang()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$q = $this->orang->editorang();
		echo json_encode($q);
	}

	public function updateorang()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$h = $this->orang->updateorang();
		$msg['success'] = false;
		$msg['type'] = "edit";
		if ($h) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function hapusorang()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$h = $this->orang->hapusorang();
		$msg['success'] = false;
		$msg['type'] = "hapus";
		if ($h) {
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}


}
