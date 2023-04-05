create database cajero;
use cajero;

CREATE TABLE usuarios(
	idusuario INT PRIMARY KEY auto_increment,
    nombre VARCHAR(100),
    saldo double,
    tipo_cuenta boolean
);

INSERT INTO usuarios (idusuario, nombre, saldo, tipo_cuenta) VALUES 
 ('2', 'Paula', '100', '0');  

UPDATE usuarios SET saldo='1000' WHERE idusuario=0;

SELECT * FROM usuarios;



