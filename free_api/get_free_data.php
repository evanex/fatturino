<?php
//ini_set('display_errors',1);
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date dans le passé
//ini_set("display_errors",1);
require_once("../includes/db.class.php"); 
require_once("../includes/connect_db.inc.php");
require_once("../includes/functions.inc.php");

//print_r($_COOKIE);

if(isset($_COOKIE['idfattura'])){
	$random_code = $_COOKIE['idfattura'];

	$data = load_invoice_data($random_code);
	$data['data_fatt'] = date("d-m-Y",strtotime($data['data_fatt']));
	echo_json($data);
}
