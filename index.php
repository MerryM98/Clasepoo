<?php
//Programación orientada a  objetos
include('Persona.php');
//creación de un objeto o instancia de la clase

$MarilimM = new Persona();
echo($MarilimM->nombre );
$MarilimM ->nombre="Merilian";
echo("<br>");
echo($MarilimM->nombre );
echo("<br>");
$nombres= array("merilian","Mejia");
echo $nombres[0];
echo("<br>");

$MarilimM->saludar($nombres[0]);

?>