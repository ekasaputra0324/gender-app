<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logicverifikator extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('verifikator_m');
		if (!$this->user_m->current_user()) {
			redirect('auth/login');
		}
	}
	public function verif($year, $agency_id, $type, $user_id, $folder){
		$table = $folder == 'pegawai' ? 'employees' : 'positions';
		echo json_encode($this->verifikator_m->update_is_acc($year, $agency_id, $type, $user_id, $table));
	}
}
