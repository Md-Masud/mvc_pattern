<?php
$router = include_once 'routes/routes.php';
include_once 'framework/Request.php';
include_once 'framework/router/RouteDispatcher.php';
$request=(new Request())->capture();
$dispatcher=new RouteDispatcher($request,$router);
echo"<pre>";
var_dump($request);die();
echo "</pre>";
//echo "<pre>";
//var_dump($_SERVER);
//echo "<pre>";
//echo "i love my country";

//$route =$_SERVER['REQUEST_URI'];
//$method=$_SERVER['REQUEST_METHOD'];
//$user=$_GET['user'];
//$user=$_POST['user'];
////    parse_str(file_get_contents("php://input"),$post_vars);//put and delete
//var_dump($route,$method);
