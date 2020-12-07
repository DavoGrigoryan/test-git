<?php


class Framework
{
    public function view($viewName,$data1=[],$data2=[],$data3=[]){
        if(file_exists('../app/views/'.$viewName.'.php')){
            require_once "../app/views/".$viewName.".php";
        }
        else{
            echo "<div style='background-color:silver;padding: 10px'>".$viewName."-not found</div>";
        }
    }

    public function model($modelName){
        if(file_exists("../app/models/".$modelName.".php")){
            require_once "../app/models/".$modelName.".php";
            return new $modelName;
        }
        else{
            echo "<div style='background-color:silver;padding: 10px'>".$modelName."-not found</div>";
        }
    }


    public function helper($helperName){
        if(file_exists("../system/helpers/".$helperName.".php")){
            require_once "../system/helpers/".$helperName.".php";
        }
        else{
            echo "<div style='background-color:silver;padding: 10px'>".$helperName."-not found .css</div>";
        }
    }
}
