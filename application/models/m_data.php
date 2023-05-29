<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_laundry');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($id){
		$customer = $this->input->post('customer', true);
		$jenis = $this->input->post('jenis', true);
		$jumlah = $this->input->post('jumlah', true);
		$berat = $this->input->post('berat', true);
		date_default_timezone_set('Asia/Jakarta');
		$date = date('m/d/Y h:i:s a', time());
		$status = $this->input->post('status',true);
		$data = array(
			'customer'=>$customer,
			'jenis' => $jenis,
			'jumlah' => $jumlah,
			'berat' => $berat,
			'tanggal'=>$date,
			'status'=>$status
		);
		$this->db->where('id',$id);
		$this->db->update('tb_laundry',$data);
	}	
	public function get_data_xdatateman()
        {
            $data = $this->db->get('tb_laundry');
            return $data->result_array();
        }

}

