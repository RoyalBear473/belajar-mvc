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
        $data['title'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('tamplates/footer');
    }
    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
            FLASHER::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            FLASHER::setFlash('gagal', 'ditambahkan', 'warning');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function delete($id){
        if($this->model('Mahasiswa_model')->deleteDataMahasiswa($id) > 0){
            FLASHER::setFlash('berhasil', 'didelete', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            FLASHER::setFlash('gagal', 'didelete', 'warning');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function getubah(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }
}