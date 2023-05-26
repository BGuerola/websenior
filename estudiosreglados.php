<?php

class estudiosreglados
{
  private $idestreglados;
  private $nivel;
  private $titulo;
  private $fchainicio;
  private $fchanfin;
  private $centro;
  private $idcand;
  
  function __construct($idestreglados,$nivel,$titulo,$fchainicio,$fchanfin,$centro,$idcand,)
  {
    $this -> idestreglados= $idestreglados;
    $this -> nivel= $nivel;
    $this -> titulo=$titulo;
    $this -> fchainicio= $fchainicio;
    $this -> fchanfin= $fchanfin;
    $this -> centro= $centro;
    $this -> idcand= $idcand;
  }

  function __destruct()
  {
    $this -> idestreglados;
    $this -> nivel;
    $this -> titulo;
    $this -> fchainicio;
    $this -> fchanfin;
    $this -> centro;
    $this -> idcand;
  }

  function __toString()
  {
    return $this -> idestreglados.
    $this -> nivel.
    $this -> titulo.
    $this -> fchainicio.
    $this -> fchanfin.
    $this -> centro.
    $this -> idcand;
  }

  function getid(){
    return $this->idestreglados;
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