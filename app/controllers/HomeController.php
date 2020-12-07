<?php
class HomeController  extends Framework
{
    public function __construct()
    {
        $this->helper('link');
        $this->HomeModel=$this->model('HomeModel');

        $data1=$this->HomeModel->getCategories();
        $data2=$this->HomeModel->getProducts();

        $this->view('home',$data1,$data2);

    }
}