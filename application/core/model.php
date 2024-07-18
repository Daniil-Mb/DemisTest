<?php
require_once './config/connect.php';

class Model
{
    protected $connect;

    public function __construct()
    {
        $this->connect = $this->db_connect();
    }

    private function db_connect()
    {
        $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        if (!$connect) {
            die('Error connect to database!');
        }
        return $connect;
    }

    public function __destruct()
    {
        mysqli_close($this->connect);
    }
}
?>
