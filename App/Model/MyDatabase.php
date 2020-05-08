<?php
class MyDatabase{
    private  $connect;
    private $servername = 'localhost';
    private $username='adminuser';
    private  $pass ='';
    private $database = 'myapp';
    function  __construct()
    {
            $this->_getConnect();
    }
    private function _getConnect(){
        $this->connect= mysqli_connect($this->servername,$this->username,$this->pass,$this->database);
        if(!$this->connect){
            echo "Kết nối database không thành công!";
        }
    }

    public function getlistBook(){
        if (!$this->connect) $this->_getConnect();
        $result =$this->connect->query('SELECT * FROM BOOK');
        return $result;
    }
    public function  updateData($sql){
        if (!$this->connect) $this->_getConnect();
        $result =$this->connect->query($sql);
        return $result;
    }
    public  function  deleteData($id){
        return $this->connect->query("Delete from book where id = '".$id."'");
    }

    public function addData(){
        return $this->connect->query("Insert into book values(ID,'TenSach','TacGia','TheLoai',
         'NXB')");
    }

}