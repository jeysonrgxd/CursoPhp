<?php
   class Coche{
      /* estos variable private que solo es utilizable en la clase y no puede ser utilzada externamente
      private $ruedas;
      var $color;
      var $motor;
      */

      //protected utilizamos las variables de clase solo en este clase y las que ereden de esta
      protected $ruedas;
      protected $color;
      protected $motor;

      function Coche(){
          $this->ruedas=4;
          $this->color="";
          $this->motor=1600;
          

      }   

      function arrancar(){

          echo "Estoy Arrancando <br>";
      }

      function girar(){

          echo "Estoy Girando <br>";
      }

      function frenar(){

          echo "Estoy frenando <br>";
      }

      function get_ruedas(){
         return $this->ruedas;
      }

      function get_color(){

         return $this->color;
      }

      function set_color($col){
         $this->color=$col;
      }
      /*
      //metodo con parametro y para asignar valor ala variable de la clase
      function dame_color($col_coche,$nom_coche){
         
          $this->color = $col_coche;
          echo "El color del $nom_coche es: ".$this->color."<br>";

      }
      */
  }

   class Camion extends Coche{ //eredamos de Coche

      //la variables se eredan automaicamente y lo inicialisamos
      function Camion(){
         $this->ruedas = 8;
         $this->color ="";
         $this->motor = 1600;
     }





     /*
     //sobreescribimos el metodo de la clase padre
      function set_color($col_camion,$nom_camion){

          $this->color = $col_camion;
          echo "El color del $nom_camion es: ".$this->color."<br>";

      }
      */

      //modificamos el metodo de la clase padre
      function arrancar(){
         parent:: arrancar();//llamamos el metodo de la clase padre y que haga todo lo que se le programo
         //despues de realizar el metodo padre hacer lo resto
         echo "Camion arrancado";
      }

         

   }
   
   
