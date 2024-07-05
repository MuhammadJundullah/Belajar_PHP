<?php 

class Mahasiswa_model {
    private $table = 'mahasiswa'; 
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($no) { // Changed method name and parameter to match column name
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no = :no'); // Changed 'id' to 'no'
        $this->db->bind(':no', $no);
        return $this->db->singel();
    }
}
