<?php
class KHS_Controller extends CI_Controller {
    public function index(){
        $this->load->model('Nilai_model');
        $model = $this->Nilai_model;
        $tampil['dataku'] = $model->toTable();
        $this->load->view('khsview', $tampil);
    }
}