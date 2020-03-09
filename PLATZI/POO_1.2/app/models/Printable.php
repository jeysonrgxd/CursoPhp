<?php
namespace App\models;

// es como un contrato o un acuerdo que bamos a extandarizar el uso de ciertas cosas
interface Printable {
   
   //utilizan metodos publicos ya que el proposito de las interfazes es exponer la forma en la que nos bamos acomunicar con ella

   public function getDescription();
}