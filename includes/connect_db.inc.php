<?php
switch($_SERVER['SERVER_NAME']){
	case 'localhost':
	$user="root";$pass="root";$db_name="fatturino";$server="localhost";
	break;
	case 'fatturino.it':
	case 'www.fatturino.it':
	$user="root";$pass="xxxx";$db_name="fatturino";$server="localhost";
	break;
	default:
		echo "DB ERROR";
		exit;
}

$db = new MysqliDb($server, $user, $pass, $db_name);

date_default_timezone_set('Europe/Rome');
