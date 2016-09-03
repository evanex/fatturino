<?php
require_once("../includes/db.class.php"); 
require_once("../includes/connect_db.inc.php");
require_once("../includes/functions.inc.php");

session_start();
$_SESSION['user_email']="evan@evan.it";
$_SESSION['user_vatcode']="08445161006";
session_write_close();



//ini_set("display_errors",1);

//This php file acts as a very basic simple controller, loading data and view and generating output
$page_name = isset($_GET['page']) ? trim($_GET['page']) : 'index';


include 'vendor/Mustache/Autoloader.php';
Mustache_Autoloader::register();
spl_autoload_register(function ($class) {
	if(!is_file('classes/' . $class . '.php')) return;
	include 'classes/' . $class . '.php';
});


$path = array(
 'data' => __DIR__ . '/../app/data',
 'views' => __DIR__ . '/../app/views',
 'assets' => '../../assets',
 'base' => '../..',
 'images' => '../../assets/images'
);
$site = json_decode(file_get_contents($path['data'].'/common/site.json'));//this site some basic site variables
$site->protocol = '';//no protocol, so the page's default (http or https) will be used


//if no such page, then show 404 page!
if(!is_file($path['data']."/pages/{$page_name}.json")) $page_name = "error-404";


$sidenav = new Sidenav();


$page = new Page( array('path' => $path, 'name' => $page_name, 'type' => 'page') );

$layout_name = $page->get_var('layout');
$layout = new Page( array('path' => $path, 'name' => $layout_name, 'type' => 'layout') );

if(($navList = &$layout->get_var('sidenav_navList')))
{
	$sidenav->set_items($navList);
	$sidenav->mark_active_item($page_name);
}



//now make an engine, with custom loader, pass page&layout name to it and let it autoload!
$engine = new Mustache_Engine(array(
	'cache' => '_cache',
	'partials_loader' => new CustomLoader($path['views'] , array('layout' => $layout_name, 'page' => $page_name))
));



$context = array( "page" => $page->get_vars() , "layout" => $layout->get_vars(), "path" => $path , "site" => $site);
$context['breadcrumbs'] = $sidenav->get_breadcrumbs();

$context['createLinkFunction'] = function($value) {
 return '?page='.$value;
};


echo $engine->render($layout->get_template(), $context);
