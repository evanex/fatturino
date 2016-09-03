<?php
//ini_set('display_errors',1);

//require_once('../tcpdf/tcpdf_include.php');
require_once("../includes/db.class.php"); 
require_once("../includes/connect_db.inc.php");
require_once("../includes/functions.inc.php");
require_once("../includes/free_invoice_functions.php");

if(isset($_REQUEST['preview'])){$invoice_id = $_REQUEST['preview'];$saved=0;}
elseif(isset($_REQUEST['invoice'])){$invoice_id = $_REQUEST['invoice'];$saved=1;}
   
$results = load_invoice_data($invoice_id,$saved);

count_invoice_views_plus_one($invoice_id);

//print_R($results);

if(count($results)<10){
	echo "<script>window.location.replace('/');</script>";
	exit;
}

$generic_row = "<tr><td>{DESCRIZIONE}</td><td>&euro; {EURO}</td></tr>";


if(isset($results[PAGAMENTO])){
	$results[PAGAMENTO]="<div class=\"well\" ><p class=\"small2\">{$results[PAGAMENTO]}</p></div><BR />";
}
if(isset($results[PROFORMA_TEXT])){
	$results[PROFORMA_TEXT]="<p class=\"small2\">{$results[PROFORMA_TEXT]}</p><BR />";
}
if(isset($results[REGIME_MINIMI_TEXT])){
	$results[REGIME_MINIMI_TEXT]="<p class=\"small2\">{$results[REGIME_MINIMI_TEXT]}</p><BR />";
}

$html = file_get_contents("fattura_html_template.html");

$html = parse_invoice($results,$html);
$riga = "";
$fattura = new calcola_fattura($results);

foreach($fattura->voci_fattura as $descrizione =>$costo){
	$costo = number_format($costo,2,',',' ');
	if($descrizione==TOTALE){
		$html = str_replace("{TOTALE_DA_CORRISPONDERE}",$costo,$html);
	}else{
		$template = str_replace("{ATTRIBUTES}","",$generic_row);
		$riga_temp = str_replace("{DESCRIZIONE}",$descrizione,$template);
		$riga .= str_replace("{EURO}",$costo,$riga_temp);
	}
	

}

$html = str_replace("{RIGHE_FATTURA}",$riga,$html);

echo $html;
?>
