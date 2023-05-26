<?php

class puesto
{
private $idpuesto;
private $sector;
private $categoria;
private $nivel;

function __construct($idpuesto, $sector, $categoria, $nivel)
{
    $this-> idpuesto= $idpuesto;
    $this-> sector= $sector;
    $this-> categoria= $categoria;
    $this-> nivel= $nivel;
}

function __destruct()
{
    $this-> idpuesto;
    $this-> sector;
    $this-> categoria;
    $this-> nivel;
}

function __toString()
{
    return $this-> idpuesto.
        $this-> sector.
        $this-> categoria.
        $this-> nivel;

}

function getid(){
    return $this->idpuesto;
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