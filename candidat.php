<?php

class candidat
{
    private $idcand;
    private $cartapresentacion;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $anonacimiento;
    private $sexo;
    private $idotrosdatos;
    private $iddirec;
    private $email;

function __construct($idcand,$cartapresentacion,$nombre,$apellido1,$apellido2,$anonacimiento,$sexo,$idotrosdatos,$iddirec,$email)
{
    $this -> idcand= $idcand;
    $this -> cartapresentacion= $cartapresentacion;
    $this -> nombre= $nombre;
    $this -> apellido1= $apellido1;
    $this -> apellido2= $apellido2;
    $this -> anonacimiento= $anonacimiento;
    $this -> sexo= $sexo;
    $this -> idotrosdatos= $idotrosdatos;
    $this -> iddirec= $iddirec;
    $this -> email= $email;
}

function __destruct()
{   $this -> idcand;
    $this -> cartapresentacion;
    $this -> nombre;
    $this -> apellido1;
    $this -> apellido2;
    $this -> anonacimiento;
    $this -> sexo;
    $this -> idotrosdatos;
    $this -> iddirec;
    $this -> email;
    
}

function __toString()
{
    return $this -> idcand.
    $this -> cartapresentacion.
    $this -> nombre.
    $this -> apellido1.
    $this -> apellido2.
    $this -> anonacimiento.
    $this -> sexo.
    $this -> idotrosdatos.
    $this -> iddirec.
    $this -> email;
}
function getid(){
    return $this->idcand;
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