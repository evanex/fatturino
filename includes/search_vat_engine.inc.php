<?php
ini_set('default_socket_timeout',120);

class search_for_partita_iva{

var $partita_iva;
var $valid;
var $content;
var $found;
var $verified;
var $name;
var $address;
var $query;
var $city_cap;
var $vies_result = array();
var $output_results_obj;

function search_for_partita_iva($arr){

		$this->found = false;
		if(isset($arr['q'])){
				$this->query = $arr['q'];
				$this->check_vies_name_in_db($arr['q']);
			}
		
		if(!$this->found && isset($arr['q']) && isset($arr['web']) && $arr['web']==1){
				$this->query = $arr['q'];
				$this->google_search($arr['q']);
				// questa riga non servirebbe ma ho un bug nel riempimento che ora non ho voglia di risolvere
				if($this->found){$this->check_vies_name_in_db($arr['q']);}
			}
		
				

		if(!$this->found && isset($arr['p'])){
				$this->partita_iva = $arr['p'];
				$this->check_vies_vat_in_db();
			}

		if(!$this->found && isset($arr['p'])){
				$this->partita_iva = $arr['p'];
				$this->check_vies();
				$this->check_vies_vat_in_db();
			}

		$this->output_results();
		
}

function output_results(){
	$final = array("name"=>$this->name,
				   "piva"=>$this->partita_iva,
					"address"=>$this->address,
					"city_cap"=>$this->city_cap);

	$this->output_results_obj = array("found"=>$this->found,"result"=>$final);
	
}

function split_vies_address(){
	if(isset($this->vies_result['vatNumber'])){$this->partita_iva = $this->vies_result['vatNumber'];}
	$this->name = $this->vies_result['name'];
	$address = (preg_split("/\\r\\n|\\r|\\n/",$this->vies_result['address']));
	if(count($address)>1){
		$this->address = $address[0];
		$this->city_cap = $address[1];
	}
}

function purge_attributes($string){
	$string = trim(strtoupper($string));
	$string = str_ireplace("SRL","",$string);
	$string = str_ireplace("SPA","",$string);
	$string = str_ireplace("S.R.L.","",$string);
	$string = str_ireplace("S.P.A.","",$string);
	$string = str_ireplace("SOCIETA' PER AZIONI","",$string);
	$string = str_ireplace("SOCIETA' A RESPONSABILITA' LIMITATA","",$string);
	
	return trim(strtolower($string));
}

function check_vies_name_in_db($name){
	if(strlen($name)<3){return array();}
	$name = strtoupper($name);

	global $db;
	$name_for_db = "%{$this->purge_attributes($name)}%";
	$results = $db->rawQuery("SELECT * FROM `ANAGRAFICA_CONSOLIDATA` WHERE `name` LIKE ?", array($name_for_db));
	$i=0;
	

	foreach($results as $a => $arr){
		if($this->purge_attributes($name)==$this->purge_attributes($results[$i]['name'])){
			$this->found = true;
			$this->vies_result	=  $results[$i];
			$this->split_vies_address();
			return;
		}
	}
	
	return array();
}

function check_vies_vat_in_db(){
	global $db;

	$results = $db->rawQuery("SELECT * FROM ANAGRAFICA_CONSOLIDATA WHERE vatNumber = ?", array($this->partita_iva));
		if(count($results)==1){
			$this->found = true;
			$this->vies_result	=  $results[0];
			$this->split_vies_address();
			return;
		}


	return $results;
}

function check_vies(){
	$client = new SoapClient("http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl");
	$result = $client->checkVat(array(  'countryCode' => "IT",'vatNumber' => $this->partita_iva));
//	var_dump($result);
	if($result->valid == true){
		$this->valid = true;
		$this->verified =1;
		$this->vies_result	=  array("name"=>$result->name,"address"=>$result->address);
		$this->save_vies_data($result);
	
	}

}

function save_vies_data($result){
	global $db;
	$insert['vatNumber']=$result->vatNumber;
	$insert['name']=$result->name;
	$insert['address']=$result->address;
	$insert['requestDate']=date("Y-m-d");	
	$results = $db->insert('ANAGRAFICA_CONSOLIDATA', $insert);
}


function google_search($q){
	$tags[0]="";
	$tags[1]=" P.IVA ";
	$tags[2]=" partita iva";
	$i=0;
	$max = count($tags);

	while($this->found==false && $i<$max){
		//echo $i." ".$q." ".$tags[$i]."\n";
		$this->search_with_tags($q." ".$tags[$i]);
		$i++;
	}

}

function search_with_tags($q){
		
	$body = $this->get_form_google($q);
	
	foreach($body->responseData->results as $k=>$arr){
		if(!$this->found){
			$this->look_for_vat(strip_tags($arr->content));
			$url = file_get_contents($arr->url);
			//echo strip_tags($url);
			if(DEBUG==1){echo "cerco la partita iva in ".$arr->url."\n";}
			$this->look_for_vat(html_entity_decode(strip_tags($url)));
		}else{
			continue;
		}
	}
	
}

function get_form_google($query_string){
	$url = "https://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".urlencode($query_string)."&userip=".$_SERVER['REMOTE_ADDR'];
if(DEBUG==1){echo $url."\n";}

// sendRequest
// note how referer is set manually
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, "fatturino.it");
$body = curl_exec($ch);
curl_close($ch);

return json_decode($body);
}


