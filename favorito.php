<?php

class favorito
{
    private $idcand;
    private $idofertatreball;

    function __construct($idcand, $idofertatreball)
    {
        $this -> idcand = $idcand;
        $this -> idofertatreball = $idofertatreball;
    }

    function __destruct()
    {
        $this -> idcand;
        $this -> idofertatreball;
    }

    function __toString()
    {
        return $this -> idcand.
        $this -> idofertatreball;
    }
    
    function getid(){
        return $this->idcand.
                $this->idofertatreball;
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