<?php

class Urusan_m extends CI_Model
{
	private $db2;

    public function __construct() {
        parent::__construct();
        $this->db2 = $this->load->database('sepakat', TRUE);
    }

	public function get_kupb_by_code($kode){
		 $this->db2->where('opd', $kode);
		 $query = $this->db2->get('kup_b');
		 return $query->result();
	}
	public function get_kupb_by_code2($kode){
		$this->db2->where('kode', $kode);
		$query = $this->db2->get('kup_b');
		return $query->result();
   }
	public function sync($kode_b, $tahun = null){
		try {
			$this->db2->select('kup_i.indikator, kup_d.tahun, kup_i.kode_b, kup_d.kode_i');
			$this->db2->from('kup_d');
			$this->db2->join('kup_i', 'kup_d.kode_i = kup_i.kode');
			$this->db2->where('kup_i.kode_b', $kode_b);
			$this->db2->where('kup_d.tahun', $tahun);
			$this->db2->group_by('kup_i.indikator');
	
			$query = $this->db2->get();
		
			if ($query->num_rows() > 0) {
				$data = $query->result();
				foreach ($data as $row) {
					$existingData = $this->db->get_where('urusan', array(
						'kode_b' => $row->kode_b,
						'kode_i' => $row->kode_i
					))->result();
		
					$shouldInsert = true;
		
					foreach ($existingData as $existingRow) {
						if ($existingRow->tahun == $row->tahun && $existingRow->kode_i == $row->kode_i && $existingRow->kode_b == $row->kode_b ) {
							// Jika tahun, kode_b, dan kode_i sama, data sudah ada, tidak perlu dimasukkan
							$shouldInsert = false;
							break;
						}
					}
		
					if ($shouldInsert) {
						$this->db->insert('urusan', array(
							'kode_b' => $row->kode_b,
							'kode_i' => $row->kode_i,
							'tahun' => $row->tahun,
							'indikator' => $row->indikator,
							'nama_bidang' => $this->get_kupb_by_code2($kode_b)[0]->urusan,
							'L' => 0,
							'P' => 0,
							'is_acc' => 0
						));
					}
				}
		
				$this->db->where('kode_b', $kode_b);
				$this->db->where('tahun', $tahun);
				$urursanData = $this->db->get('urusan')->result();
				return $urursanData;
			} else {
				return 0;
			}
		} catch (Exception $e) {
			var_dump($e);
			die;
		}
		
	}

	public function update_is_acc($id){
		try {
		
			$data = array(
				'is_acc' => 1,
			);
	
			$this->db->where('id', $id);
			$this->db->update('urusan', $data);
	
			if ($this->db->affected_rows() > 0) {
				return true; // Berhasil
			} else {
				return false; // Gagal
			}
		} catch (Exception $e) {
			var_dump($e);
			die;
		}
	}

	public function update($id , $L , $P){
		try {
			$L = (int)$L;
			$P = (int)$P;

			$data = array(
				'L' => $L,
				'P' => $P
			);
	
			$this->db->where('id', $id);
			$this->db->update('urusan', $data);
	
			if ($this->db->affected_rows() > 0) {
				return true; // Berhasil
			} else {
				return false; // Gagal
			}
		} catch (Exception $e) {
			var_dump($e);
			die;
		}
		
	}
	
	
	public function get_year($kode_b){
		try{
			$this->db2->select('tahun');
			$this->db2->where('kode_b', $kode_b);
			$this->db2->group_by('tahun');
			$query = $this->db2->get('kup_d');
			return $query->result();
		}catch(Exception $e){
			var_dump($e);
			die;
		}
	}
}
