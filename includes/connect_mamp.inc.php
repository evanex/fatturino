<?php
// /Applications/MAMP/tmp/mysql/mysql.sock
$user="root";$pass="root";$db_name="fatturino";$server="localhost";
	
$db = new MysqliDb($server, $user, $pass, $db_name);

date_default_timezone_set('Europe/Rome');

