
<?php 
//creacion de clase anonima dentro de una clase normal en una funcion que devuelve un objeto de clase anonima
//las clases anonimas se utilizan cuando queremos crear objetos con pocos atributos metodo y no hereden de otras clases osea clases senciallas
	class Animal{

		function tipo_animal($tipo, $nombre, $patas){
			return new Class($tipo,$nombre,$patas){
				var $tipo;
				var $nombre;
				var $patas;
				function __construct($tipo,$nombre,$patas){
					$this->tipo=$tipo;
					$this->nombre=$nombre;
					$this->patas=$patas;
				}

				function getTipo(){
					return $this->tipo;
				}

				function getNombre(){
					return $this->nombre;
					
				}

				function getPatas(){
					return $this->patas;
					
				}
			};		
		}
	}

//metodo creacion de clase anonima por variable. de la misma manera tiene el mismo concepto que para y cuando se utuliza este tipos de clases
	$persona =function ($a,$b,$c){
			return  new Class($a,$b,$c){
			var $nombre;
			var $genero;
			var $edad;
			function __construct($nom,$gen,$edad){
				$this->nombre=$nom;
				$this->genero=$gen;
				$this->edad=$edad;
			}

			function getNombre(){
				return $this->nombre;

			}

			function getGenero(){
				return $this->genero;
				
			}

			function getEdad(){
				return $this->edad;
				
			}
		};
	};



 ?>