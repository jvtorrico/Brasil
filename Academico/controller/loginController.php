

<?php

if ($_POST) {
    //print_r($_POS
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    
    //abrir a conexão
    $dados= array('email' => 'a@a', 'pswd' => 'asasas');
    if ($email == $dados['email'] && $pswd == $dados['pswd']) {
        //login OK
       //echo('Usuário logado com sucesso.');
       //abrir a sessão
       session_start();
       // criei a sessão "login" 
       $_SESSION['login']= $email; 
       
       header("location:../home.php");
    } else {
        //login inválido
        header("location:../index.php?cod=171");
    }
} else {
    header("location:../index.php");
}
?>


