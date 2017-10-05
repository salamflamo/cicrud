<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('formmodel');
  }

	public function index()
	{
		$this->load->view('panel/form');
	}

  public function tambah()
  {
    if ($this->formmodel->tambah() == true) {
      redirect('table');
    } else {
      echo "Maaf terjadi kesalahan";
    }
  }
}
