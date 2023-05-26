<?php

class experiencia
{
    private $idexp;
    private $nomemprexp;
    private $nompuesto;
    private $CIF;
    private $idsal;
    private $fchainicio;
    private $fechafin;
    private $personalacargo;
    private $idcand;

function __construct($idexp,$nomemprexp,$nompuesto,$CIF,$idsal,$fchainicio,$fechafin,$personalacargo,$idcand)
{
    $this -> idexp = $idexp;
    $this -> nomemprexp = $nomemprexp;
    $this -> nompuesto = $nompuesto;
    $this -> CIF = $CIF;
    $this -> idsal = $idsal;
    $this -> fchainicio = $fchainicio;
    $this -> fechafin = $fechafin;
    $this -> personalacargo = $personalacargo;
    $this -> idcand = $idcand;
}

function __destruct()
{
    $this -> idexp;
    $this -> nomemprexp;
    $this -> nompuesto;
    $this -> CIF;
    $this -> idsal;
    $this -> fchainicio;
    $this -> fechafin;
    $this -> personalacargo;
    $this -> idcand;
}

function __toString()
{
    return $this -> idexp.
    $this -> nomemprexp.
    $this -> nompuesto.
    $this -> CIF.
    $this -> idsal.
    $this -> fchainicio.
    $this -> fechafin.
    $this -> personalacargo.
    $this -> idcand;
}


function getid(){
    return $this->idexp;
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