<?php

   require 'app/models/Job.php';
   require 'app/models/Project.php';

   // traemos la interfaz printable para poder usa el typeHinting (el tipado de dato) en la
   //funcion printElement
   require_once 'app/models/Printable.php'; 

   require_once 'lib1/Project.php';

   //si quieremos llamar alas clases que esta en un namespace para despues utilizarlas podemos aserlo de la siguiente manera
   // use App\models\Job;
   // use App\models\Project;
   //  use App\models\Printable as prin; esto es con un alias 
    use App\models\Printable; 
   
   // llamamos alas clases y ala vez instanciandolas de esta forma sino queremos usar el use
   $job1 = new App\models\Job('PHP Developer','This is an awesome job!!!');
   $job1->months = 16;

   $job2 = new App\models\Job("Python Developer","This is an awesome job!!!");
   $job2->months = 24;

   $jobs = [
      $job1,
      $job2
      //  [
      //    'title' => 'PHP Developer',
      //    'description' => 'This is an awesome job!!!',
      //    'visible' => true,
      //    'months' => 16
      //  ],
      //  [
      //    'title' => 'Python Dev',
      //    'visible' => false,
      //    'months' => 14
      //  ],
      //  [
      //    'title' => 'Devops',
      //    'visible' => true,
      //    'months' => 5
      //  ],
      //  [
      //    'title' => 'Node Dev',
      //    'visible' => true,
      //    'months' => 24
      //  ],
      //  [
      //    'title' => 'Frontend Dev',
      //    'visible' => true,
      //    'months' => 3
      //  ]


   ];
   
   $project1 = new App\models\Project('Project 1', 'Description 1');
   $projects = [
      $project1
   ];
  
   $projectLib1 = new Lib1\Project();

// usamos lel metodo typeHinting para el tipado de dato
  function printElement(Printable $job) {
      if($job->visible == false) {
      return; //no devuelve nada
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    echo '<p>' . $job->getDuration() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }