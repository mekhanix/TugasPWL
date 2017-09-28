<?php 
class Nilai_Controller extends CI_Controller {
    public function index(){
        session_start();
        if (isset($_POST['btnSubmit'])) {
            if (!isset($_SESSION['data_mhs'])) {
                $_SESSION['data_mhs'] = array();
            }

            $this->load->model('Nilai_model');
            $model = $this->Nilai_model;

            $nilaiakhir = $model->nilaiakhir($_POST['tugas'], $_POST['uts'], $_POST['uas']);
            $indeks = $model->indeks($nilaiakhir);
            
        $tabel = array($_POST['kodemk']=>$_POST['kodemk'], $_POST['nrp'], $_POST['nama'], $_POST['tugas'],
        $_POST['uts'], $_POST['uas'], $nilaiakhir, $indeks);
        
        array_push($_SESSION['data_mhs'], $tabel);
        print_r($_SESSION['data_mhs']);

        $this->load->view('nilaiview');    
    } else {
        $this->load->view('nilaiview');
    }
        
    }

    public function delete($row){
        session_start();
        // print_r($_SESSION['data_mhs']);
        unset($_SESSION['data_mhs'][$row]);
        echo ("<a href='http://localhost/nilai/index.php/nilai_controller'>Kembali</a>");
    }
}

?>