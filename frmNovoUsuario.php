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
        
        
        
        <form onsubmi="return valida(this);">
    <script>
        function valida(form){  
            if (form.nome.value=="nome,sobrenome"){
                alert("Preeencha o nome e sobrenome Corretamente.");
                form.nome.focus();
                return false;
            }
            var filtro_mail=/^.+@+/
            if (!filtro_mail.test(form.email.value)||form.email.value==""){
                alert("Preencha o e-mail coretamente.");
                form.email.focus();
                return false;
            }
        function  IsNum(v)
        {
            var ValidChars="0123456789";
            var  IsNumber=true;
            var  char;
            
             for (i = 0; i < v.length && IsNumber == true; i++) 
                {
                    char=v.charAt(i);
                    if (validChars.indexOf(char)==-1)
                        {
                             IsNumber=false;
                        }
                }
        return  IsNumber;
    }
    
    if (form.idade.value=="Data Nascimento"||! IsNum(form.idade.value)){
        alert("Preencha a idade corretamente.");
        form.idade.focus();
        return false;
    }
    if (form.enderco.value=="endereço"||form.endereco.value.length<17){
        alert("Preencha o enderço corretamnete.");
        form.endereco.focus();
        return false;
    }
    if(form.celular,value=="celular"){
        alert("Preencha o celular corretamente.");
        form.celular.focus();
        return false;
    }
    
    if (form.senha.value=="senha"||form.value.length<8){
        alert("Preencha a senha coretamente.");
        form.senha.focus();
        return false;
    }
    if (form.confirme_senha.value=="Confirme_senha"||form.confirme_senha.value.length<8){
        alert("Preenche a confirmação de senha corretamente.");
        form.confirme_senha.focus();
        return false;
    }
    if (form.senha.value!=form.confirme_senha.value){
        alert("A senha e a configuração tem que ser iguais!.");
        form.confirme_senha.focus();
        return false;
    }
    if (form.sexo[0].checked==false&&form.sexo[1].checked==false){
       alert("Selecione o seu sexo.");
       return false;
    }
        }
        
    function Celular(f) {
if (f.celular.value.length<9 || f.celular.value.length>10) {
alert("Preencha o telefone corretamente.");
f.celular.focus();
}else{
ddd = f.celular.value.substring(0,2);
if (f.celular.value.length==9) {
part1 = f.celular.value.substring(2,5);
part2 = f.celular.value.substring(5,9);
}
if (f.celular.value.length==10) {
part1 = f.celular.value.substring(2,6);
part2 = f.celular.value.substring(6,10);
}
f.celular.value = "("+ddd+") "+part1+"-"+part2
}

    }
        
 </script>
                                   
</form>
        
        
        
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
                    CADASTRE-SE
                 </div>   
    <div class="conteudo_cadastro">
           
          
    <div id="formulario_cadastro">      
        
          <form method="POST" action="incluirUsuario.php">
        <label>  Nome: </label> <input type="text" id="nome" name="nome" required > <br/>
       <label> Sobrenome:</label> <input type="text" id="sobrenome_usuario" name="sobrenome_usuario" > <br/>
        <label> Data de Nascimento: <input type="date" id="data_nascimento" name="data_nascimento" required value="xx/xx/xxxx"> <br/>
        <label> Sexo: </label> <input type="radio" id="sexo" name="sexo">Feminino<input type="radio" name="sexo">Masculino<br/>
        <label>Celular:</label> <input type="text" id="celular" name="celular" maxlength="10">(DDD+CELULAR) <br/>
        <label> Endereço: </label> <input type="text" id="endereco" name="endereço" required> <br/>
        <label> E-mail: </label> <input type="email" id="email" name="email" required> <br/>
        <label> Confirme E-mail: </label> <input type="email" name="confirme_email" required> <br/>   
        <label> Senha: <label/> <input type="password" name="senha" required>(Mínimo: 8 caracteres) <br/>
        <label> Confirme senha: <label/> <input type="password" name="confirme_senha" required> <br/> 
            <label> Aceito os termos e condições de uso:</label>
	

            <input type="checkbox" name="termos" id=<a href="termosdeuso.php" required></a><br />
        <input type="submit"  value="Cadastrar Dados" />  
        
        
                          
                    
              
    </form>
     </div> 
    </div>        
                    
           
            </div>
        </div>

        <div id="rodape"> Rodapé </div>

</body>
</html>

