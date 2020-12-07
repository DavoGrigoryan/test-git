<?php

class HomeModel extends Database{
    public function getCategories(){
        if($this->Query("SELECT * FROM category")){
            $data1=$this->fetchall();
            return $data1;
        }
    }

    public function getProducts(){
        if($this->Query("SELECT * FROM products")){
            $data2=$this->fetchall();
            return $data2;
        }
    }
}