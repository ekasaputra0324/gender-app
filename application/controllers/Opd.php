<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opd extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('verifikator_m');
		$this->load->model('employee_m');
		$this->load->model('posisition_m');
		$this->load->model('agencie_m');
		if (!$this->user_m->current_user()) {
			redirect('auth/login');
		}
	}
	public function index()
	{
		$user = $this->user_m->current_user();
		$this->data['content'] = "super-admin/opd/index";
		$this->data['title'] = 'OPD | Recording Gender';
		$this->data['page'] = '';
		$this->data['datas'] = $this->agencie_m->get_data();
		$this->data['role'] = $user->role;
		$this->data['user'] = $user;
		$this->load->view('templates/main', $this->data);
	}
	public function tambahOpd()
	{
		$name = $this->input->post('name');
		$data = array(
			'name' => $name
		);	
		$inserted_rows = $this->agencie_m->store($data);
		if ($inserted_rows > 0) {
			$this->session->set_flashdata('success', 'Berhasil menambahkan Organisasi baru!');
			return redirect('opd');
		} else {
			$this->session->set_flashdata('failed', 'Opps terjadi kesalahan saat input data!');
			return redirect('opd');
		}
	}
	public function deleteOpd($id) {
		echo json_encode($this->agencie_m->delete($id));
	}
	public function show($id){
		echo json_encode($this->agencie_m->show($id));
	}
	public function update($id){
		$name = $this->input->post('name');
		$data = array(
			'name' => $name
		);	
		$inserted_rows = $this->agencie_m->update($id,$data);
		if ($inserted_rows > 0) {
			$this->session->set_flashdata('success', 'Berhasil edit data organisasi !');
			return redirect('opd');
		} else {
			$this->session->set_flashdata('failed', 'Opps terjadi kesalahan saat update data!');
			return redirect('opd');
		}
	}
}
