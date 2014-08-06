<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script type='text/javascript' src='js/menu_jquery.js'></script>

        <script type="text/javascript"> 
        var texto = "Faça sua busca";
        
        function preenche(){
        var valor=document.getElementById("busca").value;
        if(valor == ""){
        document.getElementById("busca").value=texto;   
        }
        }
        
        function limpa(){
        var valor=document.getElementById("busca").value;
        if(valor == texto){
        document.getElementById("busca").value=''; 
        }
        }
        </script>
        
        
        
        
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
        
        
        
        
    </head>
    <body onload="preenche();">

            
        <div id="fundo_pesquisa">
            
            <div id="buscar">
            <form method="get" action="" >
            <input type="texto" onclick="limpa();" onblur="preenche();" name="palavra" id="busca" value="">
            <input type="submit" value="Buscar">
            </form>
            </div>
        </div>
            
            
        
        
    <div class="topo">
        <div class="logo">
          <a href="index.php"> <img src="img/logo_hangout.fw.png"/> </a>
        </div>
            
            
        
        <div id="topo_formulario">  
        
            <form method="post" action="login.php">
            <div id="formulario1">
            <label> Email:&nbsp</label><input type="email" name="Email"><br/>
            </div>
            
            <div id="formulario2">
            <label> Senha:</label><input type="password" name="Senha"><br/>
            </div>
            
            <div id="formulario3">
            <input type="submit" value="Entrar"> <br/><br/>
            </div>
            
        Ainda não possue uma conta ?<a href="frmNovoUsuario.php"> Cadastre-se </a>
        <br/>
        Esqueceu sua senha? <a href="recuperarSenha.php"> Recuperar Senha</a>
        <br/>
        Atualizar Perfil <a href="frmAtualizar.php">Atualizar</a>
                    </form>
                
            
        </div>
    </div>
        
        
        <div id="fundo_menu">

<div id='cssmenu'>
     <ul>
        <li><a href='index.php'> Home </a> </li>
        <li class='has-sub'><a href='#'> Filme </a>
            <ul>
              <li><a href='filme_acao.php'> Ação </a></li>
              <li><a href='filme_comedia.php'> Comédia </a></li>
              <li><a href='filme_romance.php'> Romance </a></li>
              <li><a href='filme_drama.php'> Drama </a></li>
              <li><a href='filme_terror.php'> Terror </a></li>
              <li class='last'><a href='filme_aventura.php'> Aventura </a></li>
            </ul>
        </li>
                    
        <li class='has-sub'><a href='#'> Séries</a>
            <ul>
              <li><a href='serie_acao.php'> Ação </a></li>
              <li><a href='serie_comedia.php'> Comédia </a></li>
              <li><a href='serie_romance.php'> Romance </a></li>
              <li><a href='serie_drama.php'> Drama </a></li>
              <li><a href='serie_terror.php'> Terror </a></li>
              <li class='last'><a href='serie_aventura.php'> Aventura </a></li>
            </ul>
        </li>
        
        <li><a href='diretores.php'> Diretores </a></li>
        <li class='last'><a href='contato.php'> Contato </a></li>
     </ul>
    </div>
        
        </div>


         
<div id="conteudo_cadastro"> 
          
            <div id="fundoverde_cadastro">
                <div id="barra">
                    Atualizar Perfil
                 </div>   
    <div class="conteudo_cadastro">
           
          
    <div id="formulario_cadastro">      
        
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

        
    <form id="formulario" action="incluirUsuario.php" method="post" >
                
            <div id="atualizar_nome">
                  <label> Nome: </label><input type="text" name="nome" id="nome" />
            </div>

            <div id="atualizar_email">
                 <label>Digite um email: </label><input type="text" name="login" id="login" />
            </div>

            <div id="atualizar_email_conf">
                 <label>Confirme o email: </label><input type="text" name="confirmarlogin" id="confirmarlogin" />
            </div>

            <div id="atualizar_senha">
                <label>Senha: </label><input type="password" name="senha" id="senha" size="20"/>
            </div>

            <div id="atualizar_senha_conf">
                 <label>Confirme a Senha: </label><input type="password" name="confirmarsenha" id="confirmarsenha" size="20"/>
            </div>

            <div id="atualizar_botao">
                <input type="submit" value="Atualizar" onClik="Alualizar" />
            </div>
	</form>
     </div> 
    </div>        
                    
           
            </div>
        </div>

        <div id="rodape"> Rodapé </div>

    </body>
</html>