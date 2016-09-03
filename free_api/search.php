<?php
//ini_set('display_errors',0);
define("DEBUG",0);


require_once("../includes/db.class.php"); 
require_once("../includes/connect_db.inc.php");
require_once("../includes/functions.inc.php");
require_once("../includes/search_vat_engine.inc.php");


// The request also includes the userip parameter which provides the end
// user's IP address. Doing so will help distinguish this legitimate
// server-side traffic from traffic which doesn't come from an end-user.


// now, process the JSON string
$piva = new search_for_partita_iva($_GET);
echo json_encode($piva->output_results_obj);
exit;
