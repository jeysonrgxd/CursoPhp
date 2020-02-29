<?php

namespace App\models;


// tratemos manetener dividida que creamos en nuestor poryecto es muy recomendable una clase por archivo
require_once 'Printable.php';

// implementamos la interfaz en esta clase padre ya que de esta forma heredamos alos hijo que tambien estan implemementando dicha interfaz y por ende se puede hacer en el archivo josb la funcion printElement especificarle el tipo de dato que sera de tipo Printable

class BaseElement implements Printable {

   protected $title;
   public $description;
   public $visible = true;
   public $months;

   public function __construct($title, $description){
      $this->setTitle($title);
      $this->description = $description;
   }

   public function getTitle(){
      return $this->title;
   }
    
   public function setTitle($title){
      if($title == ''){
         return "N/A";
      } else {

         $this->title = $title;
      }
   }

   function getDuration(){
      $years = floor( $this->months/ 12);
      $extraMonths = $this->months % 12;
      return "$years years $extraMonths months";
  }

  public function getDescription(){
      return $this->description;
   }

   
}