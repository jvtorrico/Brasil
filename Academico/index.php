        <!DOCTYPE html>
        <!--
        Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
        Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
        -->
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Sistema de ensino</title>
                <link href="css/default.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
                <h2>Sistema de ensino</h2>
                <form method="post" action="detalhesUsuario.php">
                    <table>
                        <tr>
                            <td>Matricula (número):</td>
                            <td>
                                <!-- int matricula = 1872150 -->
                                <input type="number" name="matricula"
                                       placeholder="Matricula">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nome:</td>
                            <td>
                                <input type="text" name="nome"
                                       placeholder="Nome do aluno">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Turmas:</td>
                            <td>
                                <input type="radio" name="turma" value="411">411
                                <input type="radio" name="turma" value="423">423
                                <input type="radio" name="turma" value="413">413
                                <br>
                                <input type="radio" name="turma" value="421">421
                                <input type="radio" name="turma" value="422">422
                                <input type="radio" name="turma" value="433">433
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Telefone:</td>
                            <td>
                                <input type="text" name="telefone"
                                       placeholder="Telefone de contato">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Endereço:</td>
                            <td>
                                <input type="text" name="endereco"
                                       placeholder="Endereço">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Estado:</td>
                            <td>
                                <select name="estado">
                                    <option value="">Selecione um estado</option>
                                    <option value="RS">RS</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Enviar">
                                <input type="reset" value="Limpar campos">
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <?php
                    if ($_GET) {

                        print_r($_GET); //imprime tudo que estiver na array.

                        @$nome = $_GET['nome'];
                        @$matricula = $_GET['matricula'];
                        @$turma= $_GET['turma'];
                        @$telefone= $_GET['telefone'];
                        @$endereco= $_GET['endereco'];
                        @$estado= $_GET['estado'];

                       if (empty($matricula)|| empty($nome) || empty($telefone) || emptay($turma) || empty($endereco)|| empty($estado) )
                       {
                           echo('<div class="alert"> Todos os campos são obrigatórios.</div>');

                       } 
                       else{

                           $result= "matricula: ".$matricula. "<br> Nome: ".$nome.
                                   "<br> Turma:".$turma. "<br> telefone:".$telefone. "<br> endereco: ".$endereco.  "<br> estado:".$estado;
                       }
                       /* $nome = $_GET['nome'];
                        echo("Seu nome é: ". $nome); */ 
                    }
                    ?>
                </form>
            </body>
        </html>
