<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikator extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('verifikator_m');
		$this->load->model('employee_m');
		$this->load->model('posisition_m');
		if (!$this->user_m->current_user()) {
			redirect('auth/login');
		}
	}
	function _remap($param, $param2) {
		if ($param == 'show') {
			$this->show($param2);
		}else{
			$this->index($param);
		}	
    }
	public function index($param){

		$table = $param == 'pegawai' ? 'employees' : 'positions';
		$user = $this->user_m->current_user();
		// var_dump($this->verifikator_m->get_data($table));
		// die;
		$this->data['content'] = "verifikator/master/index";
		$this->data['page'] = 'verifikator';
		$this->data['user'] = $user;
		$this->data['folder'] = $param;
		$this->data['datas'] = $this->verifikator_m->get_data($table);
		$this->data['role'] = $user->role;
		$this->data['title'] = 'Verifikasi Data | Recording Gender'; 
		$this->load->view('templates/main', $this->data);
	}
	public function show($param){
		$user = $this->user_m->current_user();
		$year = $param[0];
		$agency_id = $param[1];
		$user_id = $param[2];
		$type = $param[3];
		$folder = $param[4];
		$view = strtolower($type);
		$this->data['content'] = "admin/data-$folder/edit";
		$this->data['title'] = 'Show Pegawai | Recording Gender'; 
		$this->data['title_table'] = '';
		$this->data['page'] = '';
		$this->data['desc'] = '';
		$this->data['year'] = $year;
		$this->data['role'] = $user->role;
		if ($folder == 'pegawai') {
			$this->data['datas'] =  $this->employee_m->show($user_id, $agency_id, $type,$year);
		}else{
			$this->data['datas'] =  $this->posisition_m->show($user_id, $agency_id, $type,$year);
		}
		$this->data['type'] = strtoupper($param[0]);
		$this->data['user'] = $this->user_m->current_user();
		$this->load->view('templates/main', $this->data);
	}
}
