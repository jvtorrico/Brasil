<!DOCTYPE hmtl>
<html>
    <head>
        <title>PampaCortePlus</title>
        <meta charset="UTF-8">
         
    </head>
    <body>
       
<?php 
                        echo '<br>';
                     if($_POST){
                    @$nome= $_POST['nome'];
                    @$email= $_POST['email'];
                    @$telefone= $_POST['telefone'];
                    @$atuacao= $_POST['atuacao'];
                     @$acesso=$_POST['acesso'];
                    @$estado= $_POST['estado'];
                    @$cidade= $_POST['cidade'];
                      if (empty($nome)||empty($email)||
                              empty($telefone)||empty($atuacao)
                              ||empty($estado)||empty($cidade)){
                          echo 'todos os campos sao obrigatorios';

                      } else {
                          $result = "Nome:".$nome."<br>E-mail:".$email."<br>Telefone:".$telefone."<br>Atuação:".$atuacao. "<br>Atuação:".$atuacao."<br>Estado:".$estado."<br>Cidade:".$cidade;
                          echo($result);
} }
?>

 </body>
</html>