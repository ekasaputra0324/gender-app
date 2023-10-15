<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapegawai extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		if(!$this->user_m->current_user()){
			redirect('auth/login');
		}
	}
	function _remap($param, $param2) {
		if ($param == 'form') {
			$this->form($param2);
		}else{
			$this->index($param);
		}
		
    }
	public function index($param){
		$description = '';
		$title = '';
		$type = '';
		if ($param == 'jumpebes') {
			$description = 'Jumlah Pegawai Berdasarkan Status';
			$title = 'JUMPEBES';
		}elseif ($param == 'jumpbeje') {
			$description = 'Jumlah PNS Berdasarkan Jenjang Pendidikan';
			$title = 'JUMPBEJE';
		}elseif ($param == 'jumnpbeje') {
			$description = 'Jumlah Non PNS Berdasarkan Jenjang Pendidikan';
			$title = 'JUMNPBEJE';
		}elseif ($param == 'jumpdbeje') {
			$description = ' Jumlah PNS Disabilitas Berdasarkan Jenjang Pendidikan';
			$title = 'JUMPDBEJE';
		}elseif ($param == 'jumnpdbeje') {
			$description = 'Jumlah Non PNS Disabilitas Berdasarkan Jenjang Pendidikan';
			$title = 'JUMNPDBEJE';
		}
		elseif ($param == 'jumpbej') {
			$description = 'Jumlah PNS berdasarkan Jabatan';
			$title = 'JUMPBEJ';
		}
		elseif ($param == 'jumnpbej') {
			$description = 'Jumlah Non PNS berdasarkan Jabatan';
			$title = 'JUMNPBEJ';
		}
		elseif ($param == 'jumpbk') {
			$description = 'Jumlah PNS berdasarkan Kepangkatan';
			$title = 'JUMPBK';
		}
		//jumnpbej			
		$this->data['content'] = "admin/data-pegawai/index";
		$this->data['type'] = $param;
		$this->data['page'] = '';
		$this->data['description'] = $description;
		$this->data['title_table'] = $title;
		$this->data['title'] = 'Data Pegawai | Recording Gender'; 
		$this->load->view('templates/main', $this->data);
	}

	public function form($param){
		$description = '';
		$title = '';
		$type = '';
		if ($param[0] === 'jumpebes') {
			$description = 'Jumlah Pegawai Berdasarkan Status';
			$title = 'JUMPEBES';
		}elseif ($param[0] === 'jumpbeje') {
			$description = 'Jumlah PNS Berdasarkan Jenjang Pendidikan';
			$title = 'JUMPBEJE';
		}elseif ($param[0] == 'jumnpbeje') {
			$description = 'Jumlah Non PNS Berdasarkan Jenjang Pendidikan';
			$title = 'JUMNPBEJE';
		}elseif ($param[0] == 'jumpdbeje') {
			$description = ' Jumlah PNS Disabilitas Berdasarkan Jenjang Pendidikan';
			$title = 'JUMPDBEJE';
		}elseif ($param[0] == 'jumpbej') {
			$description = 'Jumlah PNS berdasarkan Jabatan';
			$title = 'JUMPBEJ';
		}
		elseif ($param[0] == 'jumnpbej') {
			$description = ' Jumlah Non PNS berdasarkan Jabatan';
			$title = 'JUMNPBEJ';
		}
		elseif ($param[0] == 'jumpbk') {
			$description = 'Jumlah PNS berdasarkan Kepangkatan';
			$title = 'JUMPBK';
		}
		$this->data['content'] = "admin/data-pegawai/$param[0]/form";
		$this->data['title'] = 'Form Pegawai | Recording Gender'; 
		$this->data['description'] = $description;
		$this->data['title_table'] = $title;
		$this->data['page'] = '';
		$this->load->view('templates/main', $this->data);
	}

}
