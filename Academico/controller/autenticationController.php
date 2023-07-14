<?php

session_start();
// se não existir a sessão login
if(!isset($_SESSION['login'])) 
{
    header('location:index.php? cod=172');  
    
}
?>