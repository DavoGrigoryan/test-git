<?php


class Route
{
    public $controller='HomeController';
    public function __construct()
    {
        $url=$this->url();
        if(!empty($url)){
            if(file_exists('../app/controllers/'.$url[0].'.php')){

                $this->controller=$url[0];
                unset($url[0]);
            }else{
                echo '<div style="background-color:red;padding: 10px">not found file '.$url[0].'</div>';
            }

        }
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller=new $this->controller;
    }
    public function url()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url=rtrim($url);
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);

            return $url;
        }
    }
}