<!DOCTYPE html>
<html>
    <head>
        <title>PampaCortePlus</title>
        <meta charset="UTF-8">
          <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p class="alert"><b>Atenção!</b> a solicitação para utilizar o sistema Pampa Corte Plus depende da aprovação do Administrador do sistema. Para tal, preencha corretamente
        todos os campos solicitados. Em breve entraremos em contato</p>
        <form method="post" action="pampacorteplus.php">
            
            <table>
                <tr>
                <td>Nome</td>
                <td> <input type="text" name="nome" placeholder="informe seu nome completo"></td>
                <td></td>
                </tr>
                
                <tr>
                <td>E-mail</td>
                <td> <input type="text" name="email" placeholder="informe seu e-mail"></td>
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
                <td> selecione um tipo de acesso<td>  
                <tr>
                   
                    <td>
                        <input type= "radio" name ="acesso" value="Administrador"> Administrador
                        <br>
                        <input type= "radio" name ="acesso" value="Estudante"> Estudante
                        <br>
                        <input type="radio" name="acesso" value="Produtor"> Produtor
                        <br> 
                        <input type="radio" name="acesso" value="Professor"> Professor
                        <br> 
                        <input type="radio" name="acesso" value=" Tecnico"> Técnico
                        <br>  
                        <input type="radio" name="acesso" value="Visitante"> Visitante
                    </td>
                </tr>
                <tr>
                    <td> Estado</td>
                    <td>
                <select name="estado">
                   
                    <option value=""> Selecione um estado</option>
                    <option value="rs"> RS</option>
                    <option value="sc"> SC</option>
                    <option value="sp"> SP</option>
                    
                    
                    
                    
                    
                 </select>  
                        </td>
                </tr>
                <tr>
                    <td>Cidade</td>
                    <td>
                        <select name="cidade">
                            <option name="">Selecione uma cidade</option>
                            <option name="sm">Santa Maria</option>
                            <option name="flo">Florianópolis</option>
                            <option name="spc">São Paulo</option>
                        </select> 
                     
                    </td>   
                </tr>
                <tr>

                    <td>
                                        <br>
                <input type="submit" value="Solicitar Acesso">
                </td>
                </tr>
                
            </table>
            
       
<?php if ($_GET) {
                
                @$nome = $_GET['nome'];
                @$email = $_GET['email'];
                @$telefone = $_GET['telefone'];
                @$endereco = $_GET['atuacao'];
                @$acesso = $_GET['acesso'];
                @$estado = $_GET['estado'];
                @$cidade = $_GET['cidade'];
                
              
                if ( empty($nome)
                        || empty($email) || empty($telefone) 
                        || empty($atuacao) || empty($acesso) || empty($estado)|| empty($cidade)) {
                    echo('<div class="alert"> Todos os campos são obrigatórios. </div>');
                }else{
                    
                    $result =  "<br>Nome: ".$nome.
                            "<br>Email: ".$email. "<br>Telefone: ".$telefone.
                            "<br>Atuação: ".$atuacao.
                            "<br>Acesso: ".$acesso.
                            "<br>Estado: ".$estado.
                            "<br>Cidade: ".$cidade;
                    echo($result);
                }
                
               
            
} 
?>
 </form>
 </body>
</html>