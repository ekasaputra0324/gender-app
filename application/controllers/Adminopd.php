<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminopd extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('verifikator_m');
		$this->load->model('employee_m');
		$this->load->model('posisition_m');
		$this->load->model('adminopd_m');
		$this->load->model('agencie_m');
		if (!$this->user_m->current_user()) {
			redirect('auth/login');
		}
	}
	public function index()
	{
		$user = $this->user_m->current_user();
		$this->data['content'] = "super-admin/admin-opd/index";
		$this->data['title'] = 'Admin OPD | Recording Gender';
		$this->data['page'] = '';
		$this->data['opd'] =  $this->agencie_m->get_data();
		$this->data['datas'] = $this->adminopd_m->get_data();
		$this->data['role'] = $user->role;
		$this->data['user'] = $user;
		$this->load->view('templates/main', $this->data);
	}
	public function tambahAdminOpd()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'agency_id' => $this->input->post('agency_id'),
			'role' => 'ADMIN_OPD'
		);	
		$inserted_rows = $this->adminopd_m->store($data);
		if ($inserted_rows > 0) {
			$this->session->set_flashdata('success', 'Berhasil menambahkan admin organisasi baru!');
			return redirect('adminopd');
		} else {
			$this->session->set_flashdata('failed', 'Opps terjadi kesalahan saat input data!');
			return redirect('adminopd');
		}
	}
	public function deleteAdminOpd($id) {
		echo json_encode($this->adminopd_m->delete($id));
	}
	public function show($id){
		echo json_encode($this->adminopd_m->show($id));
	}
	public function updateAdminOpd($id){
		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			// 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'agency_id' => $this->input->post('agency_id'),
			'role' => 'ADMIN_OPD'
		);	
		$inserted_rows = $this->adminopd_m->update($id,$data);
		if ($inserted_rows > 0) {
			$this->session->set_flashdata('success', 'Berhasil edit data admin organisasi!');
			return redirect('adminopd');
		} else {
			$this->session->set_flashdata('failed', 'Opps terjadi kesalahan saat update data!');
			return redirect('adminopd');
		}
	}
}
