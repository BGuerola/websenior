<?php

class conocimientos
{
    private $idconoc;
    private $comptpers;
    private $comptsoc;
    private $comptdig;
    private $idcand;
    private $idofertatreball;

    function __construct($idconoc,$comptpers,$comptsoc,$comptdig,$idcand,$idofertatreball)
    {
        $this -> idconoc=   $idconoc;
        $this -> comptpers= $comptpers;
        $this -> comptsoc=  $comptsoc;
        $this -> comptdig=  $comptdig;
        $this -> idcand=    $idcand;
        $this -> idofertatreball=  $idofertatreball;
    }

    function __destruct()
    {
        $this -> idconoc;
        $this -> comptpers;
        $this -> comptsoc;
        $this -> comptdig;
        $this -> idcand;
        $this -> idofertatreball;
    }

    function __toString()
    {
        return $this -> idconoc.
        $this -> comptpers.
        $this -> comptsoc.
        $this -> comptdig.
        $this -> idcand.
        $this -> idofertatreball;
    }


    function getid(){
        return $this->idconoc;
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