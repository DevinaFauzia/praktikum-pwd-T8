<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_musik');

class Koneksi {
    public $mysqli;

    function __construct() {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->mysqli->connect_error) {
            die("Koneksi gagal: " . $this->mysqli->connect_error);
        }
    }

    function __destruct() {
        $this->mysqli->close();
    }

    function select($table) {
        $sql = "SELECT judul, penyanyi, rilis FROM $table";
        $result = $this->mysqli->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
