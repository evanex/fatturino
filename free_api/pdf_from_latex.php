<?php
//ini_set('display_errors',1);

require_once("../includes/db.class.php"); 
require_once("../includes/connect_db.inc.php");
require_once("../includes/functions.inc.php");
require_once("../includes/free_invoice_functions.php");

$results = load_invoice_data($_SERVER['QUERY_STRING'],1);

//count_invoice_views_plus_one($_SERVER['QUERY_STRING'],1);

if(count($results)==0){header("Location: /");}

$template = file_get_contents("invoice.tex");

//$results['ragione_sociale']="TEDESCHI EVAN";

foreach($results as $k => $val){
	$template = str_replace('$'.$k.'$',latexSpecialChars($val),$template);
}

$fattura = new calcola_fattura($results);
// paragrafo in tabella: \feetype{Accounting Services} % Fee category description


foreach($fattura->voci_fattura as $descrizione =>$costo){
    $costo = number_format($costo,2,',',' ');
	$descrizione = latexSpecialChars($descrizione);
	if($descrizione==TOTALE){
	$righe_fattura.=' \hline \textbf{'.$descrizione.'} & \EUR & '.$costo.' \\\\ '."\n"; 
	}else{
	$righe_fattura.="{$descrizione} & \EUR & {$costo} \\\\ \n"; 
	}
}

$template = str_replace('$RIGHE_FATTURA$',$righe_fattura,$template);

$filename = rand(0,99999999);
// Modalit\`a di pagamento: rimessa diretta su cc IBAN: 0600066445




file_put_contents ( $filename.'.tex' , $template );


shell_exec("/usr/bin/pdflatex --interaction batchmode $filename && rm *.log *.aux");


header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="fattura_'.str_replace(' ','_',$results['ragione_sociale']).'.pdf"');
readfile($filename.'.pdf');
unlink($filename.'.pdf');
unlink($filename.'.tex');


function latexSpecialChars( $string )
{
    $map = array( 
    		"è"=>"\`e",
    		"é"=>"\'e",
    		"ù"=>"\`u",
    		"ò"=>"\`o",
    		"ì"=>"\`i",
    		"à"=>"\`a",
            "#"=>"\#",
            "$"=>"\$",
            "%"=>"\%",
            "&"=>"\&",
            "~"=>"\~{}",
            "_"=>"\_",
            "^"=>"\^{}",
            "{"=>"\{",
            "}"=>"\}",
    );
	
	$map['data_fatt'] = date("d-m-Y",strtotime($map['data_fatt']));
	
    foreach($map as $search=>$replace){$string = str_replace($search,$replace,$string);}
    return $string;
}
