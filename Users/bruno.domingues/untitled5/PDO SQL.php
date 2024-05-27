<?php

class DataBase
{
    public $conn;
    public function __construct()
    {
        $dds = "mysql:host=localhost;port=3306;dbname=teste;user=postgres;";

        $this->conn = new PDO($dds);
    }
    public function query()
    {

        $prepare = $this->conn->prepare("select * from texto2");
        $prepare->execute();

        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new DataBase();

$posts = $db->query();

