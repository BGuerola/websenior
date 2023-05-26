<?php

class idiomas
{
    private $ididiomas;
    private $nivel;
    private $idcand;
    private $idofertatreball;


    function __construct($ididiomas, $nivel, $idcand, $idofertatreball)

    {
        $this -> ididiomas= $ididiomas;
        $this -> nivel= $nivel;
        $this -> idcand= $idcand;
        $this -> idofertatreball= $idofertatreball;   
    }

    function __destruct()
    {
        $this -> ididiomas;
        $this -> nivel;
        $this -> idcand;
        $this -> idofertatreball;   
    }

    function __toString()
    {
        return $this -> ididiomas.
        $this -> nivel.
        $this -> idcand.
        $this -> idofertatreball; 
    }

    function getid(){
        return $this->ididiomas;
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