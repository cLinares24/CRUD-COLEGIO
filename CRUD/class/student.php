<?php
require_once('connection.php');
class Student extends Connection{
    public function __construct(){
        //Referencia de la clase connection

        parent::__construct();
    }

    //Listar Estudiantes
    public function getStudent0(){
        $result = $this->con->query('SELECT * FROM student');
        //Convertir a tipo Array $result
        $liststudent = $result-> fetch_all(MYSQLI_ASSOC);
        return $liststudent;
    }
    //Listar estudiante almacenado
    public function getStudent1(){
        $result = $this->con->query('CALL spliststundent');
        //Convertir a tipo Array $result
        $liststudent = $result-> fetch_all(MYSQLI_ASSOC);
        return $liststudent;
    }
    //funcion para insertar estudiante
    public function insertStudent($code, $dni, $name, $lastname, $email, $cellphone){
       $insertar = $this ->con->query("CALL spinsertstudent('$code', '$dni', '$name', '$lastname', '$email', '$cellphone')");
       // $insertar = $this ->con->query('".$code."', '".$dni."', '".$name."', '".$lastname."', '".$email."', '".$cellphone."');
        header("Location: list.php");
    }

    public function deleteStudent($code){
        $this ->con->query("CALL spdeletestudent('$code')");
        $msj = "El estudiante fué eliminado satisfactoriamente";
        header("Location: ../student/list.php?msj=$msj");

    }


    public function searchStudent($code){
        $result = $this->con->query("CALL spsearchstudent('$code')");
        $list = $result->fetch_all(MYSQLI_ASSOC);
        return $list;

    }


    public function updateStudent($code, $dni, $name, $lastname, $email, $cellphone){
        $actualizar = $this ->con->query("CALL spupdatestudent('$code', '$dni', '$name', '$lastname', '$email', '$cellphone')");
        // $insertar = $this ->con->query('".$code."', '".$dni."', '".$name."', '".$lastname."', '".$email."', '".$cellphone."');
        $msj = "El Estudiante fué actualizado satisfactoriamente";
        
        header("Location: list.php?msj=$msj");
    }

}