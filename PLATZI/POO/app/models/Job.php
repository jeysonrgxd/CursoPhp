<?php
namespace App\models;

require_once 'BaseElement.php';
// require_once 'Printable.php';

// class Job extends BaseElement implements Printable{
class Job extends BaseElement{
   public function __construct($title,$description){
      // modificamos parametros obtenido para despues pasarselos al construtor del padre heredado
      $modTitle = "Job ".$title ;
      // parent::__construct($modTitle, $description);
      $this->title = $modTitle;
   }
   // sobreescribimos el metodo heredado

   function getDuration(){
      $years = floor( $this->months/ 12);
      $extraMonths = $this->months % 12;
      return "Job duration $years years $extraMonths months";
  }

//   al inplementar la interfaces tenemos que crear el metodo de la interfaz la cual es requisito al implementar una interfaz

   // public function getDescription(){
   //    return $this->description;
   // }

} 