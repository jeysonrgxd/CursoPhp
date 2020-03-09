<?php

   namespace App\controllers;
   use App\models\{Job};

   

   class JobsController extends BaseController{

      public function getAddJobAction($request){
         var_dump($request->getMethod()); // nos devuelve el valor de tipo de peticion que esta asiendo
         var_dump((string)$request->getBody()); //tenemos que castear para poder obtener los valores
         var_dump($request->getParsedBody()); // nos devuelve los valores parseados clave y valor como array indexado

         if($request->getMethod() == "POST"){
            $postData = $request->getParsedBody();
            $job = new Job();
            $job->title = $postData["title"];
            $job->description = $postData["description"];
            $job->visible = true;
            $job->months = $job->getDuration($job->setMonths(12));
            $job->save();
         }

         // limpiamos el array de post
         foreach ($_POST as $key => $value) {
            $_POST[$key] = NULL;
         }

         // include '../views/addJob.php';
         // como ya estamos heredando de clase BaseController ps utilizamos el metodo
         return $this->renderHTML('addJob.twig');

      }
   }

