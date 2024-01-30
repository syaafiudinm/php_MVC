<?php 


class Mahasiswa extends Controller{

    public function index(){

        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllmhs();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');

    }
    public function detail($id){

        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getmhsById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');

    }

    public function tambah(){
        if ( $this->model('Mahasiswa_model')->tambahDatamhs($_POST) > 0 ){
            Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('location: ' . BASEURL .'/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('location: ' . BASEURL .'/mahasiswa');
            exit;
        }
    }

    public function hapus($id){

        if ( $this->model('Mahasiswa_model')->hapusDatamhs($id) > 0 ){
            Flasher::setFlash('berhasil ', 'dihapus', 'success');
            header('location: ' . BASEURL . '/mahasiswa' );
            exit;
        }else{
            Flasher::setFlash('gagal ', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/mahasiswa' );
            exit;
        }

    }

    public function getUbah(){

        echo json_encode($this->model('Mahasiswa_model')->getmhsById($_POST['id']));

    }

    public function ubah(){

        if ( $this->model('Mahasiswa_model')->ubahDatamhs($_POST) > 0 ){
            Flasher::setFlash('berhasil ', 'diubah', 'success');
            header('location: ' . BASEURL .'/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal ', 'diubah', 'danger');
            header('location: ' . BASEURL .'/mahasiswa');
            exit;
        }

    }


    public function cari(){

        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDatamhs();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');

    }

}