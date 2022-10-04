<?php 
 require_once("controllers/main_controller.php");
?>


<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body background="imagenes/f1.jpg">
    <div class="div-1">
    <h3><center>Alquiler de Autos</center></h3>
    <H4><center> Carrousel de autos disponibles </center></H4>
    <br>
    </div>
<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
       
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
       
                  
    </div>

    <div class="carousel-inner">
        <?php $i=1;foreach(main_controller::Mostrar() as $imgscar){ ?>       
        <?php  if($i==1){ ?>
        <div class="carousel-item <?php echo "active"?>">
            <img src="<?php echo $imgscar->getimagen()?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5><font size="40"><?php echo $imgscar->getvehiculo()?></font></h5>
               
            </div>
        </div>
        <?php } ?>
        <?php if($i>1) {?>
    <div class="carousel-item <?php echo "" ?>">
            <img src="<?php echo $imgscar->getimagen()?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5><font size="40"><?php echo $imgscar->getvehiculo()?></font></h5>
               
            </div>
        </div>
    
    <?php } ?>
<?php $i++;}?>
</div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>





       







