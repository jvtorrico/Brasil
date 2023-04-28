<!DOCTYPE hmtl>
<html>
    <head>
        <title>PampaCortePlus</title>
        <meta charset="UTF-8">
          <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p><b>Atenção!</b> a solicitação para utilizar o sistema Pampa Corte Plus depende da aprovação do Administrador do sistema. Para tal, preencha corretamente
        todos os campos solicitados. Em breve entraremos em contato</p>
        <form>
            
            <table>
                <tr>
                <td>Nome</td>
                <td> <input type="text" name="nome" placeholder="informe seu nome completo"></td>
                <td></td>
                </tr>
                
                <tr>
                <td>E-mail</td>
                <td> <input type="text" name="e-mail" placeholder="informe seu e-mail"></td>
                <td></td>
                </tr>
                
                <tr>
                <td>Telefone</td>
                <td> <input type="number" name="telefone" placeholder="informe seu telefone"></td>
                <td></td>
                </tr>
                
                <tr>
                <td>Atuação</td>
                <td> <textarea name= "atuacao" placeholder="informe sua área de atuação"> </textarea> <td>
                <td></td>
                </tr>
                
                <tr>
                    <td> selecione um tipo de acesso<td> 
                    <td>
                        <input type= "radio" name ="acesso" value="Administrador"> Administrador
                        <br>
                        <input type= "radio" name ="acesso" value="Estudante"> Estudante
                        <br>
                        <input type="radio" name="acesso" value="Produtor"> Produtor
                        <br> 
                        <input type="radio" name="acesso" value="Professor"> Professor
                        <br> 
                        <input type="radio" value="acesso" value=" Tecnico"> Técnico
                        <br>  
                        <input type="radio" name="acesso" value="Visitante"> Visitante
                    </td>
                </tr>
                   
             
                    
                    
              
           
            </table
            
        </form>
<?php

?>

 </body>
</html>