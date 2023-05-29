<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlHome extends CI_Controller{
    function __construct(){
        parent::__construct();
        //$this->load->model('models');
    }
    public function index(){
        $data['title'] = "Laundry";
        $this->load->view('Home',$data);
        $this->load->helper('url');
    }
}
?>