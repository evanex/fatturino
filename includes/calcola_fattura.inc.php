<?php

define('PER_IVA',22);
define('INARCASSA',"Contributo integrativo 4% INARCASSA");
define('IVA22',"IVA 22%");
define('IVA10',"IVA 10%");
define('INPS4',"Rivalsa 4% contributo INPS");
define('INPGI2',"Rivalsa 2% contributo INPGI");
define('RITACC',"Ritenuta d'acconto");
define('CASSAFORENSE',"Contributo Cassa di Previdenza 4%");
define('IMPONIBILE',"Importo imponibile");
define('ONORARIO',"Onorario");
define('SPESEGENERALI',"Spese generali ex art. 13 ( 12,5% su onorari )");
define('SPESENONESENTI',"Spese non esenti");
define('SPESEESENTI',"Spese esenti ex art. 15 DPR 633/72");
define('TOTALE',"Totale da corrispondere");
define('TITOLO_PROFORMA',"Fattura pro forma");
define('NOTACREDITO',"Nota di credito");
define('TITOLOFATTURA',"Fattura commerciale");



define ('PROFORMA_TEXT',"La presente non costituisce fattura. La stessa sarà emessa e rilasciata al committente dopo il pagamento del corrispettivo, a norma degli artt. 6, 18 e 21 del D.P.R. 26.10.1972 n. 633");
define ('REGIME_MINIMI_TEXT',"Prestazione svolta in regime fiscale di vantaggio ex articolo 1, commi 96-117, Legge 244/2007 come modificato da articolo 27, DL 98/2011 e, pertanto, non soggetta a IVA né a ritenuta ai sensi provvedimento Direttore Agenzia Entrate n.185820 del 22.12.2011.");
define('PAGAMENTO',"Modalità di pagamento: rimessa diretta su cc IBAN: {IBAN}");



function load_invoice_data($random_code,$saved=0){
	global $db;

    if($saved){$table = "FATTURE_SAVED";}else{$table = "FATTURE_FRONT_END";}
    
	$results = $db->rawQuery("SELECT * FROM {$table} WHERE RAND = ?", array($random_code));

	$results[0]['PROFORMA_TEXT']="";

	if($results[0]['tipo_doc']=='proforma'){
		$results[0]['num_fatt']= "Proforma";
		$results[0]['PROFORMA_TEXT'].=PROFORMA_TEXT;
        $results[0]['TITOLO_DOCUMENTO'].=TITOLO_PROFORMA;
        
	}elseif($results[0]['tipo_doc']=='notacredito'){
           $results[0]['TITOLO_DOCUMENTO'].=NOTACREDITO;
    }else{
         $results[0]['TITOLO_DOCUMENTO'].=TITOLOFATTURA;
    }
    
    
    

	if($results[0]['regime_minimi']==1){
		$results[0]['PROFORMA_TEXT'].=REGIME_MINIMI_TEXT;
	}

	if($results[0]['IBAN']>''){
		$results[0]['PROFORMA_TEXT'].=str_replace("{IBAN}",$results[0]['IBAN'],PAGAMENTO);
	}


	return $results[0];
}





function free_data_to_array($data){
	$free_array = array("ragione_sociale","partita_iva","codice_fiscale","indirizzo","citta_cap","email",
	"sito","dest_ragione_sociale","dest_partita_iva","dest_codice_fiscale","dest_idirizzo","dest_citta_cap",
	"dest_email","num_fatt","data_fatt","regime_minimi","descrizione","importo","profilo","importo1","importo2",
	"tipo_doc","spese_generali","IBAN");

	foreach($data as $key => $value){
			if(in_array($key,$free_array)){
				if(is_array($value)){
					if($value[0]=='on'){$go=1;}else{$go=1;}
					$insert[$key]=$go;
				}elseif($key=="dest_codice_fiscale" || $key=="codice_fiscale"){
					$insert[$key]=strtoupper($value);
				}else{$insert[$key]=$value;}
			}
	}

if(!isset($data['spese_generali_on']) || $data['spese_generali_on'][0]!='on'){unset($insert['spese_generali']);}

if(!$insert['data_fatt']){$insert['data_fatt']=date("Y-m-d");}else{
$insert['data_fatt']=date("Y-m-d",strtotime($insert['data_fatt']));}

$insert['IP']=$_SERVER['REMOTE_ADDR'];
$insert['DATE_CREATED']=date("Y-m-d H:i:s");
return $insert;
}

