

<?php

if ($_POST) {
    //print_r($_POST);
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    if ($email == 'a@a' && $pswd == 'asasas') {
        //login OK
       echo('Usuário logado com sucesso.');
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


