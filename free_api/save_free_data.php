<?php
//ini_set('display_errors',1);
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date dans le passé
//ini_set("display_errors",1);
require_once("../includes/db.class.php"); 
require_once("../includes/connect_db.inc.php");
require_once("../includes/functions.inc.php");


if(!isset($_COOKIE['userid']) || $_COOKIE['userid']==""){
	$var = random_string(20);
	setcookie("userid", $var , time() + 365*24*3600, "/");
	$_COOKIE['userid'] = $var;
        $case = "no";
}

if(isset($_COOKIE['idfattura']) && strlen($_COOKIE['idfattura'])>2){
	$var = $_COOKIE['idfattura'];
    $success = update_free_data($_REQUEST,$var);
    $case = "update";
}else{
	$var = insert_free_data($_REQUEST);
    $case = "insert";
	setcookie("idfattura", $var , time() + 365*24*3600, "/");
}


echo json_encode(array('id'=>$var,'case'=>$case));

