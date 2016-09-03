<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date dans le passé
//ini_set("display_errors",1);
require_once("../includes/db.class.php"); 
require_once("../includes/connect_db.inc.php");
require_once("../includes/functions.inc.php");

if(strlen($_SERVER['QUERY_STRING'])!=10){echo json_encode(array('id'=>17));exit;}

$invoice_id = save_invoice($_SERVER['QUERY_STRING']);
	

echo_json(array('id'=>$invoice_id));

