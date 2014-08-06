<?php

$email = $_GET['login'];
$servidor = 'localhost';
$usuario = 'root';
$senha = '12345678';
$banco = 'logintccdb';

$connection = mysql_connect ($servidor, $usuario, $senha);
$connection_Db = mysql_select_db ($banco, $connection);
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO= '$email'";
$result = mysql_query ($query);
$emailsCadastrados = array();
while ($usuarios = mysql_fetch_assoc($result))
{
    $emailBanco = $usuarios ['EMAIL_USUARIO'];
    $emailsCadastrados[] = $emailBanco;
}

if (in_array ($email, $emailsCadastrados))
{
    echo 'false';
}
else {
    echo 'true';
}
exit();
