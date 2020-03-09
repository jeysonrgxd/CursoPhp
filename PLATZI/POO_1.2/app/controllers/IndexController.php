<?php
// a cada cosa que hacemos dentro de un controller le llamamos una accion, evitemos un solo controlador para todo tratemos de dividir en otros archivos controller
namespace App\controllers;
use App\models\{Job,Project}; 
// al usar name space con un autoload tiene que ser el nombre de la clase identico al nombre del fichero de lo contrario el autoload no traera el archivo correcto
class IndexController extends BaseController{
   
   public function indexAction(){
      // echo "indexAction";
      $jobs = Job::all();
   
      $project1 = new Project('Project 1', 'Description 1');
      $projects = [
         $project1
      ];

      $name = 'Hector Benitez';
      $limitMonths = 2000;

      return $this->renderHTML('index.twig',[
         "name"=>$name,
         'jobs' =>$jobs
      ]);

   }
}