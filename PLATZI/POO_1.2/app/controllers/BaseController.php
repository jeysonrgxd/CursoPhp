<?php

namespace App\controllers;
use Twig\Loader\FilesystemLoader;
use Zend\Diactoros\Response\HtmlResponse;

class BaseController{

   protected $templateEngine;
   public function __construct(){
      
      //especificamos el directoria de la vista que manejaremos
      $loader = new FilesystemLoader('../views');
      
      //obtenemos y configuramos una instacioa del template
      $this->templateEngine = new \Twig\Environment($loader, [
         'debug' => true,
         'cache' =>false,
      ]);
   }

   // creamos una funcion para retornada el renderzado del html y poder utilizarlo
   public function renderHTML($fileName, $data=[]){
      return new HtmlResponse($this->templateEngine->render($fileName, $data)); 
   }
}