<?php
require_once '../vendor/autoload.php';
require_once '../bootstrap/app.php';
use App\Controllers\HomeController;
$dsad = new HomeController(); 
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
// $requestUri = parse_url($_SERVER['REQUEST_URI']);
// $requestUri = $requestUri['path'];
// echo $requestUri;
// $dirNamePublic = dirname($_SERVER['SCRIPT_NAME']);//in ra /public
// echo '<pre>';
// print_r($dirNamePublic);
// echo '</pre>';
// $pathArr = explode($dirNamePublic, $requestUri);//in ra url dang sau public
// echo '<pre>';
// print_r($pathArr);
// echo '</pre>';

?>