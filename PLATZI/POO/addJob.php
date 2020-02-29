<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\models\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost:80',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
// asemos todo como si estubieramos en el contexto global
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
// nos va servir para inicializar el ORM
$capsule->bootEloquent();

if(!empty($_POST)){
   $job = new Job();
   $job->title = $_POST["title"];
   $job->title = $_POST["description"];
   $job->save();
}



//   echo "array de GET". PHP_EOL;
//   var_dump($_GET);
//   echo PHP_EOL;
//   echo "array de POST". PHP_EOL;
//   var_dump($_POST);
//   echo PHP_EOL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
   <div class="p-5">
      <h1>Add Job</h1>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
         <label for="">Title</label>
         <input type="text" name="title"><br>
         <label for="">Description</label>
         <input type="text" name="description"><br>
         <input type="submit" value="Save">
      </form>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html> 