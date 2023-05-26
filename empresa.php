<?php
class empresa
{
private $CIF;
private $logo;
private $nombreEmp;
private $apellido1Cont;
private $apellido2Cont;
private $telfEmpr;
private $empresaSelec;
private $descripEmp;
private $id_direc;
private $email;

function __construct($CIF, $logo, $nombreEmp, $apellido1Cont, $apellido2Cont, $telfEmpr, $empresaSelec, $descripEmp, $id_direc, $email)
{
    $this-> CIF = $CIF;
    $this-> logo = $logo;
    $this-> nombreEmp= $nombreEmp;
    $this-> apellido1Cont= $apellido1Cont;
    $this-> apellido2Cont= $apellido2Cont;
    $this-> telfEmpr= $telfEmpr;
    $this-> empresaSelec= $empresaSelec;
    $this-> descripEmp= $descripEmp;
    $this-> id_direc= $id_direc;
    $this-> email= $email;
}

function __destruct()
{
    $this-> CIF;
    $this-> logo;
    $this-> nombreEmp;
    $this-> apellido1Cont;
    $this-> apellido2Cont;
    $this-> telfEmpr;
    $this-> empresaSelec;
    $this-> descripEmp;
    $this-> id_direc;
    $this-> email;
}

function __toString()
{
    return $this-> CIF.
    $this-> logo.
    $this-> nombreEmp.
    $this-> apellido1Cont.
    $this-> apellido2Cont.
    $this-> telfEmpr.
    $this-> empresaSelec.
    $this-> descripEmp.
    $this-> id_direc.
    $this-> email;
}


function getid(){
    return $this->CIF;
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