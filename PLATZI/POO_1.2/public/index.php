<?php
  // inicializacion de errores en php
  ini_set('display_errors',1); //nos inicializa variables de php
  ini_set('display_starup_error',1);
  error_reporting(E_ALL); // E_ALL es como todo los errores

  require_once '../vendor/autoload.php';

  use Illuminate\Database\Capsule\Manager as Capsule;
  use Aura\Router\RouterContainer;

  $capsule = new Capsule;

  $capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
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
  
  // $route = $_GET["route"] ?? '/'; //el ?? es como el javascript ||

  // if($route == "/"){

  //  require '../index.php';
     
  // }else if($route == 'addJob'){

  //  require '../addJob.php'; 

  // }

// solo por ahora tendremos esta funcion aqui
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


  $request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
  );

  $routerContainer = new RouterContainer(); //creamos un contenedor de rutas

  //creamos un mapa de rutas es como la estructura que va ir definiendo que ruta corresponde que cosa
  $map = $routerContainer->getMap();

  // primer parametro nombre de nuestra rutas, despues es la ruta principal, despues es lo que bamos aregresar cuando hagamos match cuando encontremos algo
  $map->get('index', '/Curso_Platzi/POO/', [
    "controller" => "App\controllers\IndexController",
    "action" => "indexAction"
  ]);

  $map->get('addJobs', '/Curso_Platzi/POO/jobs/add', [
    "controller" => "App\controllers\JobsController",
    "action" => "getAddJobAction"
  ]);
  $map->post('saveJobs', '/Curso_Platzi/POO/jobs/add', [
    "controller" => "App\controllers\JobsController",
    "action" => "getAddJobAction"
  ]);

  // bamos a obtener el matcher el cual es un objeto en el cual podemos llamar un match que ahor si compara el objeto request de lo que tenmos en nuestro mapa
  $matcher = $routerContainer->getMatcher();

  $route = $matcher->match($request);

  if(!$route) {
    echo "No route";
  
  }
  else{
    
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    $controller = new $controllerName;
    $response = $controller->$actionName($request);
    echo $response->getBody();

  }

  // var_dump($route);
  // echo "<br>";
  // var_dump($route->handler);
  
  //var_dump($request->getUri()->getHost()); // esta getUri, getHost getPath viene definido como parte en PSR7 lo tenemos estanderizado
  //var_dump($request->getUri()->getPath()); 