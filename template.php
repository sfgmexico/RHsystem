<?php

require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('plantilla.docx');

$hoy = getdate();
 
$nombre = "Sandra S.L.";
$direccion = "Mi dirección";
$municipio = "Mrd";
$provincia = "Bdj";
$cp = "02541";
$telefono = 24536784;
$hora=$hoy['hours'];
$dia=$hoy['mday'];
if($dia==1){
	$dia2="UNO";
}
if($dia==13){
	$dia2="TRECE";
}

$minutos=$hoy['minutes'];
$mes=$hoy['month'];
$año=$hoy['year'];

// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre_empresa',$nombre);
$templateWord->setValue('direccion_empresa',$direccion);
$templateWord->setValue('municipio_empresa',$municipio);
$templateWord->setValue('provincia_empresa',$provincia);
$templateWord->setValue('cp_empresa',$cp);
$templateWord->setValue('telefono_empresa',$telefono);
$templateWord->setValue('hora',$hora);
$templateWord->setValue('minutos',$minutos);
$templateWord->setValue('dia',$dia);
$templateWord->setValue('dia2',$dia2);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('anio',$año);


// --- Guardamos el documento
$templateWord->saveAs('Documento02.docx');

header("Content-Disposition: attachment; filename=Documento02.docx; charset=iso-8859-1");
echo file_get_contents('Documento02.docx');
        
?>