<?php
   
//   require_once 'vendor/autoload.php';

   use App\models\{Job, Project};
   
   $jobs = Job::all();
   
   $project1 = new Project('Project 1', 'Description 1');
   $projects = [
      $project1
   ];
  
   // $projectLib1 = new Lib1\Project();

// usamos lel metodo typeHinting para el tipado de dato
  function printElement($job) {
      if($job->visible == false) {
      return; //no devuelve nada
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->months . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }