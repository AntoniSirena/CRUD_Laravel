
<?php


    class Facebook{
 
      public $nombre;
      public $apellido;
     private $passw;


      public function __construct($nombre, $apellido, $passw){

      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->passw = $passw;

        }

         public function mostrar_informacion(){
  
          echo "Nombre:" . $this->nombre. "<br>" ;
          echo "apellido:" . $this->apellido. "<br>" ;
          echo "Password:" . $this->passw. "<br>" ;

          }

    }
    
            $faceb =new Facebook("Antoni","Sirena",23);
            $faceb -> mostrar_informacion();


 
?>