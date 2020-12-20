<?php
//router system callback or controller
include_once 'framework/router/Router.php';
$router =new Router();
    $router->add('/user','GET',array(
        'callback'=>function($request){
            $id=$request['id'];
            return "id".$id;
        }
        ,
        'controller'=>'UserController@index',

    ));
