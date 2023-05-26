<?php

class ofertatrabajo
{
    private $idofertatreball;
    private $publicada;
    private $nompuesto;
    private $experienciamin;
    private $requisitos;
    private $estudiosminimos;
    private $residenciaen;
    private $conocnecesarios;
    private $funciones;
    private $personalacargo;
    private $vacantes;
    private $duracioncontrato;
    private $horario;
    private $CIF;
    private $idpuesto;
    private $idsal;

    function __construct(
        $idofertatreball, 
        $publicada,
        $nompuesto,
        $experienciamin,
        $requisitos,
        $estudiosminimos,
        $residenciaen,
        $conocnecesarios,
        $funciones,
        $personalacargo,
        $vacantes,
        $duracioncontrato,
        $horario,
        $CIF,
        $idpuesto,
        $idsal)
    {
        $this -> idofertatreball= $idofertatreball;
        $this -> publicada= $publicada;
        $this -> nompuesto= $nompuesto;
        $this -> experienciamin= $experienciamin;
        $this -> requisitos= $requisitos;
        $this -> estudiosminimos= $estudiosminimos;
        $this -> residenciaen= $residenciaen;
        $this -> conocnecesarios= $conocnecesarios;
        $this -> funciones= $funciones;
        $this -> personalacargo= $personalacargo;
        $this -> vacantes= $vacantes;
        $this -> duracioncontrato= $duracioncontrato;
        $this -> horario= $horario;
        $this -> CIF= $CIF;
        $this -> idpuesto= $idpuesto;
        $this -> idsal= $idsal;
    }

    function __destruct()
    {
        $this -> idofertatreball;
        $this -> publicada;
        $this -> nompuesto;
        $this -> experienciamin;
        $this -> requisitos;
        $this -> estudiosminimos;
        $this -> residenciaen;
        $this -> conocnecesarios;
        $this -> funciones;
        $this -> personalacargo;
        $this -> vacantes;
        $this -> duracioncontrato;
        $this -> horario;
        $this -> CIF;
        $this -> idpuesto;
        $this -> idsal;
    }

    function __toString()
    {
        return 
        $this -> idofertatreball.
        $this -> publicada.
        $this -> nompuesto.
        $this -> experienciamin.
        $this -> requisitos.
        $this -> estudiosminimos.
        $this -> residenciaen.
        $this -> conocnecesarios.
        $this -> funciones.
        $this -> personalacargo.
        $this -> vacantes.
        $this -> duracioncontrato.
        $this -> horario.
        $this -> CIF.
        $this -> idpuesto.
        $this -> idsal;
    }

    function getid(){
        return $this->idofertatreball;
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