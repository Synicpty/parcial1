
<?php

Class main_model {
    private $id;
    private $info;
    private $vinculo;
   
  

    public function __construct($id,$vehiculo,$imagen){
        $this->id=$id;
        $this->vehiculo = $vehiculo;
        $this->imagen = $imagen;
      
     
    }
    public function setid($id){
        $this->id= $id;
    }
    public function setinfo($vehiculo){
        $this->vehiculo= $vehiculo;
    }
    public function setimagen($imagen){
        $this->imagen = $imagen;
    }

   

    public function getid(){
        return $this->id;
    }
    public function getvehiculo(){
        return $this->vehiculo;
    }
    public function getimagen(){
        return $this->imagen;
    }

    

    






}


?>
