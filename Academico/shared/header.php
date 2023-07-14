<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Página Principal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
      
    
       
        <style>
            .col-md-12{
                border: 1px solid black;
            }
            p{
               text: text-bg-info;
                
            }
            
        </style>
        <script>
            $(document) .ready(function(){
            $('#exemple') .DataTable();
        });
        </script> 
    </head>
    <body class="container">
        <!<!-- menu -->
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                     <li class="nav-item">
    <a class="nav-link " href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tablepage.php">Table Bootstrap</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="modalpage">Modal Bootstrap</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="carouselpage">Modal Carousel</a>
  </li>
  
   <?php 
   @session_start();
if($_SESSION)
{
    echo('<li class="nav-item">
      <a class="nav-link link-danger"
        style="text-decoration:none;"
        href="controller/logoutController.php?cod=logout">Logout</a>
  </li>');
    
    
}
   
   ?>
      
  
  
    </ul>
                
            </div>
            
        </div>
        <!<!-- fim do mwnu -->
        <div class="row">
            <!<!-- Corpo da página -->  
            <div class="col-md-12"> 