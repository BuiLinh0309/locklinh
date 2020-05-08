<?php
session_start();
class HomeController extends Controller
{
    function index()
    {
        $param = [self::$datalist];
        $this->view("Home".DIRECTORY_SEPARATOR."index.phtml",$param);
        $this->view->render();

    }

    function contactUs()
    {
        $this->view("Home". DIRECTORY_SEPARATOR ."contact_us.phtml", []);
        $this->view->render();
    }

    function  indexedit($id){
        $param = [self::$datalist,$id];
        $this->view("Home".DIRECTORY_SEPARATOR."index.phtml",$param);
        $this->view->render();
    }
    function edit()
    {
        $sql="Update book set name='".$_GET['name']."',author='".$_GET['author']."',type='".$_GET['type']."',producer = '".$_GET['producer']."' WHERE id = ".$_GET['id'];
       if (call_user_func_array([new MyDatabase(),'updateData'],[$sql]))
           $_SESSION['capnhat']=true;
        header("Location: http://bookdemo.com");
    }
    function delete($id)
    {
        if (call_user_func_array([new MyDatabase(),'deleteData'],[$id]))
            $_SESSION['xoa']=true;
        header("Location: http://bookdemo.com");
    }
    function add(){
        if (call_user_func_array([new MyDatabase(),'addData'],[]))
        header("Location: http://bookdemo.com");
    }
    /*
    function add($object)
    {

    }

    function edit($id)
    {

    }

    function delete($id)
    {

    }
    */
}