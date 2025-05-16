<?php 
require_once 'Koneksi.php';

class Musik {
    public $db;
    public $table = "playlist";

    function __construct() {
        $this->db = new Koneksi();
    }

    function getAllMusik() {
        return $this->db->select($this->table);
    }
}
