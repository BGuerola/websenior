<?php

class autenticacion
{
    public $email;
    public $contrasena;
    public $nom;
    public $tipo;

    public function __construct($email, $contrasena, $nom, $tipo)
     {
        echo $this -> email= $email;
        echo $this -> contrasena= $contrasena;
        echo $this -> nom= $nom;
        echo $this -> tipo= $tipo;
    }

    public function __toString()
    {
        return $this -> email.
        $this -> contrasena.
        $this -> nom.
        $this -> tipo;
    }

    public function __destruct() {
        $this -> email;
        $this -> contrasena;
        $this -> nom;
        $this -> tipo;
    }

    function getid(){

        return $this->email;
    }

    function consulta($datos){

    }
    
    function sqlinsertar(){
        return 'sql';
    }
    function sqlborrar(){
        return 'sql';
    }
    function sqlactualitzar(){
        return 'sql';
    }

}

?>