function update_free_data($data,$idfattura){
global $db;
$insert = free_data_to_array($data);
$db->where('rand', $idfattura);
$results = $db->update('FATTURE_FRONT_END', $insert);
}


function save_invoice($random_code){
    global $db;
    $insert = load_invoice_data($random_code);
    unset($insert['ID']);
    unset($insert['PROFORMA_TEXT']);
    unset($insert['html_views']);
    unset($insert['pdf_views']);
    unset($insert['TITOLO_DOCUMENTO']);
    $insert['rand']=random_string();
    $insert['ANNO']=date("Y", strtotime($insert['data_fatt']));
    $results = $db->insert('FATTURE_SAVED', $insert);
    if($results){return $insert['rand'];}else{return false;}
}



function insert_free_data($data){
global $db;

$insert = free_data_to_array($data);
$insert['RAND']=random_string(10);
$insert['userid']=$_COOKIE['userid'];

$results = $db->insert('FATTURE_FRONT_END', $insert);

if($results){return $insert['RAND'];}else{return 0;}

}


function random_string($length=5){
	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

function parse_invoice($array_val,$invoice_html){

	foreach($array_val as $key=>$value){
		if($key=="data_fatt"){$value=localize_date($value);}
		$invoice_html = str_replace("{".$key."}",$value,$invoice_html);

	}

	return $invoice_html;

}


class calcola_fattura{
	
var $parametri;
var $voci_fattura;

function calcola_fattura($parametri){

$this->parametri=$parametri;

	switch($this->parametri['profilo']){
		case 'agevolata_vat':
			$this->agevolata_vat();
		break;
		case 'only_vat':
			$this->only_vat();
		break;
		case 'rit_inps_vat':
			$this->rit_inps_vat();
		break;
		case 'rit_ing_vat':
			$this->rit_ing_vat();
		break;
		case 'rit_leg_vat':
			$this->rit_leg_vat();
		break;
        case 'inpgi_vat':
            $this->inpgi_vat();
	   break;
	case 'iva10ra4':
	$this->iva10ra4();
	break;

    }

	if($this->parametri['regime_minimi']==1){$this->fallback_regime_minimi();}
}

function fallback_regime_minimi(){
	$this->voci_fattura[TOTALE] = $this->voci_fattura[TOTALE]+$this->voci_fattura[RITACC]-$this->voci_fattura[IVA22];
	unset($this->voci_fattura[IVA22]);
	unset($this->voci_fattura[RITACC]);
}

function only_vat(){
$this->voci_fattura[IMPONIBILE] =  $this->parametri['importo'];
$this->voci_fattura[IVA22]=$this->calcola_iva($this->parametri['importo']);	
$this->voci_fattura[TOTALE]=$this->parametri['importo']+$this->voci_fattura[IVA22];

}



function agevolata_vat(){
$this->voci_fattura[IMPONIBILE] =  $this->parametri['importo'];
$this->voci_fattura[IVA10]=$this->calcola_iva_10($this->parametri['importo']);
$this->voci_fattura[TOTALE]=$this->parametri['importo']+$this->voci_fattura[IVA10];

}





function rit_inps_vat(){
$this->voci_fattura[IMPONIBILE] =  $this->parametri['importo'];
$this->voci_fattura[INPS4] =  $this->parametri['importo']*0.04;
$this->voci_fattura[IVA22]=$this->calcola_iva($this->parametri['importo']+$this->voci_fattura[INPS4] );	
$this->voci_fattura[RITACC]=$this->calcola_ritenuta($this->parametri['importo']+$this->voci_fattura[INPS4]  );	
$this->voci_fattura[TOTALE]=$this->parametri['importo']+$this->voci_fattura[IVA22]
								+$this->voci_fattura[INPS4]-$this->voci_fattura[RITACC];


}





function iva10ra4(){
$this->voci_fattura[IMPONIBILE] =  $this->parametri['importo'];
$this->voci_fattura[IVA10]=$this->parametri['importo']*0.1 ;
$this->voci_fattura[RITACC]=$this->parametri['importo']*0.04;
$this->voci_fattura[TOTALE]=$this->parametri['importo']+$this->voci_fattura[IVA10]
                                                                -$this->voci_fattura[RITACC];


}






function inpgi_vat(){
$this->voci_fattura[IMPONIBILE] =  $this->parametri['importo'];
$this->voci_fattura[INPGI2] =  $this->parametri['importo']*0.02;
$this->voci_fattura[IVA22]=$this->calcola_iva($this->parametri['importo']+$this->voci_fattura[INPGI2] );	
$this->voci_fattura[RITACC]=$this->calcola_ritenuta($this->parametri['importo']+$this->voci_fattura[INPGI2]  );	
$this->voci_fattura[TOTALE]=$this->parametri['importo']+$this->voci_fattura[IVA22]
								+$this->voci_fattura[INPGI2]-$this->voci_fattura[RITACC];


}    
    
    
function rit_ing_vat(){
$this->voci_fattura[IMPONIBILE] =  $this->parametri['importo'];
$this->voci_fattura[INARCASSA] =  $this->voci_fattura[IMPONIBILE]*0.04;
$this->voci_fattura[IVA22]=$this->calcola_iva($this->parametri['importo']+$this->voci_fattura[INARCASSA] );	
$this->voci_fattura[RITACC]=$this->calcola_ritenuta($this->voci_fattura[IMPONIBILE]);	
$this->voci_fattura[TOTALE]=$this->voci_fattura[IMPONIBILE]+$this->voci_fattura[INARCASSA]+$this->voci_fattura[IVA22]-$this->voci_fattura[RITACC];
}


function rit_leg_vat(){
$this->voci_fattura[ONORARIO] =  $this->parametri['importo'];

if($this->parametri['spese_generali']>0)
	{$this->voci_fattura[SPESEGENERALI] =  $this->voci_fattura[ONORARIO]*$this->parametri['spese_generali']/100;}

if($this->parametri['importo1']>0)
	{$this->voci_fattura[SPESENONESENTI] =  $this->parametri['importo1'];}

$this->voci_fattura[CASSAFORENSE] =  ($this->voci_fattura[SPESEGENERALI]+$this->voci_fattura[SPESENONESENTI]+$this->voci_fattura[ONORARIO])*0.04;
$this->voci_fattura[IMPONIBILE] =  ($this->voci_fattura[SPESEGENERALI]+$this->voci_fattura[SPESENONESENTI]+$this->voci_fattura[ONORARIO])+$this->voci_fattura[CASSAFORENSE];
$this->voci_fattura[IVA22]=$this->calcola_iva($this->voci_fattura[IMPONIBILE]);	

if($this->parametri['importo2']>0)
	{$this->voci_fattura[SPESEESENTI] =  $this->parametri['importo2'];}

$this->voci_fattura[RITACC]=$this->calcola_ritenuta($this->voci_fattura[SPESEGENERALI]+$this->voci_fattura[ONORARIO]+$this->voci_fattura[SPESENONESENTI] );	

$this->voci_fattura[TOTALE]=$this->voci_fattura[IMPONIBILE]+$this->voci_fattura[IVA22]-$this->voci_fattura[RITACC]+$this->voci_fattura[SPESEESENTI];
	
}

function calcola_ritenuta($importo){
	return $importo*0.2;
}


function calcola_iva($importo){
	return $importo*PER_IVA/100;
}

function calcola_iva_10($importo){
        return $importo*0.1;
}


} // calcola fattura
