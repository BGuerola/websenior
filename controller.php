<?php

require_once 'DAO.php';

//lectura AUTENTICACION per un id
//$idaut="bgt@gmail.com";

function getOneAutenticacion($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT `email`, `contrasena`, `nom`, `tipo` FROM AUTENTICACION WHERE `email` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
        //      print_r($datos);
        //      $valores=$datos[0];
        //      echo $valores["email"];
        //      echo $valores["contrasena"];
        //      echo $valores["nom"];
        //      echo $valores["tipo"];

        } else {
            echo "no hi ha dades";
        }

        $conn ->close();
}

//insertar un nou registre AUTENTICACION
/* $arrayaut= array(
        "email"=>"bguerola@hotmail.com",
        "contrasena"=>"1234",
        "nom"=>"Bernat",
        "tipo"=>"candidato"); */

function insertOneAutenticacion($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO AUTENTICACION (email, contrasena, nom, tipo) VALUES (:email, :contrasena, :nom, :tipo);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre AUTENTICACION
//$idaut="bguerola@hotmail.com";
function deleteOneAutentication($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM AUTENTICACION WHERE `email`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre AUTENTICACION
/* $idaut="bguerola@hotmail.com";
$arrayaut= array(
        "email"=>"bguerola@hotmail.com",
        "contrasena"=>"1234",
        "nom"=>"Berni",
        "tipo"=>"empresa"); */
function actualitzarAutenticacion($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM AUTENTICACION WHERE `email`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO AUTENTICACION (email, contrasena, nom, tipo) VALUES (:email, :contrasena, :nom, :tipo);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id CANDIDATO
//$idcand="4";

function getOneCandidat($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM CANDIDATO WHERE `id_cand` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre CANDIDATO
/* $arraycand= array(
        "carta_presentacio"=>"Busco trabajo que me guste y bien pagado",
        "nom"=>"Bernat",
        "cognom1"=>"Guerola",
        "cognom2"=>"Trull",
        "any_neixement"=>"1968-07-20",
        "sexe"=>"hombre",
        "id_otrosdatos"=>"1",
        "id_direc"=>"1",
        "email"=>"bgt@gmail.com"); */

function insertOneCandidat($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO CANDIDATO (carta_presentacio, nom, cognom1, cognom2, any_neixement, sexe, id_otrosdatos, id_direc, email
        ) VALUES (:carta_presentacio, :nom, :cognom1, :cognom2, :any_neixement, :sexe, :id_otrosdatos, :id_direc, :email);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre CANDIDATO
//$idcand="5";
function deleteOneCandidat($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM CANDIDATO WHERE `id_cand`= "."'".$id."'".";";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre CANDIDATO
/* $idcand="7";
$arraycand= array(
        "carta_presentacio"=>"Busco trabajo Y YA",
        "nom"=>"Bernat",
        "cognom1"=>"Guerola",
        "cognom2"=>"Trull",
        "any_neixement"=>"1968-07-20",
        "sexe"=>"hombre",
        "id_otrosdatos"=>"1",
        "id_direc"=>"1",
        "email"=>"bgt@gmail.com"); */
function actualitzarCandidat($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM CANDIDATO WHERE `id_cand`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO CANDIDATO (carta_presentacio, nom, cognom1, cognom2, any_neixement, sexe, id_otrosdatos, id_direc, email
        ) VALUES (:carta_presentacio, :nom, :cognom1, :cognom2, :any_neixement, :sexe, :id_otrosdatos, :id_direc, :email);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id CONOCIMIENTOS
$idcono="1";

function getOneConoc($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM CONOCIMIENTOS WHERE `id_conoc` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre CONOCIMIENTOS
/* $araycono=array(
        "id_conoc"=>null,
        "compt_pers"=>"Trabajo en equipo",
        "compt_soc"=>"Escucha activa",
        "compt_dig"=>"Dominio de programas informáticos profesionales y redes sociales",
        "id_cand"=>"8",
        "id_ofertatreball"=>"2"); */

function insertOneConoc($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO CONOCIMIENTOS (id_conoc, compt_pers, compt_soc, compt_dig, id_cand,id_ofertatreball) 
        VALUES (:id_conoc, :compt_pers, :compt_soc, :compt_dig, :id_cand,:id_ofertatreball);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre CONOCIMIENTOS
//$id="bguerola@hotmail.com";
function deleteOneConoc($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM CONOCIMIENTOS WHERE `id_conoc`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre CONOCIMIENTOS
/* $idcono="8";
$arraycono= array(
        "id_conoc"=>null,
        "compt_pers"=>"Trabajo en equipo",
        "compt_soc"=>"Escucha activa",
        "compt_dig"=>"Dominio de programas informáticos profesionales y redes sociales",
        "id_cand"=>"8",
        "id_ofertatreball"=>"2"); */
function actualitzarConoc($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM CONOCIMIENTOS WHERE `id_conoc`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO CONOCIMIENTOS (id_conoc, compt_pers, compt_soc, compt_dig, id_cand,id_ofertatreball) 
        VALUES (:id_conoc, :compt_pers, :compt_soc, :compt_dig, :id_cand,:id_ofertatreball);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id DIRECCION
//$iddirec="1";

function getOneDirec($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM DIRECCION WHERE `id_direc` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }

        $conn ->close();
}

//insertar un nou registre DIRECCION
// $arraydirec= array(
//         "id_direc"=>null,
//         "localidad"=>"Algemesi",
//         "calle"=>"Sant Vicente",
//         "provincia"=>"Valencia",
//         "codigo_postal"=>"46480");
        
function insertOneDirec($array)
{
        echo "insertant direccio";
        $conn = new DAO();
        $sqlinsert = "INSERT INTO DIRECCION (id_direc, localidad, calle, provincia, codigo_postal) VALUES (:id_direc, :localidad, :calle, :provincia, :codigo_postal);";
        $conn->insert($sqlinsert, $array);
        $conn ->close();
}

//esborrar un registre DIRECCION
$iddirec="3";
function deleteOneDirec($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM DIRECCION WHERE `id_direc`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre DIRECCION
/* $iddirec="2";
$arraydirec= array(
        "id_direc"=>null,
        "localidad"=>"Algemesi",
        "calle"=>"Sant Vicente",
        "provincia"=>"Valencia",
        "codigo_postal"=>"46480"); */
function actualitzarDirec($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM DIRECCION WHERE `id_direc`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO DIRECCION (id_direc, localidad, calle, provincia, codigo_postal) VALUES (:id_direc, :localidad, :calle, :provincia, :codigo_postal);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id EMPRESA
//$idemp="20804927";

function getOneEmp($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM EMPRESA WHERE `CIF` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre EMPRESA
// $arrayemp= array(
//         "CIF"=>"22865289J",
//         "logo"=>"Logo_nou",
//         "nombreEmp"=>"Just",
//         "nombreCont"=>"Berni",
//         "apellido1Cont"=>"Querol",
//         "apellido2Cont"=>"Just",
//         "telfEmpre"=>"647680752",
//         "empresaSelec"=>"no",
//         "descripEmp"=>"Dump firm",
//         "id_direc"=>"4",
//         "email"=>"bguerola@hotmail.com");

function insertOneEmp($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO EMPRESA (CIF, logo, nombreEmp, nombreCont, apellido1Cont, apellido2Cont, telfEmpre, empresaSelec, descripEmp, id_direc, email) 
        VALUES (:CIF, :logo, :nombreEmp, :nombreCont, :apellido1Cont, :apellido2Cont, :telfEmpre, :empresaSelec, :descripEmp, :id_direc, :email)";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre EMPRESA
//$idemp="22865289J";
function deleteOneEmp($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM EMPRESA WHERE `CIF`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre EMPRESA
/* $idemp="22865289J";
$arrayemp= array(
        "CIF"=>"22865289J",
        "logo"=>"Logo_nou",
        "nombreEmp"=>"Just",
        "nombreCont"=>"Berni",
        "apellido1Cont"=>"Querol",
        "apellido2Cont"=>"Just",
        "telfEmpre"=>"647680752",
        "empresaSelec"=>"no",
        "descripEmp"=>"Second Dump firm",
        "id_direc"=>"4",
        "email"=>"bguerola@hotmail.com"); */
function actualitzarEmp($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM EMPRESA WHERE `CIF`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO EMPRESA (CIF, logo, nombreEmp, nombreCont, apellido1Cont, apellido2Cont, telfEmpre, empresaSelec, descripEmp, id_direc, email) 
        VALUES (:CIF, :logo, :nombreEmp, :nombreCont, :apellido1Cont, :apellido2Cont, :telfEmpre, :empresaSelec, :descripEmp, :id_direc, :email)";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id ESTUDIOS_NO_REGLADOS
//$idestnr="1";

function getOneEstNReg($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM ESTUDIOS_NO_REGLADOS WHERE `id_estnoreglados` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }

        $conn ->close();
}

//insertar un nou registre ESTUDIOS_NO_REGLADOS
// $arrayestnr= array(
//         "id_estnoreglados"=>null,
//         "curso"=>"Curso Seguridad Social y Derecho Laboral",
//         "fchaInicio"=>"2005-09-1",
//         "fchaFin"=>"2006-06-1",
//         "Centro"=> "CEF",
//         "id_cand"=>"8");

function insertOneEstNReg($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO ESTUDIOS_NO_REGLADOS (id_estnoreglados, curso, fchaInicio, fchaFin, Centro, id_cand) 
        VALUES (:id_estnoreglados, :curso, :fchaInicio, :fchaFin, :Centro, :id_cand);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre ESTUDIOS_NO_REGLADOS
//$idestnr="1";
function deleteOneEstNReg($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM ESTUDIOS_NO_REGLADOS WHERE `id_estnoreglados`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre ESTUDIOS_NO_REGLADOS
/* $idestnr="2";
$arrayestnr= array(
        "id_estnoreglados"=>null,
        "curso"=>"Curso Seguridad Social y Derecho Laboral",
        "fchaInicio"=>"2005-09-1",
        "fchaFin"=>"2006-06-1",
        "Centro"=> "CEF",
        "id_cand"=>"8"); */
function actualitzarEstNReg($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM ESTUDIOS_NO_REGLADOS WHERE `id_estnoreglados`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO ESTUDIOS_NO_REGLADOS (id_estnoreglados, curso, fchaInicio, fchaFin, Centro, id_cand) 
        VALUES (:id_estnoreglados, :curso, :fchaInicio, :fchaFin, :Centro, :id_cand);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}


//lectura per un id ESTUDIOS_REGLADOS
//$idestr="1";

function getOneEstReg($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM ESTUDIOS_REGLADOS WHERE `id_estreglados` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre ESTUDIOS_REGLADOS
// $arrayestr= array(
//         "id_estreglados"=>null,
//         "nivel"=>"Estudios Universitarios",
//         "titulo"=>"Curso Seguridad Social y Derecho Laboral",
//         "fchaInicio"=>"2005-09-1",
//         "fchaFin"=>"2006-06-1",
//         "Centro"=> "CEF",
//         "id_cand"=>"8");

function insertOneEstReg($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO ESTUDIOS_REGLADOS (id_estreglados, nivel, titulo, fchaInicio, fchaFin, Centro, id_cand) 
        VALUES (:id_estreglados, :nivel, :titulo, :fchaInicio, :fchaFin, :Centro, :id_cand);";
        $conn->insert($sqlinsert, $array);     
        $conn ->close();
}

//esborrar un registre ESTUDIOS_REGLADOS
//$idestr="1";
function deleteOneEstReg($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM ESTUDIOS_REGLADOS WHERE `id_estreglados`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre ESTUDIOS_REGLADOS
// $idestr="5";
// $arrayestr= array(
//         "id_estreglados"=>null,
//         "nivel"=>"Estudios Universitarios",
//         "titulo"=>"Curso Seguridad Social y Derecho Laboral",
//         "fchaInicio"=>"2005-09-1",
//         "fchaFin"=>"2006-06-1",
//         "Centro"=> "CEF",
//         "id_cand"=>"8");
function actualitzarEstReg($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM ESTUDIOS_REGLADOS WHERE `id_estreglados`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO ESTUDIOS_REGLADOS (id_estreglados, nivel, titulo, fchaInicio, fchaFin, Centro, id_cand) 
        VALUES (:id_estreglados, :nivel, :titulo, :fchaInicio, :fchaFin, :Centro, :id_cand);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id EXPERIENCIA
//$idexp="1";

function getOneExp($id) 
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM EXPERIENCIA WHERE `id_exp` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre EXPERIENCIA
// $arrayexp= array(
//         "id_exp"=>null,
//         "nomEmpr_exp"=>"VELARTE",
//         "nomPuesto"=>"Responsable de RRHH",
//         "funciones"=>"Muchas y mal pagadas",
//         "CIF"=>"B25458792",
//         "id_sal"=>"1",
//         "fchaInicio"=>"2005-09-1",
//         "fchaFin"=>"2006-06-1",
//         "personal_a_cargo"=>"4",
//         "id_cand"=>"8");

function insertOneExp($array) 
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO EXPERIENCIA (id_exp, nomEmpr_exp, nomPuesto, funciones, CIF, id_sal, fchaInicio, fchaFin, personal_a_cargo, id_cand) 
        VALUES (:id_exp, :nomEmpr_exp, :nomPuesto, :funciones, :CIF, :id_sal, :fchaInicio, :fchaFin, :personal_a_cargo, :id_cand);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre EXPERIENCIA
//$idexp="1";
function deleteOneExp($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM EXPERIENCIA WHERE `id_exp`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre EXPERIENCIA
// $idexp="2";
// $arrayexp= array(
//         "id_exp"=>null,
//         "nomEmpr_exp"=>"VELARTE",
//         "nomPuesto"=>"Responsable de RRHH",
//         "funciones"=>"Muchas y mal pagadas",
//         "CIF"=>"B25458792",
//         "id_sal"=>"1",
//         "fchaInicio"=>"2005-09-1",
//         "fchaFin"=>"2006-06-1",
//         "personal_a_cargo"=>"4",
//         "id_cand"=>"8");
function actualitzarExp($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM EXPERIENCIA WHERE `id_exp`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO EXPERIENCIA (id_exp, nomEmpr_exp, nomPuesto, funciones, CIF, id_sal, fchaInicio, fchaFin, personal_a_cargo, id_cand) 
        VALUES (:id_exp, :nomEmpr_exp, :nomPuesto, :funciones, :CIF, :id_sal, :fchaInicio, :fchaFin, :personal_a_cargo, :id_cand);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id FAVORITO
// $idfav1="8";
// $idfav2="2";

function getOneFav($id,$id2)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM FAVORITO WHERE `id_cand` = "."'".$id."'"."AND `id_ofertatreball` = "."'".$id2."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre FAVORITO
$arrayfav= array(
        "id_cand"=>"8",
        "id_ofertatreball"=>"2");

function insertOneFav($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO FAVORITO (id_cand, id_ofertatreball) VALUES (:id_cand, :id_ofertatreball) ;";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre FAVORITO
// $idfav1="8";
// $idfav2="2";
function deleteOneFav($id,$id2){
        $conn = new DAO();
        $sqldelete = "DELETE FROM FAVORITO WHERE `id_cand` = "."'".$id."'"."AND `id_ofertatreball` = "."'".$id2."';";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre FAVORITO
// $idfav1="8";
// $idfav2="2";
// $arrayfav= array(
//         "id_cand"=>"9",
//         "id_ofertatreball"=>"2");
function actualitzarFav($id,$id2,$array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM FAVORITO WHERE `id_cand` = "."'".$id."'"."AND `id_ofertatreball` = "."'".$id2."';";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO FAVORITO (id_cand, id_ofertatreball) VALUES (:id_cand, :id_ofertatreball) ;";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id IDIOMAS
//$ididi="1";

function getOneIdiom($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM IDIOMAS WHERE `id_idiomas` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }

        $conn ->close();
}

//insertar un nou registre IDIOMAS
/* $arrayidi= array(
        "id_idiomas"=>null,
        "Nivel"=>"B2",
        "id_cand"=>"9",
        "id_ofertatreball"=>"2"); */

function insertOneIdiom($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO IDIOMAS (id_idiomas, Nivel, id_cand, id_ofertatreball) VALUES (:id_idiomas, :Nivel, :id_cand, :id_ofertatreball) ;";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre IDIOMAS
//$ididi="1";
function deleteOneIdiom($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM IDIOMAS WHERE `id_idiomas`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre IDIOMAS
// $ididi="2";
// $arrayidi= array(
//         "id_idiomas"=>null,
//         "Nivel"=>"B1",
//         "id_cand"=>"9",
//         "id_ofertatreball"=>"2");
function actualitzarIdiom($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM IDIOMAS WHERE `id_idiomas`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO IDIOMAS (id_idiomas, Nivel, id_cand, id_ofertatreball) VALUES (:id_idiomas, :Nivel, :id_cand, :id_ofertatreball) ;";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id INSCRITO
// $idins1="9";
// $idins2="2";

function getOneIns($id1, $id2)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM INSCRITO WHERE `id_cand` = "."'".$id1."'"."AND `id_ofertatreball` = "."'".$id2."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }

        $conn ->close();
}

//insertar un nou registre INSCRITO
// $arrayins= array(
//         "id_cand"=>"9",
//         "id_ofertatreball"=>"2",
//         "estado"=>"Inscrito");

function insertOneInsc($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO INSCRITO (id_cand, id_ofertatreball, estado) VALUES (:id_cand, :id_ofertatreball, :estado);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre INSCRITO
// $idins1="9";
// $idins2="2";
function deleteOneIns($id1, $id2){
        $conn = new DAO();
        $sqldelete = "DELETE FROM INSCRITO WHERE `id_cand` = "."'".$id1."'"."AND `id_ofertatreball` = "."'".$id2."';";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre INSCRITO
/* $idins1="9";
$idins2="2";
$arrayins= array(
        "id_cand"=>"9",
        "id_ofertatreball"=>"2",
        "estado"=>"Procesando"); */
function actualitzarInsc($id1, $id2, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM INSCRITO WHERE `id_cand` = "."'".$id1."'"."AND `id_ofertatreball` = "."'".$id2."';";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO INSCRITO (id_cand, id_ofertatreball, estado) VALUES (:id_cand, :id_ofertatreball, :estado);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id OFERTA_TRABAJO
//$idoftr="2";

function getOneOferTre($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM OFERTA_TRABAJO WHERE `id_ofertatreball` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }

        $conn ->close();
}

//insertar un nou registre OFERTA_TRABAJO
// $arrayoftr= array(
//         "id_ofertatreball"=>null,
//         "publicada"=>"2023-05-23",
//         "nomPuesto"=>"Gerente",
//         "experiencia_min"=>"3 años",
//         "requisitos"=>"todos y más",
//         "estudios_minimos"=>"Los que tengas",
//         "residencia_en"=>"Valladolid",
//         "Conoc_necesarios"=>"Microinformaática",
//         "funciones"=>"Una, dos. tes y cuatro",
//         "personal_a_cargo"=>"12",
//         "vacantes"=>"1",
//         "duracion_contrato"=>"6 meses",
//         "horario"=>"intensiva",
//         "CIF"=>"20804927",
//         "id_puesto"=>1,
//         "id_sal"=>1);
  
function insertOneOferTre($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO OFERTA_TRABAJO (`id_ofertatreball`, `publicada`, `nomPuesto`, `experiencia_min`, `requisitos`, `estudios_minimos`, `residencia_en`, `Conoc_necesarios`, `funciones`, `personal_a_cargo`, `vacantes`, `duracion_contrato`, `horario`, `CIF`, `id_puesto`, `id_sal`) 
        VALUES (:id_ofertatreball, :publicada, :nomPuesto, :experiencia_min, :requisitos, :estudios_minimos, :residencia_en, :Conoc_necesarios, :funciones, :personal_a_cargo, :vacantes, :duracion_contrato, :horario, :CIF, :id_puesto, :id_sal);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre OFERTA_TRABAJO
//$idoftr="3";
function deleteOneOferTre($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM OFERTA_TRABAJO WHERE `id_ofertatreball`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre OFERTA_TRABAJO
/* $idoftr="4";
$arrayoftr= array(
        "id_ofertatreball"=>null,
        "publicada"=>"2023-05-23",
        "nomPuesto"=>"Gerente",
        "experiencia_min"=>"3 años",
        "requisitos"=>"todos y más",
        "estudios_minimos"=>"Los que tengas",
        "residencia_en"=>"Valladolid",
        "Conoc_necesarios"=>"Microinformaática",
        "funciones"=>"Una, dos. tes y cuatro",
        "personal_a_cargo"=>"12",
        "vacantes"=>"1",
        "duracion_contrato"=>"6 meses",
        "horario"=>"intensiva",
        "CIF"=>"20804927",
        "id_puesto"=>1,
        "id_sal"=>1); */
  
function actualitzarOferTre($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM OFERTA_TRABAJO WHERE `id_ofertatreball`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO OFERTA_TRABAJO (`id_ofertatreball`, `publicada`, `nomPuesto`, `experiencia_min`, `requisitos`, `estudios_minimos`, `residencia_en`, `Conoc_necesarios`, `funciones`, `personal_a_cargo`, `vacantes`, `duracion_contrato`, `horario`, `CIF`, `id_puesto`, `id_sal`) 
        VALUES (:id_ofertatreball, :publicada, :nomPuesto, :experiencia_min, :requisitos, :estudios_minimos, :residencia_en, :Conoc_necesarios, :funciones, :personal_a_cargo, :vacantes, :duracion_contrato, :horario, :CIF, :id_puesto, :id_sal);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id OTROS_DATOS
//$idotrdts="1";

function getOneOtrDts($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM OTROS_DATOS WHERE `id_otrosdatos` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }

        $conn ->close();
}

//insertar un nou registre OTROS_DATOS
/* $arrayotrdts= array(
        "id_otrosdatos"=>null,
        "situacion_laboral"=>"Estoy trabajando",
        "vehiculo"=>"si",
        "nacionalidad"=>"Española",
        "permiso_trabajo"=>"si",
        "autonomo"=>"no"); */

function insertOneOtrDts($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO OTROS_DATOS (id_otrosdatos, situacion_laboral, vehiculo, nacionalidad,permiso_trabajo, autonomo) 
        VALUES (:id_otrosdatos, :situacion_laboral, :vehiculo, :nacionalidad,:permiso_trabajo, :autonomo);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre OTROS_DATOS
//$idotrdts="2";
function deleteOneOtrDts($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM OTROS_DATOS WHERE `id_otrosdatos`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre OTROS_DATOS
/* $idotrdts="3";
$arrayotrdts= array(
        "id_otrosdatos"=>null,
        "situacion_laboral"=>"Estoy trabajando",
        "vehiculo"=>"si",
        "nacionalidad"=>"Española",
        "permiso_trabajo"=>"si",
        "autonomo"=>"no"); */
function actualitzarOtrDts($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM OTROS_DATOS WHERE `id_otrosdatos`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO OTROS_DATOS (id_otrosdatos, situacion_laboral, vehiculo, nacionalidad,permiso_trabajo, autonomo) 
        VALUES (:id_otrosdatos, :situacion_laboral, :vehiculo, :nacionalidad,:permiso_trabajo, :autonomo);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id PUESTO
//$idpto="1";

function getOnePuesto($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM PUESTO WHERE `id_puesto` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
             //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre PUESTO
/* $arraypto= array(
        "id_puesto"=>null,
        "sector"=>"1.Agraria",
        "Categoria"=>"Administrativo",
        "Nivel"=>"1 ingenieros y Licenciados");
 */
function insertOnePuesto($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO PUESTO (id_puesto, sector, Categoria, Nivel) VALUES (:id_puesto, :sector, :Categoria, :Nivel);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

//esborrar un registre PUESTO
//$idpto="2";
function deleteOnePuesto($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM PUESTO WHERE `id_puesto`= "."'".$id."'";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}

//actualitzar registre PUESTO
/* $idpto="3";
$arraypto= array(
        "id_puesto"=>null,
        "sector"=>"1.Agraria",
        "Categoria"=>"Administrativo",
        "Nivel"=>"1 ingenieros y Licenciados"); */
function actualitzarPuesto($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM PUESTO WHERE `id_puesto`= "."'".$id."'";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO PUESTO (id_puesto, sector, Categoria, Nivel) VALUES (:id_puesto, :sector, :Categoria, :Nivel);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

//lectura per un id SALARIO
//$idsal="1";

function getOneSalari($id)
{
        $conn = new DAO();
        $sqlconsulta = "SELECT * FROM SALARIO WHERE `id_sal` = "."'".$id."';";

        $datos =$conn->getOne($sqlconsulta);
        if (isset($datos) && !empty($datos) && sizeof($datos)>0){
                //print_r($datos);
        } else {
            echo "no hi ha dades";
        }
        $conn ->close();
}

//insertar un nou registre SALARIO
/* $arraysal= array(
        "id_sal"=>null,
        "tipo_salario"=>"Bruto día",
        "max_salario"=>"150",
        "min_salario"=>"75",
        "beneficios_sociales"=>"Dentista"); */
function insertOneSalari($array)
{
        $conn = new DAO();
        $sqlinsert = "INSERT INTO SALARIO (id_sal, tipo_salario, max_salario, min_salario, beneficios_sociales) VALUES (:id_sal, :tipo_salario, :max_salario, :min_salario, :beneficios_sociales);";
        $conn->insert($sqlinsert, $array);    
        $conn ->close();
}

insertOneSalari($arraysal);

//esborrar un registre SALARIO
//$idsal="2";
function deleteOneSalari($id){
        $conn = new DAO();
        $sqldelete = "DELETE FROM SALARIO WHERE `id_sal` = "."'".$id."';";
        $conn->deleteOne($sqldelete);
        $conn -> close();
}


//actualitzar registre SALARIO
//$idsal="bguerola@hotmail.com";
/* $arraysal= array(
        "email"=>"bguerola@hotmail.com",
        "contrasena"=>"1234",
        "nom"=>"Berni",
        "tipo"=>"empresa"); */
function actualitzarSalari($id, $array){
        $conn = new DAO();
        $sqldelete = "DELETE FROM AUTENTICACION WHERE `id_sal` = "."'".$id."';";
        $conn ->deleteOne($sqldelete);
        $sqlinsert = "INSERT INTO SALARIO (id_sal, tipo_salario, max_salario, min_salario, beneficios_sociales) VALUES (:id_sal, :tipo_salario, :max_salario, :min_salario, :beneficios_sociales);";
        $conn->insert($sqlinsert, $array); 
        $conn -> close();
}

?>