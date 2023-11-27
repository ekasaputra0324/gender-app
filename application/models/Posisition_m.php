<?php

class Posisition_m extends CI_Model
{

	public function insert_position($data) {
		$this->db->insert_batch('positions', $data);
		return $this->db->affected_rows();
	}
	public function check_duplicate_data($year, $agency_id, $type) {
        $this->db->select('year, agency_id, COUNT(*) as count');
		$this->db->from('positions');
		$this->db->where('year', $year);
		$this->db->where('agency_id', $agency_id);
		$this->db->where('type', $type);
		$this->db->group_by('year, agency_id');
		$this->db->having('count > 1');
		return $this->db->get()->result();
    }
	public function get_data($user_id, $agency_id, $type) {
		$this->db->select('year, id, agency_id, type, is_acc');
		$this->db->where('user_id', $user_id);
		$this->db->where('agency_id', $agency_id);
		$this->db->where('type', $type);
		$this->db->group_by('year');
		$query = $this->db->get('positions'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
	public function show($user_id, $agency_id, $type, $year) {
		$this->db->select('year, id, agency_id, type, is_acc, name,female, male');
		$this->db->where('year', $year);
		$this->db->where('user_id', $user_id);
		$this->db->where('agency_id', $agency_id);
		$this->db->where('type', $type);
		$query = $this->db->get('positions'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
	public function update_position($data,$name, $year, $agency_id, $type) {
		 $this->db->where('name', $name);
		 $this->db->where('agency_id', $agency_id);
		 $this->db->where('type', $type);
		 $this->db->where('year', $year);
		 $this->db->update('positions', $data);
        return $this->db->affected_rows();
    }
	public function delete_position($year, $agency_id, $type){
		$this->db->where('agency_id', $agency_id);
		$this->db->where('type', strtoupper($type));
		$this->db->where('year', $year);
		$this->db->delete('positions');
		return $this->db->affected_rows();
	}
	public function show_all($type){
		$this->db->select('year, id, agency_id, type, is_acc, user_id');
		$this->db->where('type', $type);
		$this->db->group_by('year');
		$query = $this->db->get('positions'); // Gantilah 'nama_tabel' dengan nama tabel yang benar
		return $query->result();
	}
	public function get_data_chart($agency_id, $type) {
		$current_year = date("Y");
        $result = array();

        for ($i = $current_year - 5; $i <= $current_year; $i++) {
            $this->db->select('
                SUM(male) as count_male,
                SUM(female) as count_female'
            );
            $this->db->where('year', $i);
            $this->db->where('type', $type);
            $this->db->where('agency_id', $agency_id);
            $query = $this->db->get('positions');
            $count = $query->row_array();
            $result[] = array('tahun' => $i, 'male' => $count['count_male'], 'female' => $count['count_female']);
        }
        return $result;
    }
}
