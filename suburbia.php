<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width">
        <title></title>
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

        
        
	
        <div id="conteudo"> 
          
            <div id="fundoverde">
                <div id="barra">
                Série
                </div>
                
                
                
              
                <div class="fundorosa">
                    <div class="imagem_grande"> <a href=""> <img src="img/suburbia_grande.jpg"/>  </a>
                    
        </div>
                    
        <div id="texto_grande">
         <h3> Suburbia</h3><br/><br/>
         <p> </p>
         
            <p>Foi uma série brasileira apresentada pela rede globo, e o autor fez um vôo rasante, sem encostarem-se ao 
                chão, mais se aproximou bastante do Realismo para poder produzir uma reflexão sobre as questões objetivas
                do dia a dia e abordar temas delicados, tais como o racismo e a opressão social. </p>
            <p>
                Os personagens vivem em situações precárias, e a personagem principal que mora com sua família e trabalha
                em uma mina de carvão. O elenco foi de altíssimas qualidades, todos muito competentes, sem exceções, os 
                espectadores por nenhum minuto duvidou do que estava se passando na tela.
            </p>
            <p>A série também busca idéias freyrianas de democracia racial e ao mesmo tempo faz crítica social ácida. 
                Exclusão e miscelânea, eis as contradições presentes com peso igual no programa. Ela é lírica e tem o 
                olhar do fotógrafo-poeta, não há efeitos de luz, mas sim tendo a visão sempre do diretor que enxerga e 
                oferece colorido, o que diferencia de um simples documentarista. 
            </p>
            <p>O que se pode dizer dessa série, é que foi um ótimo espetáculo para quem assistiu do começo ao fim, e é 
                fácil de ser entendida, até por que as linguagens, dos personagens são de uma forma informal. Passa-se 
                em meio a uma família pobre e sem condições de muita coisa.
        </p>
        </div>
    
                             
    
    
                           
                            
                            
                </div>
            </div>
        </div>
        

        <div id="rodape"> Rodapé </div>

</body>
</html>


