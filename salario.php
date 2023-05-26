<?php

class salario
{
    private $idsal;
    private $tiposalario;
    private $maxsalario;
    private $minsalario;
    private $beneficiossociales;

function __construct($idsal, $tiposalario, $maxsalario,$minsalario, $beneficiossociales)
{
    $this -> idsal = $idsal;
    $this -> tiposalario = $tiposalario;
    $this -> maxsalario = $maxsalario;
    $this -> minsalario = $minsalario;
    $this -> beneficiossociales = $beneficiossociales; 
}

function __destruct()
{
    $this -> idsal;
    $this -> tiposalario;
    $this -> maxsalario;
    $this -> minsalario;
    $this -> beneficiossociales; 
}

function __toString()
{
    return $this -> idsal.
    $this -> tiposalario.
    $this -> maxsalario.
    $this -> minsalario.
    $this -> beneficiossociales; 
}

function getid(){
    return $this->idsal;
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