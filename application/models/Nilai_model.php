<?php
class Nilai_model extends CI_Model {
    public function nilaiakhir($tugas, $uts, $uas) {
        $nilaiakhir = round(($tugas + $uts + $uas) / 3);
        return $nilaiakhir;        
    }
// ambil data json
    public function getFile($data){
        $this->load->helper('file');
        $file = file_get_contents("C:\\xampp\\htdocs\\nilai\\jsondata\\nilai.json");
        $tmpData = json_decode($file, TRUE);
        array_push($tmpData, $data);
        $jsondata = json_encode($tmpData);
        return $jsondata;
    }
// ambil data array
    public function toTable(){
        $this->load->helper('file');
        $file = file_get_contents("C:\\xampp\\htdocs\\nilai\\jsondata\\nilai.json");
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
            case $nilaiakhir > 60:
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
}