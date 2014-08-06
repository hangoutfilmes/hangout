<?php
 echo'<meta charset=UTF-8>';
 include_once 'conexao/conecta.inc';
 $email = isset($_POST['email']) ? $_POST['email']: null;
 $senha = isset($_POST['senha']) ? $_POST['senha']: null;
 $tipo = isset ($_POST['tipo']) ? $_POST['tipo']: null;
 $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'"; 
 $result = mysql_query($query);
 $totalUsuario = mysql_num_rows($result);
 
if ($totalUsuario === 10)
{
    echo '<a href=frmNovoUsuario.php> Usuario não encontrado </a>';
    
}else{
    $usuario = mysql_fetch_array($result);
    $senhaUsuario = $usuario['SENHA_USUARIO'];
    $tipo = $usuario['TIPO_USUARIO'];
    if($senha !== $senhaUsuario){
        echo '<a href=frmLogin.php> Senha não confere! </a>';
    }else{
        session_start();
        $_SESSION ['email'] = $email;
        $_SESSION ['senha'] = $senha;
        $_SESSION ['tipoUsuario'] = $tipo;
        if($tipo ==='RES'){
            echo '<script type="text/javascript">
            location.href="indexrestrito.php"
            </script>';  
            }else {
            echo'Usuário Logado!';
        }if ($tipo ==='ADM'){
            echo '<script type="text/javascript">
            location.href="admin/indexadmin.php"
            </script>'; 
        }else {
            echo'Tipo de usuario inválido!';
        }
    }
}