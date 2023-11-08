<?php

class Agencie_m extends CI_Model
{
	public function get_data(){
		$query = $this->db->get('agencies'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
	public function get_data_by_id($id){
		$this->db->where('id', $id);
		return $this->db->affected_rows();
	}
	public function get_data_by_kode($kode){
		$this->db->where('kode', $kode);
		$query = $this->db->get('agencies');
		return $query->result();
	}
	public function store($data){
		$this->db->insert('agencies', $data);
		return $this->db->affected_rows();
	}	

	public function delete($id){
		$this->db->where('agency_id', $id);
		$this->db->delete('employees');
		$this->db->where('agency_id', $id);
		$this->db->delete('positions');
		$this->db->where('id', $id);
		$this->db->delete('agencies');
		return $this->db->affected_rows();
	}
	public function update($id, $data){
		$this->db->where('id', $id);
		$this->db->update('agencies', $data);
		return $this->db->affected_rows();
	}
	public function show($id){
		$this->db->where('id', $id);
		$query = $this->db->get('agencies'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
}
