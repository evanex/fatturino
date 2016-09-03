<?php
setlocale(LC_MONETARY, 'it_IT');

require_once('../includes/calcola_fattura.inc.php');
require_once('../includes/active_invoices.inc.php');



function mb_trim($str){
	return preg_replace("/(^\s+)|(\s+$)/u", "", $str);
}

function localize_date($value){
	return date("d-m-Y",strtotime($value));
}


function echo_json($data){
    header('Content-Type: application/json');
    echo json_encode($data);
}
