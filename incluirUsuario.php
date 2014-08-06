<?php
include_once 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';
$nome_usuario  = $_REQUEST['nome'];
$sobrenome_usuario = $_REQUEST['sobrenome_usuario'];
$data_nascimento = $_REQUEST['data_nascimento'];
$sexo_usuario = $_REQUEST['sexo'];
$celular_usuario = $_REQUEST['celular'];
$endereco_usuario = $_REQUEST['endereço'];
$email_usuario = $_REQUEST['email'];
$senha_usuario = $_REQUEST['senha'];
$tipo = '1';


$query = "INSERT INTO usuario(NOME_USUARIO,SOBRENOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO,DATA_NASCIMENTO,SEXO_USUARIO,CELULAR_USUARIO,ENDERECO_USUARIO,COD_TIPO)";
$query.= " VALUES('$nome_usuario','$sobrenome_usuario','$data_nascimento','$sexo_usuario','$celular_usuario','$endereco_usuario','$email_usuario','$senha_usuario','$tipo')";


echo' <a href="frmLogin.php"> Efetuar Login </a>';

if(mysql_query($query))
{
    echo '<script> alert ("Usuario Cadastrado com sucesso !") </script>';

}else{
    
    echo'<script> alert("Não foi possivel concluir o cadastro !")';
mysql_error();

}