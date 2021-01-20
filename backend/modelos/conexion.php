<?php
class Conexion{
public function conectar(){
//$cnx = new PDO("mysql:host=sql108.byethost.com;dbname=b6_24196946_maquillaje","b6_24196946","soloyo99");

$cnx = new PDO("mysql:host=localhost;dbname=maquillaje","root","");
//var_dump($cnx);
return $cnx;
}
}
//$miCnx=new Conexion();
//$miCnx->conectar();

?>;