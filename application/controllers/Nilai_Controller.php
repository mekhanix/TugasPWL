<?php 
class Nilai_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        session_start();
        if (isset($_POST['btnSubmit'])) {

            $this->load->model('Nilai_model');
            $model = $this->Nilai_model;

            $nilaiakhir = $model->nilaiakhir($_POST['tugas'], $_POST['uts'], $_POST['uas']);
            $indeks = $model->indeks($nilaiakhir);
            $nxk = $model->hitung_nxk($indeks, (int)$_POST['sks']);

        $data = (
            array($_POST['kodemk']=>array('namamk'=>$_POST['namamk'],
            'sks'=>$_POST['sks'],
            'nrp'=>$_POST['nrp'],
            'nama'=>$_POST['nama'],
            'semester'=>$_POST['semester'],
            'tugas'=>$_POST['tugas'],
            'uts'=>$_POST['uts'],
            'uas'=>$_POST['uas'],
            'nilai akhir' => $nilaiakhir,
            'indeks' => $indeks,
            'nxk' => $nxk,
            ))
        );
        
        $dataku = $model->getFile($data);
        if (! write_file(FCPATH."jsondata/nilai.json", $dataku)) {
            echo "unable to write file";
        } else {
            echo "data written";
        }
        

        $tampil['dataku'] = $model->toTable();
        $this->load->view('nilaiview', $tampil);    
    } else {
        $this->load->model('Nilai_model');
        $model = $this->Nilai_model;
        $tampil['dataku'] = $model->toTable();
        $this->load->view('nilaiview', $tampil);
    }
        
    }

    public function delete($row){
        var_dump($row);
        $this->load->model('Nilai_model');
        $model = $this->Nilai_model;
        $dataku = $model->toTable();
        unset($dataku[$row]);
        if (! write_file(FCPATH."jsondata/nilai.json", json_encode($dataku))) {
            echo "unable to write file";
        } else {
            echo "redirect to " . base_url("index.php/Nilai_Controller");
        }
        redirect(base_url("index.php/Nilai_Controller"));
    }

    public function delete_multiple(){
        session_start();

        $this->load->model('Nilai_model');
        $model = $this->Nilai_model;
        $dataku = $model->toTable();

        foreach ($_SESSION['multihps'] as $key => $value) {
         unset($dataku[$value]);   
        }
        
        if (! write_file(FCPATH."jsondata/nilai.json", json_encode($dataku))) {
            echo "unable to write file";
        } else {
            echo "file written";
        }

        session_destroy();
        redirect(base_url("index.php/Nilai_Controller"));
    }

}

?>