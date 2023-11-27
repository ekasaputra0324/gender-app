<?php

class Laporan_m extends CI_Model
{

	public function get_data($type, $year, $agency_id) {
		$this->db->select('name,male, female');
		$this->db->where('type', $type);
		$this->db->where('is_acc', 1);
		$this->db->where('agency_id', $agency_id);
		$this->db->where('year', $year);
		$query = $this->db->get('employees'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
	public function get_data_position($type, $year, $agency_id) {
		$this->db->select('name,male, female');
		$this->db->where('type', $type);
		$this->db->where('is_acc', 1);
		$this->db->where('agency_id', $agency_id);
		$this->db->where('year', $year);
		$query = $this->db->get('positions'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
}
