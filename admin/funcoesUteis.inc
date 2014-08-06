 <?php
function validaAutenticacao($link,$tipo)
{
    '<meta charset=UTF-8>';
    session_start();
    
    if(!isset($_SESSION['email'])or !isset($_SESSION['senha'])){
        session_destroy();
        echo '<script>
        alert("Você não Efetuou login.")
        location.href="'.$link.'"
  </script>';
    }
    else {
        if($tipo === 'RES'){include_once 'conexao/conecta.inc';}
        if($tipo === 'ADM'){include_once '../conexao/conecta.inc';}
        $email=$_SESSION['email'];
        $senha=$_SESSION['senha'];
        $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
        $result = mysql_query ($query);
        $totalUsuario = mysql_num_rows($result);
        if ($totalUsuario !== 0){
            $usuarios = mysql_fetch_assoc($result);
            $senhaBanco = $usuarios['SENHA_USUARIO'];
            $tipoBanco = $usuarios['TIPO_USUARIO'];
            if ($senha !==$senhaBanco){
                session_destroy();
                echo '<script>
                alert ("Sua senha não confere.")
                location.href="'.$link.'"
                </script>';
            }
            if ($tipo !== $tipoBanco){
                session_destroy();
                echo '<script>
                alert (Você não tem permissão de acesso a esta página.)
                location.href="'.$link.'"
                </script>';
            }
        }
        
    }
    
}
