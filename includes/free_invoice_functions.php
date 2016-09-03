<?php

function count_invoice_views_plus_one($rand,$saved=0){
	global $db;

	switch($_SERVER['SCRIPT_NAME']){
		case '/free_api/fattura_PDF_gratis.php':
		$field = "pdf_views";
		break;
		case '/free_api/fattura_html_gratis.php':
		$field = "html_views";
	}
	$db->where('rand', $rand);
    if($saved==0){
        $db->update_plus_one("FATTURE_FRONT_END",$field);
    }else{
        $db->update_plus_one("FATTURE_SAVED",$field);
    
    }
}

