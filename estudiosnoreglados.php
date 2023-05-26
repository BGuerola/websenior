<?php

class estudiosnoreglados
{
  private $idestnoreglados;
  private $curso;
  private $fchainicio;
  private $fchanfin;
  private $centro;
  private $idcand;
  
  function __construct($idestnoreglados, $curso,$fchainicio,$fchanfin,$centro,$idcand,)
  {
    $this -> idestnoreglados= $idestnoreglados;
    $this -> curso= $curso;
    $this -> fchainicio= $fchainicio;
    $this -> fchanfin= $fchanfin;
    $this -> centro= $centro;
    $this -> idcand= $idcand;
  }

  function __destruct()
  {
    $this -> idestnoreglados;
    $this -> curso;
    $this -> fchainicio;
    $this -> fchanfin;
    $this -> centro;
    $this -> idcand;
  }

function __toString()
{
  return $this -> idestnoreglados.
  $this -> curso.
  $this -> fchainicio.
  $this -> fchanfin.
  $this -> centro.
  $this -> idcand;
}

function getid(){
  return $this->idestnoreglados;
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