<?php 
class Nilai_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('table');
        $template = array('table_open' => '<table class="table">');
        $this->table->set_template($template);
        $this->load->database();
        $this->load->model('Nilai_model');
        $this->load->helper('url');  
    }

    public function index(){
        $model = $this->Nilai_model;
        session_start();
        if (isset($_POST['btnSubmit'])) {
            $nilaiakhir = $model->nilaiakhir($_POST['tugas'], $_POST['uts'], $_POST['uas']);
            $indeks = $model->indeks($nilaiakhir);
            $nxk = $model->hitung_nxk($indeks, (int)$_POST['sks']);

        $mydata = array('kode_mk' => $_POST['kodemk'],
                        'nama_mk' => $_POST['namamk'],
                        'sks' => $_POST['sks'],
                        'nrp' => $_POST['nrp'],
                        'nama' => $_POST['nama'],
                        'semester'=>$_POST['semester'],
                        'tugas'=>$_POST['tugas'],
                        'uts'=>$_POST['uts'],
                        'uas'=>$_POST['uas'],
                        'nilaiakhir' => $nilaiakhir,
                        'indeks' => $indeks,
                        'nxk' => $nxk,
                    );
            $model->insertData($mydata);
        }
        $data['hasilSelect'] = $model->getData()->result_array();
        $this->load->view('nilaiview', $data);
        
        
        
    }

    public function delete($id){
        $this->db->delete('Nilai', array('id' => $id));
        redirect(base_url("index.php/Nilai_Controller"));
    }

    public function delete_multiple(){
        session_start();
        if (isset($_SESSION['multihps']) && count($_SESSION['multihps'])>0) {
            $del = implode(',',$_SESSION['multihps']);
            $this->db->query("DELETE from Nilai WHERE id IN ({$del})");
        }
        session_destroy();
        redirect(base_url("index.php/Nilai_Controller"));
    }

}

?>