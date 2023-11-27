<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datajabatan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('posisition_m');
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
		if ($param == 'pertimbangan_jabatan_dan_kepangkatan') {
		    $title = 'data pertimbangan jabatan dan kepangkatan';
			$desc = 'Jumlah data pertimbangan jabatan dan kepangkatan';
		}elseif ($param == 'pns_jabatan_fungsional') {
			$title = 'data pns jabatan fungsional';
			$desc = 'Jumlah data pns jabatan fungsional';
		}elseif ($param == 'pns_jabatan_lainnya') {
			$title = 'data pns jabatan lainnya';
			$desc = 'Jumlah data pns jabatan lainnya';
		}elseif ($param == 'pns_jabatan_struktural') {
			$title = 'Data pns jabatan struktural';
			$desc = 'Jumlah Data pns jabatan struktural';
		}elseif ($param == 'pns_pangkat_golongan') {
			$title = 'Data pns pangkat golongan';
			$desc = 'Jumlah Data pns pangkat golongan';
		}
		$user = $this->user_m->current_user();
		$this->data['content'] = "admin/data-jabatan/index";
		$this->data['type'] = $param;
		$this->data['page'] = '';
		$this->data['title_table'] = $title;
		$this->data['desc'] = $desc;
		if ($user->role == 'SUPER_ADMIN') {
		$this->data['datas'] = $this->posisition_m->show_all(strtoupper($param));
		}else{
			$this->data['datas'] = $this->posisition_m->get_data($user->id, $user->agency_id, strtoupper($param));
		}
		$this->data['user'] = $user;
		$this->data['role'] = $user->role;
		$this->data['title'] = 'Data Jabatan | Recording Gender'; 
		$this->load->view('templates/main', $this->data);
	}

	public function form($param){
		$user = $this->user_m->current_user();
		$this->data['content'] = "admin/data-jabatan/$param[0]/form";
		$this->data['title'] = 'Form Jabatan | Recording Gender'; 
		$this->data['page'] = '';
		$this->data['role'] = $user->role;
		$this->data['type'] = strtoupper($param[0]) ;
		$this->data['user'] = $this->user_m->current_user();
		$this->load->view('templates/main', $this->data);
	}
	public function formEdit($param){
		$user = $this->user_m->current_user();
		$desc = '';
		$title ='';
		if ($param[0] == 'pertimbangan_jabatan_dan_kepangkatan') {
		    $title = 'Edit data pertimbangan jabatan dan kepangkatan';
			$desc = 'Jumlah data pertimbangan jabatan dan kepangkatan';
		}elseif ($param[0] == 'pns_jabatan_fungsional') {
			$title = 'Edit data pns jabatan fungsional';
			$desc = 'Jumlah data pns jabatan fungsional';
		}elseif ($param[0] == 'pns_jabatan_lainnya') {
			$title = 'Edit data pns jabatan lainnya';
			$desc = 'Jumlah data pns jabatan lainnya';
		}elseif ($param[0] == 'pns_jabatan_struktural') {
			$title = 'Edit Data pns jabatan struktural';
			$desc = 'Jumlah Data pns jabatan struktural';
		}elseif ($param[0] == 'pns_pangkat_golongan') {
			$title = 'Edit Data pns pangkat golongan';
			$desc = 'Jumlah Data pns pangkat golongan';
		}
		$this->data['content'] = "admin/data-jabatan/edit";
		$this->data['title'] = 'Form Edit Jabatan | Recording Gender'; 
		$this->data['page'] = '';
		$this->data['title_table'] = $title;
		$this->data['desc'] = $desc;
		$this->data['role'] = $user->role;
		$this->data['year'] = $param[1];
		$this->data['datas'] =  $this->posisition_m->show($user->id, $user->agency_id, strtoupper($param[0]), $param[1]);
		$this->data['type'] = strtoupper($param[0]) ;
		$this->data['user'] = $this->user_m->current_user();
		$this->load->view('templates/main', $this->data);
	}


}
