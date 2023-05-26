<?php

class direccion
{
    private $iddirec;
    private $localidad;
    private $calle;
    private $provincia;
    private $codigopostal;

    function __construct($iddirec,$localidad,$calle,$provincia,$codigopostal)
    {
        $this -> iddirec= $iddirec;
        $this -> localidad= $localidad;
        $this -> calle= $calle;
        $this -> provincia= $provincia;
        $this -> codigopostal= $codigopostal;
    }

    function __destruct()
    {
        $this -> iddirec;
        $this -> localidad;
        $this -> calle;
        $this -> provincia;
        $this -> codigopostal; 
    }

    public function __toString()
    {
        return  $this -> iddirec
        .$this -> localidad
        .$this -> calle
        .$this -> provincia
        .$this -> codigopostal;
    }

function getid(){
    return $this->iddirec;
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