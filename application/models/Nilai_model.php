<?php
class Nilai_model extends CI_Model {
    public function getData(){
        $query = $this->db->get('Nilai');
        return $query;
        
    }

    public function insertData($data) {
        $this->db->insert('Nilai', $data);
    }

    public function nilaiakhir($tugas, $uts, $uas) {
        $nilaiakhir = round(($tugas + $uts + $uas) / 3);
        return $nilaiakhir;        
    }
// ambil data json
    public function getFile($data){
        $this->load->helper('file');
        $file = file_get_contents(FCPATH."jsondata/nilai.json");
        $tmpData = json_decode($file, TRUE);
        array_push($tmpData, $data);
        $jsondata = json_encode($tmpData);
        return $jsondata;
    }
// ambil data array
    public function toTable(){
        $this->load->helper('file');
        $file = file_get_contents(FCPATH."jsondata/nilai.json");
        $tmpData = json_decode($file, TRUE);
        return $tmpData;
    }

    public function indeks($nilaiakhir){
        switch ($nilaiakhir) {
            case $nilaiakhir > 85:
                $huruf = "A";
                return $huruf;
                break;
            
            case $nilaiakhir > 75:
                $huruf = "B+";
                return $huruf;
                break;
            case $nilaiakhir > 70:
                $huruf = "B";
                return $huruf;
                break;
            case $nilaiakhir > 65:
                $huruf = "C+";
                return $huruf;
                break;
            case $nilaiakhir >= 60:
                $huruf = "C";
                return $huruf;
                break;
            case $nilaiakhir < 60:
                $huruf = "D";
                return $huruf;
                break;
            default:
                $huruf = "E";
                return $huruf;
                break;
        }
    }

    function hitung_nxk($indeks, $sks){
        switch ($indeks) {
            case $indeks == "A":
                $ix = 4.0;
                $nxk = (float) $sks * $ix;
                return $nxk;
                break;
            case $indeks == "B+":
                $ix = 3.5;
                $nxk = (float) $sks * $ix;
                return $nxk;
                break;
            case $indeks == "B":
                $ix = 3.0;
                $nxk = (float) $sks * $ix;
                return $nxk;
                break;
            case $indeks == "C+":
                $ix = 2.5;
                $nxk = (float) $sks * $ix;
                return $nxk;
                break;
            case $indeks == "C":
                $ix = 2.0;
                $nxk = (float) $sks * $ix;
                return $nxk;
                break;
            case $indeks == "D":
                $ix = 1.0;
                $nxk = (float) $sks * $ix;
                return $nxk;
                break;
            case $indeks == "E":
                $ix = 0;
                $nxk = (float) $sks * $ix;
                return $nxk;
                break;
                default:
                return 0;
                break;
        }
        }
}