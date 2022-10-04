<?php
require_once("models/main_model.php");


    class main_controller{
        public static function Mostrar(){
            
          $imgscar[]= new main_model(1,"Toyota Hilux","Imagenes//Toyota.jpg");
          $imgscar[]= new main_model(2,"BMW Series X","Imagenes//seriex.jpg");
          $imgscar[]= new main_model(3," Mercedes Maybach","Imagenes//maybach.jpg");
          $imgscar[]= new main_model(4," Nissan Qashqai","Imagenes//qn.jpg");
          
            return $imgscar;
        }


    }

?>

