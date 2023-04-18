<! DOCTYPE html>
<html>
    <head>
        <title>dados do usuário</title>
        <meta charset ="UTF-8">
    </head>
    <body>
        <?php
//        print_r($_POST);
        if ($_POST) {

            print_r($_POST); //imprime tudo que estiver na array.

            @$nome = $_POST['nome'];
            @$matricula = $_POST['matricula'];
            @$turma = $_POST['turma'];
            @$telefone = $_POST['telefone'];
            @$endereco = $_POST['endereco'];
            @$estado = $_POST['estado'];

            if (empty($matricula) || empty($nome) || empty($telefone) || empty($turma) || empty($endereco) || empty($estado)) {
                echo('<div class="alert"> Todos os campos são obrigatórios.</div>');
            } else {

                $result = "matricula: " . $matricula . "<br> Nome: " . $nome .
                        "<br> Turma:" . $turma . "<br> telefone:" . $telefone . "<br> endereco: " . $endereco . "<br> estado:" . $estado;
                
                echo($result);
            }
            /* $nome = $_GET['nome'];
              echo("Seu nome é: ". $nome); */
        }
        ?>
    </body>
</html>    