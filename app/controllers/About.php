<?php 



class About extends Controller {
    public function index($nama = 'syaafiudinm', $pekerjaan = 'mahasiswa', $umur = 20){

        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){

        $data['judul'] = 'My Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');

    }

}