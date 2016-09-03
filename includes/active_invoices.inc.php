<?php
// questa è deprecata perché era collegata a mustache

class active_invoices{
var $user_vatcode;
var $interval;
var $data;

	function active_invoices(){

	}

	function set_vatcode($user_vatcode){
		$this->user_vatcode = $user_vatcode;
	}

	function set_interval($interval){
		$this->interval = $interval;
	}

	function get_invoices(){
	global $db;
	$results = $db->rawQuery("SELECT * FROM FATTURE_SAVED WHERE partita_iva = ?", 
							array($this->user_vatcode));
	for($i=0;$i<count($results);$i++){$results[$i][$results[$i]['status_invoice']]=1;$results[$i]['data']=localize_date($results[$i]['data']);}
	   return $results;
	}

	function import_invoice($rand_code){
		$data = load_invoice_data($rand_code);
		$store_invoice['partita_iva']= $data['partita_iva'];
		$store_invoice['data']=$data['data_fatt'];
		$store_invoice['importo']=$data['importo'];
		$store_invoice['profilo']=$data['profilo'];
		$store_invoice['num_fatt']=$data['num_fatt'];
		$store_invoice['rand_code']=$rand_code;
		$store_invoice['partita_iva_cliente']=$data['dest_partita_iva'];
		$store_invoice['ragione_sociale_cliente']=$data['dest_ragione_sociale'];
		$store_invoice['status_invoice']="new";
		global $db;
		$results = $db->insert('MAIN_INVOICE_TABLE', $store_invoice);
	}

}