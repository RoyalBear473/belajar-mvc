<?php
class About extends Controller{
    public function index($nama = 'arif' , $hobi = 'mancing' , $umur = 30){
        $data['nama'] = $nama;
        $data['hobi'] = $hobi;
        $data['umur'] = $umur;
        $data['title'] = 'About  Me';
        $this->view ('tamplates/header' , $data);
        $this->view ('about/index' , $data);
        $this->view ('tamplates/footer');
    }
    
    public function page(){
        $data['title'] = 'Page';
        $this->view ('tamplates/header' , $data);
        $this->view ('about/page');
        $this->view ('tamplates/footer');
    }
}