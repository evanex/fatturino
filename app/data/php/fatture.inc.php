<?php

class data_manager{
var $data; // final array filled of data to display

	function data_manager(){
		$this->load_invoices();
		}

	function load_invoices(){
		$invoices = new active_invoices();
//		questa funzione la attivo se è un primo accesso e vuoi salvare la fattura free appena fatta
//		$invoices->import_invoice("tD9eqbw38y");
		$invoices -> set_vatcode($_SESSION['user_vatcode']);
//		$invoices -> set_interval("LAST 50 INVOICES");
		$this->data['invoices']=$invoices->get_invoices();
//		print_r($this->data['invoices']);
	}

}

?>