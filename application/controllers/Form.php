<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('formmodel');
  }

	public function index($param = 'tidak')
	{
    $kondisi['input'] = $param;
    $this->load->view('panel/form-head');
		$this->load->view('panel/form',$kondisi);
    $this->load->view('panel/form-footer');
	}

  public function tambah()
  {
    if ($this->formmodel->tambah() == true) {
      redirect('form/berhasil');
    } else {
      echo "Maaf terjadi kesalahan";
    }
  }

  public function edit()
  {
    $kondisi['orang'] = $this->formmodel->edit();
    $kondisi['input'] = 'yes';
    $this->load->view('panel/form-head');
		$this->load->view('panel/form-edit',$kondisi);
    $this->load->view('panel/form-footer');
  }
}
