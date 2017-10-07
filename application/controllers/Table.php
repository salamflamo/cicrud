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

	public function delete($id)
	{
		if ($this->tablemodel->delete($id) == true) {
			return redirect('table');
		} else {
			echo "Gagal";
			redirect('table');
		}
	}


}
