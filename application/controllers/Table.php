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

	public function delete()
	{
		$id = $this->input->post('id');
		if ($this->tablemodel->hapus($id) == true) {
			return redirect('table');
		} else {

		}
	}

	public function ajax_list()
	{
		$list = $this->tablemodel->tampil();
		$data = array();
		$no = 0;
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person['nik'];
			$row[] = $person['nama'];
			$row[] = $person['phone'];
			$row[] = $person['gender'];
			$row[] = $person['alamat'];
			$row[] = $person['kecamatan'];
			$row[] = $person['kabkkot'];
			$row[] = $person['catatan'];
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('.$person['id'].')"><i class="glyphicon glyphicon-pencil">Edit</i></a>';
			$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('.$person['id'].')"><i class="glyphicon glyphicon-trash">Hapus</i></a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"data" => $data,
		);

		echo json_encode($output);
	}


}
