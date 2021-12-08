<?php

class Mysql
{

    private $connect;
    private $db = 'gb_base_php';
    private $login = "root";
    private $password = "12345678";
    private $port = "localhost";

    public function __construct()
    {
        if (!$this->connect) {
            $this->connect = mysqli_connect($this->port, $this->login, $this->password, $this->db);
            if (!$this->connect) {
                header("HTTP/1.0 500 Internal Server Error");
                die("Failed to connect to MySQL: " . $this->connect->connect_error);
            }
        }
    }


    public function query($sql)
    {
        $result = $this->connect->query($sql);
        if (!$result) {
            header("HTTP/1.0 500 Internal Server Error");
            die("Mysql error: " . $this->connect->error);
        }
        return is_bool($result) ? $result : $result->fetch_all(MYSQLI_ASSOC);
    }

    public function first($sql)
    {
        $query = $this->query($sql);
        if (!$query) {
            return [];
        }
        return $query[0];
    }

}
