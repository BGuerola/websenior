<?php

class otrosdatos
{
    private $idotrosdatos;
    private $situacionlaboral;
    private $vehiculo;
    private $nacionalidad;
    private $permisotrabajo;
    private $autonomo;


    function __construct($idotrosdatos, $situacionlaboral, $vehiculo, $nacionalidad, $permisotrabajo, $autonomo)
    {
        $this -> idotrosdatos= $idotrosdatos;
        $this -> situacionlaboral= $situacionlaboral;
        $this -> vehiculo= $vehiculo;
        $this -> nacionalidad= $nacionalidad;
        $this -> permisotrabajo= $permisotrabajo;
        $this -> autonomo= $autonomo;
    }

    function __destruct()
    {
        $this -> idotrosdatos;
        $this -> situacionlaboral;
        $this -> vehiculo;
        $this -> nacionalidad;
        $this -> permisotrabajo;
        $this -> autonomo;
    }

    function __toString()
    {
        return $this -> idotrosdatos.
        $this -> situacionlaboral.
        $this -> vehiculo.
        $this -> nacionalidad.
        $this -> permisotrabajo.
        $this -> autonomo;
    }

    function getid(){
        return $this->idotrosdatos;
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