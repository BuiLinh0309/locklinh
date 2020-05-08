<?php


class Controller
{
    protected $view;
    protected $database;
    static  $datalist;

    function __construct()
    {
        self::$datalist = call_user_func_array([new MyDatabase(),'getlistBook'],[]);
    }

    protected function view($file,$data) {
        $this->view = new View($file, $data);
    }

}