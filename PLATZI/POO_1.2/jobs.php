<?php

   //unico require 
   // require_once 'vendor/autoload.php';

   // require 'app/models/Job.php';
   // require 'app/models/Project.php';

   // traemos la interfaz printable para poder usa el typeHinting (el tipado de dato) en la
   //funcion printElement
   // require_once 'app/models/Printable.php'; 

   // require_once 'lib1/Project.php';

   //si quieremos llamar alas clases que esta en un namespace para despues utilizarlas podemos aserlo de la siguiente manera
   // use App\models\Job;
   // use App\models\Project;
   //  use App\models\Printable as prin; esto es con un alias 
   $job1 = new Job('PHP Developer','This is an awesome job!!!');
      $job1->months = 16;

      $job2 = new Job("Python Developer","This is an awesome job!!!");
      $job2->months = 24;

      $jobs = [
         $job1,
         $job2
      ];
      
      $project1 = new Project('Project 1', 'Description 1');
      $projects = [
         $project1
      ];

   
   // llamamos alas clases y ala vez instanciandolas de esta forma sino queremos usar el use
   
  
   // $projectLib1 = new Lib1\Project();

// usamos lel metodo typeHinting para el tipado de dato
  