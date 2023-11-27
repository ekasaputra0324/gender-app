<?php

class Verifikator_m extends CI_Model
{
	public function get_data($table) {
	$this->db->select('year, id, agency_id, type, is_acc, user_id');
    $this->db->from($table);
    $this->db->group_by('year, agency_id, type'); // Mengelompokkan berdasarkan tahun
    $query = $this->db->get();
    return $query->result();
	}
	public function update_is_acc($year, $agency_id, $type, $user_id, $table) {
		$this->db->set('is_acc', 1); // Set kolom 'is_acc' menjadi 1
		$this->db->where('year', $year);
		$this->db->where('agency_id', $agency_id);
		$this->db->where('type', $type);
		$this->db->where('user_id', $user_id);
		$this->db->update($table);
		return $this->db->affected_rows();
	}
}
