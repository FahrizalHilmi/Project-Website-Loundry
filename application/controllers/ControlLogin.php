<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlLogin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pengguna');
    }
    public function index(){
        $data = [];
        $data['title'] = "1303202106";
        $this->load->view('Login',$data);
    }
    public function Cek_Login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$username = $this->input->post('username',true);
		$pass = $this->input->post('password',true);
		
        if ($this->form_validation->run() == false)
		{
            echo "<script> alert('isi dengan benar');</script>";
            redirect(base_url('ControlLogin'));
        }else{
            $where = array(
                'nama' => $username,
                'password' => $pass
                );
            $cek = $this->Pengguna->cek_login("pengguna",$where)->num_rows();
            $id  = $this->Pengguna->getPenggunaId($username,$pass);
            if($cek > 0){
                
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                    'id_pengguna' => $id['id_pengguna'],
                    'status_akun' => $id['status_akun']                    
                    );
        
                $this->session->set_userdata($data_session);
                redirect(base_url('ControlLaundry'), 'refresh');  
            }else{
                echo "<script> alert('Username dan password salah !');</script>";
                redirect(base_url('ControlLogin'));  
            }
        }
    }
    public function logout(){
		$this->session->set_userdata('status',FALSE);
		$this->session->sess_destroy();
		redirect('ControlHome');
	}
}
?>