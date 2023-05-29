<?php 
 
class ControlAdmin extends CI_Controller{
 
	function __construct(){
		parent::__construct();	
        if($this->session->userdata('status') != "login"){
			redirect(base_url('ControlLogin'),'refresh');
		}	
		$this->load->model('m_data');
        $this->load->helper('url');
		$this->load->model('Pengguna');
        
	}
 
	function index(){
		$data['pengguna'] = $this->Pengguna->getAllakun();
		$data['tb_laundry'] = $this->m_data->tampil_data()->result();
		$this->load->view('Admin',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$jenis = $this->input->post('jenis');
		$jumlah = $this->input->post('jumlah');
		$berat = $this->input->post('berat');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('m/d/Y h:i:s a', time());
		$nama = $this->input->post('customer');

		$data = array(
			'customer'=>$nama,
			'jenis' => $jenis,
			'jumlah' => $jumlah,
			'berat' => $berat,
			'tanggal'=>$date,
			'status'=> "proses"
		);
		$this->m_data->input_data($data,'tb_laundry');
		redirect('ControlAdmin');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_laundry');
		redirect('ControlAdmin');
	}
	function edit($id){
		$where = array('id' => $id);
		$this->m_data->edit_data($where,'tb_laundry')->result();
		
	}
	function update($id){ 
		$this->m_data->update_data($id);
		redirect('ControlAdmin');

	}
	
}



