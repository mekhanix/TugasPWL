<?php 
class Nilai_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Nilai_model');
        $this->load->helper('url');  
    }

    public function index(){
        session_start();

        //form validation
        $this->form_validation->set_rules('kodemk', 'Kode Matakuliah', 'required');
        $this->form_validation->set_rules('namamk', 'Nama Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', array('required', 'integer'));
        $this->form_validation->set_rules('nrp', 'NRP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('semester', 'Semester', array('required', 'integer'));
        $this->form_validation->set_rules('tugas', 'Tugas', array('required', 'integer'));
        $this->form_validation->set_rules('uts', 'UTS', array('required', 'integer'));
        $this->form_validation->set_rules('uas', 'UAS', array('required', 'integer'));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert" data-dismiss="alert">', '</div>');
        //end validation

        $model = $this->Nilai_model;
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
            
        }
        $data['hasilSelect'] = $model->getData()->result_array();
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('nilaiview', $data);
        }
        else{
            $model->insertData($mydata);
            redirect(base_url("index.php/Nilai_Controller"));
        }
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