<?php
class KHS_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Nilai_model');
        $this->load->helper('url');  
    }
    public function index(){
        $model = $this->Nilai_model;
        $tampil['dataku'] = $model->getData()->result_array();
        $this->load->view('khsview', $tampil);
    }
}