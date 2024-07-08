<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['title'] = 'Data Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('tamplates/footer');
    }
    public function detail($id){
        $data['title'] = 'Data Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('tamplates/footer');
    }
    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
            header('Location' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}