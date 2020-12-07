<?php


class Database
{
    public $host=HOST;
    public $user=USER;
    public $database=DATABASE;
    public $password=PASSWORD;
    public $con;
    public $result;

    public function __construct(){

        try {
            return $this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->database.";charset=utf8",$this->user,$this->password);
        } catch (PDOException $e) {
            echo 'Database connection error:' . $e->getMessage();
        }
    }
    public function Query($qry){
        $this->result=$this->con->prepare($qry);
        return $this->result->execute();
    }

    public function fetchall(){
        return $this->result->fetchall(PDO::FETCH_OBJ);
    }
    public function fetch(){
        return $this->result->fetch(PDO::FETCH_OBJ);
    }

}