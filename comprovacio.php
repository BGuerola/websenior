<?php
require_once 'direccion.php';
require_once 'autenticacion.php';
require_once 'candidat.php';
require_once 'conocimientos.php';
require_once 'empresa.php';
require_once 'estudiosnoreglados.php';
require_once 'estudiosreglados.php';
require_once 'experiencia.php';
require_once 'favorito.php';
require_once 'idiomas.php';
require_once 'inscrito.php';
require_once 'ofertatrabajo.php';
require_once 'otrosdatos.php';
require_once 'puesto.php';
require_once 'salario.php';


echo "TEST DEL PROGRAMA"."<br>";
echo "<br>";
echo "1. Instanciar tots els programes, toString i destruir"."FET"."<br>"; 
echo "2. Cada objecte té métode de guardar, actualitzar i esborrar l'objecte (sentència SQL)"."<br>";
echo "3. Guardar, actualitzar des de la lògica de la web: empresa, candidat, oferta"."<br>";
echo "<br>";
echo "___________________________________________________________________________________"."<br>";
echo "<br>";

echo "autenticacio"."<br>";
$aut = new autenticacion('bguerola@hotmail.com', '1234', 'Bernat', 'candidat');
echo $aut."<br>";
$aut=null;
echo "<br>";

echo "candidat"."<br>";
$cand = new candidat("1","hola soy Bernat", "Bernat", "Guerola", "Trull", "1968", "Varón", "1", "1", "bguerola@hotmail.com");
echo $cand."<br>";
$cand=null;
echo "<br>";

echo "conocimientos"."<br>";
$cono= new conocimientos("1", "bonico", "sociable", "phppero", "1", "1");
echo $cono."<br>";
$cono=null;
echo "<br>";

echo "direccion"."<br>";
$dir = new direccion("1", "Algemesí", "Pelayo", "Valencia", "46470");
echo $dir."<br>";
$dir=null;
echo "<br>";

echo "empresa"."<br>";
$emp=new empresa("20804927R", "C:/logos", "JAP", "Bernat", "Guerola", "Trull","637620723", "no", "desenvolupament movil", "Pelauo, 15", "bguerola@hotmail.com");
echo $emp."<br>";
$emp=null;
echo "<br>";

echo "estudiosnoreglados"."<br>";
$enr=new estudiosnoreglados("1", "ganxillo", "01/01/2023", "01/02/2023", "edem", "1");
echo $enr."<br>";
$enr=null;
echo $enr."<br>";


echo "estudiosreglados"."<br>";
$ere = new estudiosreglados("1", "superior", "Técnic ganxillo", "01/03/2023", "01/04/2023", "EDEM", "1");
echo $ere."<br>";
$ere=null;
echo "<br>";

echo "experiencia"."<br>";
$exp = new experiencia("1", "Velarte", "RRHH", "20804927R", "1", "20/08/2008", "30/02/2016", "5", "1");
echo $exp."<br>";
$exp=null;
echo "<br>";

echo "favorito"."<br>";
$fav = new favorito("1", "1");
echo $fav."<br>";
$fav=null;
echo "<br>";

echo "idiomas"."<br>";
$idi=new idiomas("1", "B2", "1", "1");
echo $idi."<br>";
$idi=null;
echo "<br>";

echo "inscrito"."<br>";
$ins = new inscrito("1", "1", "preseleccionado");
echo $ins."<br>";
$ins=null;
echo "<br>";

echo "ofertatrabajo"."<br>";
$oft = new ofertatrabajo("1", "si", "Analista", "3 meses", "todos", "Licenciado", "Barcelona", "grafoplexia", "y derivadas", "12", "1", "1 año", "jornada partida", "20804927R", "4", "5");
echo $oft."<br>";
$oft = null;
echo "<br>";

echo "otrosdatos"."<br>";
$otd = new otrosdatos("1", "desempleado", "si", "española", "si", "no");
echo $otd."<br>";
$otd=null;
echo "<br>";

echo "puesto"."<br>";
$pue = new puesto("1", "telecomunicaciones", "licenciado", "superior");
echo $pue."<br>";
$pue=null;
echo "<br>";

echo "salario"."<br>";
$sal = new salario("1", "anual", "40K", "30K", "gimnasio");
echo $sal."<br>";
$sal=null;
echo "<br>";
?>