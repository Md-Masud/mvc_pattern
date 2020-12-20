<?php
class RouteDispatcher{
    private $request;
    private $router;
 public function __construct(Request $request ,Router $router)
 {
   $this->request=$request;
   $this->router=$router;
 }
 public  function  routeDispatcher()
 {
  $url=$this->request->getPath();
  $method=$this->request->getMethod();
  $callable=$this->router->match($url,$method);
 }
}