<?php
namespace App\models;

// require_once 'BaseElement.php';
// require_once 'Printable.php';

// utilizamos el use paraa patraernos el ORM de eloquent
use Illuminate\Database\Eloquent\Model;

class Job extends Model{  //extenderemos de Model para crear tipo un esquema de tabla
   
// class Job extends BaseElement implements Printable{
// class Job extends BaseElement{
   // public function __construct($title,$description){
      // modificamos parametros obtenido para despues pasarselos al construtor del padre heredado
      // $modTitle = "Job ".$title ;
      // parent::__construct($modTitle, $description);
      // $this->title = $modTitle;
   // }
   // sobreescribimos el metodo heredado

   // nos traemos una variable eredada de Model para definnir la tabla que queremos
   protected $table = 'jobs';

   // podemos declarar variables con el mismo nombre de nuestra columna de nuestra tabla que estamos utilizando y darle valores por defecto
   private $months = 0;

   
   // public function __construct(Int $months){
   //    $this->months = $months;
   // }

   public function setMonths($months){
      $this->months = $months;
   }
   


   function getDuration(){
      $years = floor( $this->months/ 12);
      $extraMonths = $this->months % 12;
      return " $years years $extraMonths months";
  }

//   al inplementar la interfaces tenemos que crear el metodo de la interfaz la cual es requisito al implementar una interfaz

   // public function getDescription(){
   //    return $this->description;
   // }

} 