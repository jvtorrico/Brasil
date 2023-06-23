<!doctype html>
<html>
    
<?php
require_once './charet/header.php';
?>
    <style>
        .carousel-indicators [data-bs-taget] {
            background-color: black; 
        }
      
        
    </style>
    <div class=" row "></div>
    <div class="col-md-12" style="vertical-align: middle;"></div>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" data interval="10000" >

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner" style="">
    <div class="carousel-item active">
      <img src="img/curry1.jfif" alt="Los Angeles" class="d-block w-100">
  
    </div>
    <div class="carousel-item">
      <img src="img/curry2.jfif" alt="Chicago" class="d-block w-100">
  
    </div>
    <div class="carousel-item">
        
      <img src="img/curry4.jpg" alt="New York" class="d-block w-100" width="450px">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<?php
require_once './charet/footer.php';
?>

    
    
    </html>