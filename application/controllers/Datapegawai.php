<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapegawai extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('employee_m');
		if(!$this->user_m->current_user()){
			redirect('auth/login');
		}
	}
	function _remap($param, $param2) {
		if ($param == 'form') {
			$this->form($param2);
		}elseif ($param == 'formEdit'){
			$this->formEdit($param2);
		}
		else{
			$this->index($param);
		}
		
    }
	public function index($param){	
		$desc = '';
		$title ='';
		if ($param == 'pns_jenjang_pendidikan') {
		    $title = 'PNS Berdasarkan Jenjang';
			$desc = 'Jumlah PNS Berdasarkan Jenjang';
		}elseif ($param == 'status') {
			$title = 'Status Pegawai';
			$desc = 'Jumlah Pegawai Berdasarkan Status';
		}elseif ($param == 'non_pns_jenjang_pendidikan') {
			$title = 'Data Non PNS Berdasarkan Jenjang';
			$desc = 'Jumlah Non PNS Berdasarkan Jenjang';
		}elseif ($param == 'non_pns_jenjang_pendidikan') {
			$title = 'Data Non PNS Berdasarkan Jenjang';
			$desc = 'Jumlah Non PNS Berdasarkan Jenjang';
		}elseif ($param == 'pns_disabilitas_jenjang_pendidikan') {
			$title = 'Data PNS Disabilitas Berdasarkan Jenjang';
			$desc = 'Jumlah Data PNS Disabilitas Berdasarkan Jenjang';
		}elseif ($param == 'non_pns_disabilitas_jenjang_pendidikan') {
			$title = 'Data Non PNS Disabilitas Berdasarkan Jenjang';
			$desc = 'Jumlah Data Non PNS Disabilitas Berdasarkan Jenjang';
		}elseif ($param == 'pns_jabatan') {
			$title = 'Data PNS Bersarkan Jabatan';
			$desc = 'Jumlah Data PNS Berdasarkan Jabatan';
		}elseif ($param == 'non_pns_jabatan') {
			$title = 'Data Non PNS Bersarkan Jabatan';
			$desc = 'Jumlah Data Non PNS Berdasarkan Jabatan';
		}elseif ($param == 'pns_kepangkatan') {
			$title = 'Data PNS Bersarkan Pangkat';
			$desc = 'Jumlah Data PNS Berdasarkan Pangkat';
		}
		$user = $this->user_m->current_user();
		$this->data['content'] = "admin/data-pegawai/index";
		$this->data['type'] = $param;
		$this->data['page'] = '';
		$this->data['title_table'] = $title;
		$this->data['desc'] = $desc;
		if ($user->role == 'SUPER_ADMIN') {
			$this->data['datas'] = $this->employee_m->show_all(strtoupper($param));
		}else{
			$this->data['datas'] = $this->employee_m->get_data($user->id, $user->agency_id, strtoupper($param));
		}
		$this->data['user'] = $user;
		$this->data['role'] = $user->role;
		$this->data['title'] = 'Data Pegawai | Recording Gender'; 
		$this->load->view('templates/main', $this->data);
	}

	public function form($param){
		$user = $this->user_m->current_user();
		$this->data['content'] = "admin/data-pegawai/$param[0]/form";
		$this->data['title'] = 'Form Pegawai | Recording Gender'; 
		$this->data['page'] = '';
		$this->data['type'] = strtoupper($param[0]) ;
		$this->data['role'] = $user->role;
		$this->data['user'] = $this->user_m->current_user();
		$this->load->view('templates/main', $this->data);
	}

	public function formEdit($param){
		$user = $this->user_m->current_user();
		$desc = '';
		$title ='';
		if ($param[0] == 'pns_jenjang_pendidikan') {
		    $title = 'Edit PNS Berdasarkan Jenjang';
			$desc = 'Jumlah PNS Berdasarkan Jenjang';
		}elseif ($param[0] == 'status') {
			$title = 'Edit Status Pegawai';
			$desc = 'Jumlah Pegawai Berdasarkan Status';
		}elseif ($param[0] == 'non_pns_jenjang_pendidikan') {
			$title = 'Edit Data Non PNS Berdasarkan Jenjang';
			$desc = 'Jumlah Non PNS Berdasarkan Jenjang';
		}elseif ($param[0] == 'non_pns_jenjang_pendidikan') {
			$title = 'Edit Data Non PNS Berdasarkan Jenjang';
			$desc = 'Jumlah Non PNS Berdasarkan Jenjang';
		}elseif ($param[0] == 'pns_disabilitas_jenjang_pendidikan') {
			$title = 'Edit Data PNS Disabilitas Berdasarkan Jenjang';
			$desc = 'Jumlah Data PNS Disabilitas Berdasarkan Jenjang';
		}elseif ($param[0] == 'non_pns_disabilitas_jenjang_pendidikan') {
			$title = 'Edit Data Non PNS Disabilitas Berdasarkan Jenjang';
			$desc = 'Jumlah Data Non PNS Disabilitas Berdasarkan Jenjang';
		}elseif ($param[0] == 'pns_jabatan') {
			$title = 'Edit Data PNS Bersarkan Jabatan';
			$desc = 'Jumlah Data PNS Berdasarkan Jabatan';
		}elseif ($param[0] == 'non_pns_jabatan') {
			$title = 'Edit Data Non PNS Bersarkan Jabatan';
			$desc = 'Jumlah Data Non PNS Berdasarkan Jabatan';
		}elseif ($param[0] == 'pns_kepangkatan') {
			$title = 'Edit Data PNS Bersarkan Pangkat';
			$desc = 'Jumlah Data PNS Berdasarkan Pangkat';
		}
		$this->data['content'] = "admin/data-pegawai/edit";
		$this->data['title'] = 'Form Edit Pegawai | Recording Gender'; 
		$this->data['page'] = '';
		$this->data['title_table'] = $title;
		$this->data['desc'] = $desc;
		$this->data['year'] = $param[1];
		$this->data['role'] = $user->role;
		$this->data['datas'] =  $this->employee_m->show($user->id, $user->agency_id, strtoupper($param[0]), $param[1]);
		$this->data['type'] = strtoupper($param[0]) ;
		$this->data['user'] = $this->user_m->current_user();
		$this->load->view('templates/main', $this->data);
	}
}
