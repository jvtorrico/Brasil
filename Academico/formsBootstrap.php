<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms Boostrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            .col-sm-12{
                border: 1px solid green;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form method="post" action="formsBootstrap.php">
                <div class="row page-header">
                    <div class="col-sm-12">
                        <h1>Menu</h1> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Matrícula: <input type="text" class="form-control" id="matricula" placeholder="insira sua matricula" name="matricula"></label>
                            
                        </div>
                        <div class="form-group">
                            <label>Nome:<input type="text" class="form-control" id="nome" name="nome"></label>
                        </div>
                        <div class="form-group">
                            <label>Turma:</label>
                            <div class="radio">
                              <label><input type="radio" name="turma" value="411" >411</label>   
                              <label><input type="radio" name="turma" value="421" >421</label>   
                              <label><input type="radio" name="turma" value="431" >431</label>   
                                  
                            </div>
                            <div class="radio"> 
                              <label><input type="radio" name="turma" value="311" >311</label>   
                              <label><input type="radio" name="turma" value="321" >321</label>   
                              <label><input type="radio" name="turma" value="331" >331</label>
                       
                            </div>
                     
                        </div>
                        <div class="form-group">
                            <label for ="estado">Selecione um estado:</label>
                            <select class="form-control" id="estado" name="estado">
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="PR">PR</option>
                            </select>
                   
                    </div>
          <div class="form-group">
              <label>selecione uma disciplina</label>   
         <div class="checkbox">
             
          <label><input type="checkbox" value="PDI">PDI</label>
            </div>
              <div class="checkbox">
             
          <label><input type="checkbox" value="DSI">DSI</label>
            </div>
<div class="checkbox disabled">
  <label><input type="checkbox" value="DSI II" disabled>DSI II</label>
</div> 
          </div>                       
                        
                        <div class="radio"> 
                            <input type="submit" value="Enviar" class="btn btn-primary"> 
                            <input type="reset" value="Limpar Campos" class= "btn btn-danger"> 
                        
                        
                        </div>
                        <?PHP
                        if($_POST) {
                            print_r ($_POST);
                            $matricula= $POST('matricula');
                            $nome= $POST('nome');
                            $turma= $POST('turma');
                            $estado= $POST('estado');
                            $disciplina= $POST('disciplina');
                        
                            echo('<div class="panel panel success">
                                   <div class="panel-heading"> Dados informados</div>
                                   <div class= "panel-body">
                                   </div>
                                   </div>                                    ');
                            
                        }
                     
                        ?>
                    </div>
                         
            
                </div>

            </form>  
           <div class="col-sm-4">
                        <img src="img/campus-ufsm-gilciano-sala-2-.jpg" alt=" "/>
                    </div>
        </div>
    </body>
</html>
