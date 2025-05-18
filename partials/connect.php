<?php
class database
{
    private $dbserver="localhost";
    private $dbuser="root";
    private $dbpassword="";
    private $dbname="dataa";
    protected $conn;

    public function __construct(){
        try{
            $dsn="mysql:host={This->dbserver}; dbname={this->dbname}; charset=utf8";
            $options=array(PDO::ATTR_PERSISTENT);;
            $this->conn=new PDO($dsn,$this->dbuser,$this->dbpassword,$options);
        }catch(PDOException $e){
            echo "connection Error".$e->getMessage();
        }
    }
}
?>