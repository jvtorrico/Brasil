

<?php
  
require_once './shared/header.php'
?>
<div class="row"> 
    <div class="col-md-4"> </div>
    <div class="col-md-4">
        <form method="post" action="controller/loginController.php">

            <div class="row" style="border: 2px solid green;
                 margin: 30px 30px 30px 30px;
                 padding: 20px 20px 20px 20px">

                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Insira seu Email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Insira sua Senha" name="pswd">
                </div>
                <div class="d-grid">

                    <input type="submit"value="Logar" 
                           class="btn btn-outline-success" 
                           style="margin: 20px 20px 20px 10px;">
                           <?php
                           //capturavam a variável a querry string
                           @$cod = $_REQUEST['cod'];
                           if (isset($cod)) {
                               if ($cod == '171') {
                                   echo('<div class="alert alert-danger">');
                                   echo('verifique o usuário e a senha.');
                                   echo('</div');
                               }
                               else if($cod =='172'){
                                    echo('<div class="alert alert-warning">');
                                   echo('Sua sessão expirou. Realize o login novamente');
                                   echo('</div');
                               }
                               
                           }
                           ?>
                </div>


            </div> 
        </form> 
    </div>

    <div class="col-md-4"> </div>
</div>



<?php
require_once './shared/footer.php'
?>


