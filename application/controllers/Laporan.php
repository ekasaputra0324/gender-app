<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('agencie_m');
		$this->load->model('urusan_m');
		$this->load->model('laporan_m');
		if (!$this->user_m->current_user()) {
			redirect('auth/login');
		}
	}

	public function pegawai(){
		$user = $this->user_m->current_user();
		$this->data['content'] = "laporan/pegawai/index";
		$this->data['title'] = 'Laporan Pegawai | Recording Gender';
		$this->data['page'] = '';
		$this->data['opd'] =  $this->agencie_m->get_data();
		// $this->data['datas'] = $this->adminopd_m->get_data();
		$this->data['role'] = $user->role;
		$this->data['user'] = $user;
		$this->load->view('templates/main', $this->data);
	}
	public function jabatan(){
		$user = $this->user_m->current_user();
		$this->data['content'] = "laporan/jabatan/index";
		$this->data['title'] = 'Laporan Jabatan | Recording Gender';
		$this->data['page'] = '';
		$this->data['opd'] =  $this->agencie_m->get_data();
		// $this->data['datas'] = $this->adminopd_m->get_data();
		$this->data['role'] = $user->role;
		$this->data['user'] = $user;
		$this->load->view('templates/main', $this->data);
	} 
	public function cetakPegawai(){
		$this->load->library('pdfgenerator');
        $this->data['title'] = "Data Pegawai";
		
        $this->data['status'] = $this->laporan_m->get_data('STATUS',$this->input->get('year'),$this->input->get('agency_id'));

        $this->data['pns_jenjang_pendidikan'] = $this->laporan_m->get_data(strtoupper('pns_jenjang_pendidikan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['non_pns_jenjang_pendidikan'] = $this->laporan_m->get_data(strtoupper('non_pns_jenjang_pendidikan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['pns_disabilitas_jenjang_pendidikan'] = $this->laporan_m->get_data(strtoupper('pns_disabilitas_jenjang_pendidikan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['non_pns_disabilitas_jenjang_pendidikan'] = $this->laporan_m->get_data(strtoupper('non_pns_disabilitas_jenjang_pendidikan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['pns_jabatan'] = $this->laporan_m->get_data(strtoupper('pns_jabatan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['non_pns_jabatan'] = $this->laporan_m->get_data(strtoupper('non_pns_jabatan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['pns_kepangkatan'] = $this->laporan_m->get_data(strtoupper('pns_kepangkatan'),$this->input->get('year'),$this->input->get('agency_id'));
        $file_pdf = 'Laporan Pegawai';
        $paper = 'A4';
        $orientation = "potrait";
        $html = $this->load->view('laporan/pegawai/template_pdf', $this->data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}
	public function cetakJabatan(){
		$this->load->library('pdfgenerator');
        $this->data['title'] = "Data Pegawai";
        $this->data['pertimbangan_jabatan_dan_kepangkatan'] = $this->laporan_m->get_data_position(strtoupper('pertimbangan_jabatan_dan_kepangkatan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['pns_jabatan_struktural'] = $this->laporan_m->get_data_position(strtoupper('pns_jabatan_struktural'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['pns_jabatan_fungsional'] = $this->laporan_m->get_data_position(strtoupper('pns_jabatan_fungsional'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['non_pns_disabilitas_jenjang_pendidikan'] = $this->laporan_m->get_data_position(strtoupper('non_pns_disabilitas_jenjang_pendidikan'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['pns_jabatan_lainnya'] = $this->laporan_m->get_data_position(strtoupper('pns_jabatan_lainnya'),$this->input->get('year'),$this->input->get('agency_id'));
        $this->data['pns_pangkat_golongan'] = $this->laporan_m->get_data_position(strtoupper('pns_pangkat_golongan'),$this->input->get('year'),$this->input->get('agency_id'));
        $file_pdf = 'Laporan Jabatan';
        $paper = 'A4';
        $orientation = "potrait";
        $html = $this->load->view('laporan/jabatan/template_pdf', $this->data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}
	public function cetakUrusan(){
		$this->load->library('pdfgenerator');
		$get = $this->input->get();
		$opd = $this->agencie_m->get_data_by_kode($get['opd']);
		$bidang = $this->urusan_m->get_kupb_by_code2($get['kode_b'])[0]->urusan;
		
		$this->data['datas'] = $this->urusan_m->sync($get['kode_b'], $get['tahun']);
		$this->data['title'] = $opd[0]->name.' '.$get['tahun']. " ( $bidang ) ";
		$file_pdf = 'dataurusan';
        $paper = 'A4';
        $orientation = "potrait";
		$html = $this->load->view('laporan/urusan/index', $this->data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}
}
