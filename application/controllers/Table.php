<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tablemodel');
		
	}

	public function index()
	{
		$data['orang'] = $this->tablemodel->tampil();
		$this->load->view('panel/table',$data);
	}


}
