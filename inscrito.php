<?php

class inscrito
{
    private $idicand;
    private $idofertatreball;
    private $idestado;


function __construct($idicand, $idofertatreball, $idestado)
{
    $this -> idicand= $idicand;
    $this -> idofertatreball= $idofertatreball;
    $this -> idestado= $idestado;
}

function __destruct()
{
    $this -> idicand;
    $this -> idofertatreball;
    $this -> idestado;
}

function __toString()
{
    return $this -> idicand.
        $this -> idofertatreball.
        $this -> idestado;
}

function getid(){
    return $this->idicand;
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