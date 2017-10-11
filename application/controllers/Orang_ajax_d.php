<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orang_ajax_d extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Orang_ajax_m_d','orang');
		$this->load->library('session');
	}
	public function index()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$this->load->view('orang_ajax/header');
		$this->load->view('orang_ajax/sidebar');
		$this->load->view('orang_ajax/table2');
		$this->load->view('orang_ajax/form2');
		$this->load->view('orang_ajax/footer');

	}

	public function ajax_list($value='')
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$list = $this->orang->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $value) {
			$no++;
			$row = array();
			$row[] = '<a class="item-detail" onclick="detailOrang('.$value->id.')" href="javascript:;" data="'.$value->id.'">'.$value->nik.'</a>';
			$row[] = $value->nama;
			$row[] = $value->phone;
			$row[] = $value->gender;
			$row[] = $value->kabkot;


			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_orang('.$value->id.')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>'.
								'<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Edit" onclick="delete_orang('.$value->id.')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
			$data[] = $row;
		}

		$output = array(
			'draw' => $_POST['draw'],
			'recordsTotal' => $this->orang->count_all(),
			'recordsFiltered' => $this->orang->count_filtered(),
			'data' => $data,
		);

		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$data = $this->orang->get_by_id($id);
		echo json_encode($data);
	}


	public function ajax_add()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$this->_validate();
		$data = array(
			'nik'		=> $this->input->post('nik'),
			'nama'		=> $this->input->post('nama'),
			'phone'		=> $this->input->post('phone'),
			'gender'		=> $this->input->post('gender'),
			'alamat'		=> $this->input->post('alamat'),
			'kecamatan'		=> $this->input->post('kecamatan'),
			'kabkot'		=> $this->input->post('kabkot'),
			'catatan'		=> $this->input->post('catatan'),
		);
		$this->orang->save($data);
		echo json_encode(array('status' => TRUE));
	}

	public function ajax_update()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$this->_validate();
		$data = array(
			'nik'		=> $this->input->post('nik'),
			'nama'		=> $this->input->post('nama'),
			'phone'		=> $this->input->post('phone'),
			'gender'		=> $this->input->post('gender'),
			'alamat'		=> $this->input->post('alamat'),
			'kecamatan'		=> $this->input->post('kecamatan'),
			'kabkot'		=> $this->input->post('kabkot'),
			'catatan'		=> $this->input->post('catatan'),
		);
		$this->orang->update(array('id' => $this->input->post('id')),$data);
		echo json_encode(array('status' => TRUE));
	}

	public function ajax_delete($id)
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$this->orang->delete_by_id($id);
		echo json_encode(array('status' => TRUE));
	}

	public function _validate()
	{
		if ($_SESSION['loggedin'] != true) {
			redirect('login');
		}
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if ($this->input->post('nik') == '') {
			$data['error_string'] = "NIK jangan sampai kosong!";
			$data['inputerror'] = 'nik';
			$data['status'] = FALSE;
		}

		if ($this->input->post('nama') == '') {
			$data['error_string'] = "Nama jangan sampai kosong!";
			$data['inputerror'] = 'nama';
			$data['status'] = FALSE;
		}

		if ($this->input->post('phone') == '') {
			$data['error_string'] = "No HP jangan sampai kosong!";
			$data['inputerror'] = 'phone';
			$data['status'] = FALSE;
		}
		if ($this->input->post('gender') == '') {
			$data['error_string'] = "Pilih Jenis Kelamin ";
			$data['inputerror'] = 'gender';
			$data['status'] = FALSE;
		}
		if ($this->input->post('alamat') == '') {
			$data['error_string'] = "Alamat jangan sampai kosong!";
			$data['inputerror'] = 'alamat';
			$data['status'] = FALSE;
		}
		if ($this->input->post('kecamatan') == '') {
			$data['error_string'] = "Kecamatan jangan sampai kosong!";
			$data['inputerror'] = 'kecamatan';
			$data['status'] = FALSE;
		}
		if ($this->input->post('kabkot') == '') {
			$data['error_string'] = "Kab. / Kota jangan sampai kosong!";
			$data['inputerror'] = 'kabkot';
			$data['status'] = FALSE;
		}
	}


}
