<?php
ini_set('display_errors',1);

require_once("../includes/db.class.php"); 
require_once("../includes/connect_mamp.inc.php");
require_once("../includes/functions.inc.php");
require_once("../includes/free_invoice_functions.php");
require_once("../includes/search_vat_engine.inc.php");


$start = 0;
$page = 10;

while(1){
for($i=0;$i<100;$i++){
	browse_db_raw_vat($start+$i*$page,$page);
}
}

function browse_db_raw_vat($start,$page){
		global $db;

		$q = "select * FROM PARTITA_IVA_RAW WHERE VIES = 0 LIMIT $start,$page";

		$res = $db->rawQuery($q,array());

		for($i=0;$i<$page;$i++){
			echo "verifica ".$res[$i]['PARTITA_IVA'];
			$n = fill_zero_vat($res[$i]['PARTITA_IVA']);
			$piva = new search_for_partita_iva(array('p'=>$n));
			echo $piva->output_results_obj['found'];
			//var_dump($piva->output_results_obj);
			$db->where('PARTITA_IVA', $res[$i]['PARTITA_IVA']);
			$db->update_plus_one("PARTITA_IVA_RAW","VIES");
			echo "\n";

		}
}


function fill_zero_vat($s){
	$z="";
	$q = strlen($s);
	$fill = 11-$q;
	for($i=0;$i<$fill;$i++){$z.="0";}
	return $z.$s;
}

