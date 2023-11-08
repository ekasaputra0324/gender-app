<?php

class AdminOpd_m extends CI_Model
{
	public function get_data(){
		$this->db->where('role','ADMIN_OPD');
		$query = $this->db->get('users'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
	public function store($data){
		$this->db->insert('users', $data);
		return $this->db->affected_rows();
	}	
	public function delete($id){
		$this->db->where('user_id', $id);
		$this->db->delete('employees');
		$this->db->where('user_id', $id);
		$this->db->delete('positions');
		$this->db->where('id', $id);
		$this->db->delete('users');
		return $this->db->affected_rows();
	}
	public function update($id, $data){
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		return $this->db->affected_rows();
	}
	public function show($id){
		$this->db->where('id', $id);
		$query = $this->db->get('users'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
}
