<!doctype html>
<html>
    
<?php
  require_once './controller/autenticationController.php';
require_once './shared/header.php';
?>
    <div>
       
        <br>
        <table id="exemple"class="table table-responsive table-bordered table-striped table-dark">
             
            <thead>
 
        <tr>
            <th>
               name
                
            </th>
            <th>
        Stocl
            </th>
            <th>
                Sold
            </th>
            
        </tr>
            </thead>
   <tbody>
        
       
        </tbody>
          <tbody>
             <?php
             
             //abrir a conexão com banco de dados
             //executar a consulta swl
             // trabalhar com o resultado desta consulta
             //$cars= resultado da consulta
             // select*cars
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
foreach ($cars as $row)
{
    echo('<tr>');
    foreach($row as $col){
        echo('<td>');
        echo($col);
        echo('</td>');
    }
    echo('</tr>');
}


?>
        
          </tbody>
        </table>
        
    </div>
    
    
    
<?php
require_once './shared/footer.php';
?>

    </html>