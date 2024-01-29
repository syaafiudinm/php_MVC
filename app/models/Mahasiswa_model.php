<?php 


class Mahasiswa_model{

   private $table = 'mahasiswa';
   private $db;

   public function __construct(){

    $this->db = new Database;

   }

    public function getAllmhs(){

         $this->db->query('SELECT * FROM ' . $this->table);
         return $this->db->resultSet();

    }
    public function getmhsById($id){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

        $this->db->bind('id', $id);
        return $this->db->single();

    }

    public function tambahDatamhs($data){

        $query = "INSERT INTO mahasiswa VALUES ('', :Nama, :NIM, :Prodi, :Email)";

        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('NIM', $data['NIM']);
        $this->db->bind('Prodi', $data['Prodi']);
        $this->db->bind('Email', $data['Email']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDatamhs($id){

        $query = "DELETE FROM MAHASISWA WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function ubahDatamhs($data){

        $query = "UPDATE mahasiswa SET 
                    Nama = :Nama,
                    NIM = :NIM,
                    Prodi = :Prodi,
                    Email = :Email
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('NIM', $data['NIM']);
        $this->db->bind('Prodi', $data['Prodi']);
        $this->db->bind('Email', $data['Email']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }

}