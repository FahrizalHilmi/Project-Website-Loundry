<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlRegister extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pengguna');
        $this->load->model('m_data');
    }
    public function index(){
        $data = [];
        $data['title'] = "1303202106";
        $this->load->view('Register',$data);
    }
    public function tambahPengguna()
	{
        $nama = $this->input->post('txtName', true);
        $pass = $this->input->post('txtPassword', true);
        $confirmpass = $this->input->post('txtConfirmPassword', true);
        
            $where = array(
                'nama' => $nama
                );
            $cek = $this->Pengguna->cek_user($where)->num_rows();
		    if($cek > 0){ 
                echo "<script> alert('Nama akun tidak tersedia');</script>";
                redirect(base_url('ControlRegister'), 'refresh' );     
            }
            else{
                $this->Pengguna->AddAkun();
                echo "<script> alert('Akun telah dibuat');</script>";
                redirect(base_url('ControlLogin'), 'refresh');  
            }  
                  
        
    }
}
?>