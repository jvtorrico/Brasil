

<?php

if ($_GET) {
    //print_r($_GET);
    $email = $_GET['email'];
    $pswd = $_GET['pswd'];
    if ($email == 'a@a' && $pswd == 'asasas') {
        //login OK
       echo('Usuário logado com sucesso.');
         //header("location:../index.php?cod=171"); 
    } else {
        //login inválido
        header("location:../index.php?cod=171");
    }
} else {
    header("location:../index.php");
}
?>


