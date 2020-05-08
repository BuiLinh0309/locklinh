<?php

class App
{
    protected $directory = "Home";
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->preprocess();
        if (file_exists(CONTROLLER . $this->controller .".php")) {
            if (method_exists(new $this->controller, $this->action)) {
                call_user_func_array(array(new $this->controller,$this->action),$this->params);
            }
        }
    }

    public function preprocess()
    {
        $request = trim($_SERVER['REQUEST_URI'],"/");
        if (!empty($request)) {
            $url = explode("/",$request);
            $temp = ucfirst(strtolower(array_shift($url)));
            $this->directory = $temp; // Lấy ra thư mục

            $this->controller = isset($url[0]) ? $temp . 'Controller' : 'HomeController';
            if(isset($url[0]))
            $this->action = isset($url[0]) ? strtolower(array_shift($url)) : 'index';
            $this->params = $url;
        }
    }
}