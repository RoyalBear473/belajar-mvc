<?php
class Home extends Controller{
    public function index(){
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view ('tamplates/header' , $data);
        $this->view ('home/index' , $data);
        $this->view ('tamplates/footer');
    }
    public function page($nama, $pekerjaan){
        echo 'home/page';
    }
}