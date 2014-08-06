<!doctype html>
<html>
    <head>
        <script language="javascript" type="text/javascript">
            function validar(){
                var email = form1.email.value;
                var senha = form1.senha.value;
                
                if (email =="Email"){
                    alert('Preencha o campo com seu E-mail');
                    form1.email.focus();
                    return false;
                }
                if (senha =="password"){
                    alert('Preencha o campo de senha corretamente.');
                    form1.senha.focus();
                  return false;
                }
            }
        
        
        </script>
        
        
        
        <title> </title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        
    </head>
    <body>
        <h1> &nbsp&nbsp Login </h1>
        <form method="post" action="login.php">
            <label> Email:&nbsp</label><input type="email" name="Email"><br/>
            <label> Senha:</label><input type="password" name="Senha"><br/>
            <input type="submit" value="Entrar"> <br/><br/>
            
        </form>
        Ainda não possue uma conta ?<a href="frmNovoUsuario.php"> Cadastre-se </a>
        <br/>
        Esqueceu sua senha? <a href="recuperarSenha.php"> Recuperar Senha</a>
        <br/>
        Atualizar Perfil <a href="frmAtualizar.php">Atualizar</a>
    </body>
    
</html>


