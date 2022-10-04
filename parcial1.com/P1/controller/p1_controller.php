<?php

require_once("models/p1_model.php");
require_once("utils/p1_util.php");

    class p1_controller{
        private $precio,  $dias, $pago;


        public static function Mostrar(){
            $precio=20;

            $dias=rand(1,10);
            
            $autos[] = new p1_model(0, "BMW", " Series X", $precio, $dias, p1_util::Operaciones($precio, $dias), "img\seriex.jpg", "mostrar.php", "img\seriex.jpg","img\maybach.jpg","img\Toyota.jpg");

            $dias=rand(1,10);

            $autos[] = new p1_model(1, "Mercedes", " Maybach ", $precio, $dias, p1_util::Operaciones($precio, $dias), "img\maybach.jpg", "mostrar.php","img\seriex.jpg","img\maybach.jpg","img\Toyota.jpg");

            $dias=rand(1,10);

            $autos[] = new p1_model(2, "Toyota", " Hilux 2022", $precio, $dias, p1_util::Operaciones($precio, $dias), "img\Toyota.jpg", "mostrar.php", "img\seriex.jpg", "img\seriex.jpg", "img\Toyota.jpg");

            return $autos;
            
        }

    }


?>