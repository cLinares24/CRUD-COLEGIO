<?php
    if (isset($_REQUEST['submit'])){
        if (isset($_REQUEST['cuentaa'], $_REQUEST['destinatario'], $_REQUEST['dinero'])){
            include_once('data.php');
            $cuentaa = $_REQUEST['cuentaa'];
            $dinero = $_REQUEST['dinero'];
            $destinatario = $_REQUEST['destinatario'];
            $transferencia = new SQL();
            $transferencia -> Equalize($cuentaa, $destinatario, $dinero);
            $transferencia -> MandarDatos();
            
        }




    }
    
?>