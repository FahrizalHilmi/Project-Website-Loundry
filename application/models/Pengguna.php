<?php
class Pengguna extends CI_model
{

    
	public function getAllakun()
	{
		$this->db->select('*');
		$this->db->from('pengguna');
		$quary = $this->db->get();
		return $quary->result();
	}

	public function AddAkun()
	{
		$data = [
			"nama" => $this->input->post('txtName', true),
			"email" => $this->input->post('txtEmail', true),
			"no_telpon" => $this->input->post('txtNotel', true),
            "password" => $this->input->post('txtPassword', true),
			"status_akun"=>"user"
		];
        $this->db->insert('pengguna',$data);
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function cek_user($nama){		
		return $this->db->get_where('pengguna',$nama);
	}
	public function getPenggunaId($username,$pass)
	{
		$this->db->where('nama', $username);
		$this->db->where('password',$pass);
		return $this->db->get('pengguna',)->row_array();
	}

}
