<?php
class Persona{
    //atributos
    public $nombre;
    public $apellido;

    //constructor
    public function __construct(){
        $this->nombre="Hola";
    }

    //Metodos

    public function saludar($nombre){
        echo"Hola como estas? ".$nombre;
    }
}



?>