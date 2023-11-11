<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logicposition extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('posisition_m');
		if (!$this->user_m->current_user()) {
			redirect('auth/login');
		}
	}
	public function saveJabatan($param)
	{
		$user = $this->user_m->current_user();
		$names = $this->input->post('name');
		$L = $this->input->post('L');
		$P = $this->input->post('P');
		$year = $this->input->post('year');


		$data = array();

		for ($i = 0; $i < count($names); $i++) {
			$data[] = array(
				'agency_id' => $user->agency_id,
				'user_id' => $user->id,
				'type' => $param,
				'name' => $names[$i],
				'male' => $L[$i],
				'female' => $P[$i],
				'year' => (int)$year,
				'is_acc' => 0
			);
		}

		$check = $this->posisition_m->check_duplicate_data($year, $user->agency_id, $param);
		if (count($check) > 0) {
			$this->session->set_flashdata('failed', 'Opps data dari tahun ' . $year . ' sudah tersedia!');
			return redirect('datajabatan/' . strtolower($param));
		} else {
			$inserted_rows = $this->posisition_m->insert_position($data);
			if ($inserted_rows > 0) {
				$this->session->set_flashdata('success', 'Berhasil mengimputkan data!');
				return redirect('datajabatan/' . strtolower($param));
			} else {
				$this->session->set_flashdata('failed', 'Opps terjadi kesalahan saat input data!');
				return redirect('datajabatan/' . strtolower($param));
			}
		}
	}
	public function editJabatan($param, $year)
	{
		try {
			$user = $this->user_m->current_user();
			$names = $this->input->post('name');
			$L = $this->input->post('L');
			$P = $this->input->post('P');

			$total_rows_update = 0;
			
			for ($i = 0; $i < count($names); $i++) {
				$data = array(	
					'male' => $L[$i],
					'female' => $P[$i],
				);
				$name_posisition = array(
				'name' =>	$names[$i]
				) ;
				foreach ($name_posisition as $value) {
				   $update = $this->posisition_m->update_position($data,$value,$year, $user->agency_id, $param);
				   $total_rows_update += $update;
				}
			}

			if ($total_rows_update > 0) {
				$this->session->set_flashdata('success', 'Berhasil memperbarui data!');
				return redirect('datajabatan/' . strtolower($param));
			} else {
				$this->session->set_flashdata('failed', 'Opps tidak ada data yang diubah!');
				return redirect('datajabatan/' . strtolower($param));
			}
		} catch (\Exception $e) {
			exit($e->getMessage());
		}
	}

	public function deleteJabatan($type, $year){
		$user = $this->user_m->current_user();
		echo json_encode($this->posisition_m->delete_position($year, $user->agency_id, $type));
	}
	public function getChart( $type,$agency_id){
		echo json_encode($this->posisition_m->get_data_chart($agency_id, strtoupper($type)));
	}
}
