<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Urusan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('urusan_m');
		$this->load->model('agencie_m');
		if (!$this->user_m->current_user()) {
			redirect('auth/login');
		}
	}
	public function index()
	{
		$user = $this->user_m->current_user();
		$kup_b = $this->urusan_m->get_kupb_by_code($user->kode);
		
		$this->data['content'] = "admin/urusan/index";
		$this->data['page'] = '';
		$this->data['title_table'] = "Data Urusan $user->agency";
		$this->data['desc'] = 'Data Urusan';
		$this->data['user'] = $user;
		$this->data['bidangs'] = $kup_b;
		$this->data['role'] = $user->role;
		$this->data['title'] = 'Data Pegawai | Recording Gender'; 
		$this->load->view('templates/main', $this->data);	
	}

	public function get_tahun($kode){
		$data = $this->urusan_m->get_year($kode);
		echo json_encode($data);
	}

	public function get_bidang($kode){
		$data = $this->urusan_m->get_kupb_by_code($kode);
		echo json_encode($data);
	}

	public function async(){
		// $opd = isset($_GET['opd']) ? $_GET['opd'] : null;
	
		$data = $this->urusan_m->sync($_GET['kode_b'], $_GET['tahun']);
		echo json_encode($data);
	}
	public function update(){
		$id = $this->input->post('id');
        $L = $this->input->post('L');
        $P = $this->input->post('P');
    
        $response = $this->urusan_m->update($id, $L, $P);
        echo json_encode($response);
	}
	public function update_acc(){
		$id = $this->input->post('id');
        $response = $this->urusan_m->update_is_acc($id);
        echo json_encode($response);
	}

	// verfikator
	public function verifikator(){
		$user = $this->user_m->current_user();
		$opd = $this->agencie_m->get_data();
		
		$this->data['content'] = "verifikator/master/urursan";
		$this->data['page'] = '';
		$this->data['title_table'] = "Data Urusan";
		$this->data['desc'] = 'Data Urusan';
		$this->data['user'] = $user;
		$this->data['opd'] = $opd;
		$this->data['role'] = $user->role;
		$this->data['title'] = 'Data Urusan | Recording Gender'; 
		$this->load->view('templates/main', $this->data);	
	}
	// superadmin 
	public function superadmin(){
		$user = $this->user_m->current_user();
		$opd = $this->agencie_m->get_data();
		
		$this->data['content'] = "super-admin/urursan/index";
		$this->data['page'] = '';
		$this->data['title_table'] = "Data Urusan";
		$this->data['desc'] = 'Data Urusan'; 
		$this->data['user'] = $user;
		$this->data['opd'] = $opd;
		$this->data['role'] = $user->role;
		$this->data['title'] = 'Data Urusan | Recording Gender'; 
		$this->load->view('templates/main', $this->data);	
	}

	
}
