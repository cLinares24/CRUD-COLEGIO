<?php

if(isset($_POST['submit'])){
    if(isset($_POST['usr'])){
        include_once('ClassPoo.php');
    
        $user =$_POST['usr'];
        $pass =$_POST['pas'];
        $login = new Login();
        $login ->entrarDatos($user, $pass);
        $login ->logear();
        $response = $login->logear();
    
        if($response === "true"){
            header("location:../home.php");
            echo'<script language"javascript">alert("Bienvenido Usuario")</script>';
        } else{
            echo'<script language"javascript">alert("La cuenta no existe")</script>';
        }
    }
}