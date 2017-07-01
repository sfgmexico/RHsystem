<?php
if(!isset($_SESSION)){
	
	session_start();
}
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('plantilla2.docx');
date_default_timezone_set('Mexico/General');

$hoy = getdate();
date('l jS \of F Y h:i:s A');
 

$hora=$hoy['hours'];
$dia=$hoy['mday'];
if($dia==1){
	$dia2="uno";
}
if($dia==2){
	$dia2="dos";
}
if($dia==3){
	$dia2="tres";
}
if($dia==4){
	$dia2="cuatro";
}
if($dia==5){
	$dia2="cinco";
}
if($dia==6){
	$dia2="seis";
}
if($dia==7){
	$dia2="siete";
}
if($dia==8){
	$dia2="ocho";
}
if($dia==9){
	$dia2="nueve";
}
if($dia==10){
	$dia2="diez";
}
if($dia==11){
	$dia2="once";
}
if($dia==12){
	$dia2="doce";
}
if($dia==13){
	$dia2="trece";
}
if($dia==14){
	$dia2="catorce";
}
if($dia==15){
	$dia2="quince";
}
if($dia==16){
	$dia2="dieciséis";
}
if($dia==17){
	$dia2="diecisiete";
}
if($dia==18){
	$dia2="dieciocho";
}
if($dia==19){
	$dia2="diecinueve";
}
if($dia==20){
	$dia2="veinte";
}
if($dia==21){
	$dia2="veintiuno";
}
if($dia==22){
	$dia2="veintidós";
}
if($dia==23){
	$dia2="veintitrés";
}
if($dia==24){
	$dia2="veinticuatro";
}
if($dia==25){
	$dia2="veinticinco";
}
if($dia==26){
	$dia2="veintiseis";
}
if($dia==27){
	$dia2="veintisiete";
}
if($dia==28){
	$dia2="veintiocho";
}
if($dia==29){
	$dia2="veintinueve";
}
if($dia==30){
	$dia2="treinta";
}
if($dia==31){
	$dia2="treinta y uno";
}

$minutos=$hoy['minutes'];
$mes=$hoy['mon'];
if($mes==1){
	$mes="Enero";
}
if($mes==2){
	$mes="Febrero";
}
if($mes==3){
	$mes="Marzo";
}
if($mes==4){
	$mes="Abril";
}
if($mes==5){
	$mes="Mayo";
}
if($mes==6){
	$mes="Junio";
}
if($mes==7){
	$mes="Julio";
}
if($mes==8){
	$mes="Agosto";
}
if($mes==9){
	$mes="Septiembre";
}
if($mes==10){
	$mes="Octubre";
}
if($mes==11){
	$mes="Noviembre";
}
if($mes==12){
	$mes="Diciembre";
}





$año=$hoy['year'];


//// SESION







////
$datos_trabajador_nombre=$_SESSION['trabajador'];
$jornada_laboral=$_SESSION['jornada'];
$horas_por_dia=$_SESSION['horas'];
$datos_trabajador="quien en su carácter de trabajador cumplía una jornada laboral de ".$jornada_laboral." horas semanales distribuidas en un horario preferentemente de ".$horas_por_dia." horas por día. ";
$testigo_decargo1=$_SESSION['cargo1'];
$direccion_cargo1=$_SESSION['dircargo1'];
$ine_cargo1=$_SESSION['inecargo1'];
$puesto_cargo1=$_SESSION['puestocargo1'];
$datos_cargo1=", mayor de edad, en su carácter de ".$puesto_cargo1." de la empresa, con domicilio particular en ".$direccion_cargo1.", quien se identifica con credencial de elector: ".$ine_cargo1."";

$testigo_decargo2=$_SESSION['cargo2'];
$direccion_cargo2=$_SESSION['dircargo2'];
$ine_cargo2=$_SESSION['inecargo2'];
$puesto_cargo2=$_SESSION['puestocargo2'];
$datos_cargo2=", mayor de edad, en su carácter de ".$puesto_cargo2." de la empresa, con domicilio particular en ".$direccion_cargo2.", quien se identifica con credencial de elector: ".$ine_cargo2."";

$testigo_asistencia1=$_SESSION['asist1'];
$direccion_asistencia1=$_SESSION['dirasist1'];
$ine_asistencia1=$_SESSION['ineasist1'];
$puesto_asistencia1=$_SESSION['puestoasist1'];
$datos_asistencia1=", mayor de edad, en su carácter de ".$puesto_asistencia1." de la empresa con domicilio particular en ".$direccion_asistencia1.", quien se identifica con credencial de elector: ".$ine_asistencia1.".";

$testigo_asistencia2=$_SESSION['asist2'];
$direccion_asistencia2=$_SESSION['dirasist2'];
$ine_asistencia2=$_SESSION['ineasist2'];
$puesto_asistencia2=$_SESSION['puestoasist2'];
$datos_asistencia2=", mayor de edad, en su carácter de ".$puesto_asistencia2." de la empresa con domicilio particular en ".$direccion_asistencia2.", quien se identifica con credencial de elector: ".$ine_asistencia2."";

$falta_incurrida=$_SESSION['faltaincu'];

$derecho_replica=$_SESSION['replica'];

$comentarios_personal=$_SESSION['manifiesto'];

$articulos=$_SESSION['articulos'];
$derivacion=$_SESSION['sancion'];



// --- Asignamos valores a la plantilla

$templateWord->setValue('hora',$hora);
$templateWord->setValue('minutos',$minutos);
$templateWord->setValue('dia',$dia);
$templateWord->setValue('dia2',$dia2);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('anio',$año);


$templateWord->setValue('datos_trabajador',$datos_trabajador);
$templateWord->setValue('datos_trabajador_nombre',$datos_trabajador_nombre);
$templateWord->setValue('testigo_decargo1',$testigo_decargo1);
$templateWord->setValue('testigo_decargo2',$testigo_decargo2);
$templateWord->setValue('testigo_asistencia1',$testigo_asistencia1);
$templateWord->setValue('testigo_asistencia2',$testigo_asistencia2);

$templateWord->setValue('datos_cargo1',$datos_cargo1);
$templateWord->setValue('datos_asistencia1',$datos_asistencia1);
$templateWord->setValue('falta_incurrida',$falta_incurrida);
$templateWord->setValue('derecho_replica',$derecho_replica);
$templateWord->setValue('datos_asistencia2',$datos_asistencia2);
$templateWord->setValue('datos_cargo2',$datos_cargo2);
$templateWord->setValue('comentarios_personal',$comentarios_personal);
$templateWord->setValue('articulos',$articulos);
$templateWord->setValue('derivacion',$derivacion);




// --- Guardamos el documento
$templateWord->saveAs('Documento02.docx');

header("Content-Disposition: attachment; filename=Documento02.docx; charset=iso-8859-1");
echo file_get_contents('Documento02.docx');
        
?>