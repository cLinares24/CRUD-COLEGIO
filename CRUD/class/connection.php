<?php
include_once("../config/config.php");
class Connection{
    protected $con;

    public function __construct(){
        $this->con = new mysqli(host, user, password, database);
        if($this->con->connect_errno){
            return "Hubo un error en la conexión con la base de datos";
        }
    }

}