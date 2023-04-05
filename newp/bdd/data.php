<?php
class SQL{

    public $cuentaAId = 0;

    public $destinatarioId = 0;

    public $monto = 0;

    function Equalize($variable1, $variable2, $variable3){
        $this->cuentaAId = $variable1;
        $this->destinatarioId = $variable2;
        $this->monto = $variable3;
    }

    function MandarDatos(){
        $servername = "127.0.0.1:3306";
        $database   = "cajero";
        $username   = "root";
        $password   = "root";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) 
        {
            die("Hubo un error en la conexión:  " . mysqli_connect_error());
        }


        //Obtener Saldo
        $consulta = "SELECT saldo FROM usuarios";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $saldo[] = $row['saldo'];
            }
        }
        
        //Valores
        $saldoA = $saldo[0];
        $saldoB = $saldo[1];
        $monto = $this->monto;

        $cuentaAId = $this->cuentaAId;
        $destinatarioId = $this->destinatarioId;

        if ($monto > $saldoA) {
            echo "<script language='javascript'>
                        alert('No se dispone de dicha cantidad');
                        </script>";
        } else {
            $totalA = $saldoA - $monto;
            $totalDestinatario = $saldoB + $monto;
            $sql = "UPDATE usuarios SET saldo='$totalA' WHERE idusuario='$cuentaAId';";
            if (mysqli_query($conn, $sql)) {
                $sql = "UPDATE usuarios SET saldo='$totalDestinatario' WHERE idusuario='$destinatarioId';";
                if (mysqli_query($conn, $sql)) {
                    echo "<script language='javascript'>
            alert('La transferencia se ha realizado satisfactoriamente ');
            </script>";
             }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }





}
