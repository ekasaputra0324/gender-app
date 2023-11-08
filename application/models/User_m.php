<?php

class User_m extends CI_Model
{
	private $_table = "users";
	const SESSION_KEY = 'id';

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username or Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}


	public function login($username, $password)
	{
		$this->db->where('email', $username)->or_where('username', $username);
		$query = $this->db->get($this->_table);
		$user = $query->row();
	    
		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id]);
		

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}
	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}
		$user_id = $this->session->userdata(self::SESSION_KEY);
		$user = $this->db->get_where($this->_table, ['id' => $user_id])->row();
		$agency = $this->db->get_where('agencies', ['id' => $user->agency_id])->row();
		if ( $agency ) {
			return (object)[
				'id' => $user->id,
				'name' => $user->name,
				'role' => $user->role,
				'agency' => $agency->name,
				'agency_id' => $user->agency_id,
				'kode' => $agency->kode, 
			];
		}else{
			return $user;
		}
		
	}

	
	
}
