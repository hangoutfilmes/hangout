<!DOCTYPE html>  
<html> 
    <head>
        
            <form onsubmit="return valida(this);">
        <script>
        function valida(form){
             if (from.nome.value=="nome"){
             alert("Preencha o nme corretamente.");
             from.nome.focus();
             return false;
         }
          var filtro_mail=/^.+@.+\..{2,3}$/
         if (!filtro_mail.test(from.email.value)|| from.email.value=="confirmarlogin"){
             aleret("Confirme o E-mail para atualizar.");
             from.email.focus();
             return false;
         } 
         
         function IsNum(v)
         
         {
             var validaChars="0123456789";
             var IsNumber=true;
             var char;
             
             for(i=0;i<v.length&&IsNumber==true;i++)
                 {
                     char=v.charAt(i);
                     if(validaChars.indexOf(char)== -1)
                 {
                     IsNumber=false;
                 }
             }
             return IsNumber;
             
        }
         
         function validarSenha(){
            senha1 = document.f1.senha.value
            senha2 = document.f1.confirmarsenha.value
            
            if (senha1 == senha2)
                alert("senhas iguais")
            else
                alert("senhas diferentes")
        }  
         
         
         
        }
            </script>

    </form>

        
<title><h1>Atualizar Usuário</h1></title>
<form id="formulario" action="incluirUsuario.php" method="post" >
           
    <h2>Atualizar Perfil</h2>
                <label> Nome:</label><br/>
                <input type="text" name="nome" id="nome" />
		<br />
                <label>Digite um email:</label><br/>
                <input type="text" name="login" id="login" />
		<br />
                  <label>Confirme o email:</label><br/>
                <input type="text" name="confirmarlogin" id="confirmarlogin" />
		<br />
		Senha:<br />
                <input type="password" name="senha" id="senha" size="20"/><br />
                <label>Confirme a Senha</label><br/>
		<input type="password" name="confirmarsenha" id="confirmarsenha" size="20"/><br />
		<input type="submit" value="Atualizar" onClik="Alualizar" />
	</form>
    </head>
    </body>
    </html>