function vies_versus_query(){
	$from_vies = str_replace(" ","",$this->purge_attributes($this->vies_result['name']));
	$from_query = str_replace(" ","",$this->purge_attributes($this->query));
	//echo "vies-check".$from_vies."-vs-".$from_query."\n";
	if(levenshtein($from_vies,$from_query)<(strlen($from_query)*0.3) ){return true;}else{return false;}
}

function look_for_vat($string){
	$arr = explode(" ",$string);
	
	foreach($arr as $k => $val){
		$val = strtoupper($val);
		$val = str_replace("P","",$val);
		$val = str_replace("IVA","",$val);
		$val = str_replace(":","",$val);
		$val = str_replace("CFISC","",$val);
		$val = str_replace(".","",$val);
		$val = str_replace("/","",$val);
		$val = str_replace("CF","",$val);
		$val = str_replace("Partita IVA","",$val);
		$val = trim($val);
	
		if(strlen($val)==0){continue;}
		
		$this->partita_iva = $this->may_be_vat($val);
		if($this->partita_iva){
			if(DEBUG==1){echo "ho un candidato ".$this->partita_iva."\n";}
			
			$this->check_vies();
			if($this->valid && $this->vies_versus_query()){
				if(DEBUG==1){echo "il candidato è buono ".$this->partita_iva."\n";}
		
				$this->found = true;
				$this->split_vies_address();
				return;
			}else{
				$this->partita_iva='';
			}
		}
	}
	
	
}

function may_be_vat($string){
	if(strlen($string)==11 && is_numeric($string)){
		return $string;
	}elseif(strlen($string)==13 && substr($string,0,2)=="IT" && is_numeric(substr($string,2,13)) ){
		return substr($string,2,13);
	}
	
	return false;
}

}// fine della classe




/*
 * 
 * 
 * 
 * 
 * 
 * 

 * 
 * 


function find_partita_iva(&$string){
	if(DEBUG==1){echo strlen($string).":'".$string."'\n";}
		

	if(strlen($string)==11 && is_numeric($string)){
		$this->partita_iva = $string;
		$this->found = true;

	}elseif(strlen($string)==13){
		if(DEBUG==1){echo "ho un candidato da 13:".$string."\n";}
		if(DEBUG==1){echo "le prime due cifre sono:".substr($string,0,2)."\n";}

		if(substr($string,0,2)=="IT"){
					if(DEBUG==1){echo "Senza codice di paese:".substr($string,2,13)."\n";}

					$this->partita_iva = substr($string,2,13);
					$this->found = true;
				}
		

	}

}

 * 
}else{
if(DEBUG==1){echo "niente partita iva\n";}
echo json_encode(array("found"=>0,"piva"=>'',"url"=>"Nessun risultato"));
}
exit;

if($piva->found == false){
$json = json_decode(get_form_google($_GET['q']));
$url = $json->responseData->results[0]->url;
if(DEBUG==1){echo $url."\n";}
$piva->start_search($json->responseData->results[0]->content);
// faccio un primo tentativo con i risultati di google
if(DEBUG==1){echo "trovata?".$piva->found ."\n";}
}

if($piva->found == false){
if(DEBUG==1){echo "la cerco in ".$url."\n";}
$web_site = file_get_contents($url);

$piva->start_search($web_site);
// faccio un primo tentativo con i risultati di google
}

if(DEBUG==1){echo "trovata?".$piva->found ."\n";}

if($piva->found == false){
$json = json_decode(get_form_google($_GET['q']." iva"));
$url = $json->responseData->results[0]->url;
if(DEBUG==1){echo $url."\n";}
$piva->start_search($json->responseData->results[0]->content);

}

if(DEBUG==1){echo "trovata?".$piva->found ."\n";}


if($piva->found == false){
$json = json_decode(get_form_google($_GET['q']." partita iva"));
$url = $json->responseData->results[0]->url;

if(DEBUG==1){echo $url."\n";}

$piva->start_search($json->responseData->results[0]->content);

}

if($piva->found == true){
echo json_encode(array("found"=>1,"piva"=>$piva->partita_iva,"url"=>$url,"from_vies"=>$piva->name));
exit;
}else{
if(DEBUG==1){echo "niente partita iva\n";}
echo json_encode(array("found"=>0,"piva"=>'',"url"=>"Nessun risultato"));
}


*/

