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
                Novidades
                </div>
                
                
                
              
                <div class="fundorosa">
                    <div class="imagem_grande"> <a href=""> <img src="img/capitao_america2_grande.jpg"/>  </a>
                    
        </div>
                    
        <div id="texto_grande">
         <h3> Capitão América 2 </h3><br/><br/>
         <p> O filme não fala só sobre o capitão, mais sim sobre a shild como um todo. O filme se 
             trata do mundo Marvel. Com algumas senas de ação muito bem elaboradas filme surpriendeu a 
             muitos fãs Marvel que não se animaram tanto com o primeiro filme do capitão, a Marvel não 
             vem acertando muito em seus filmes tais como Homem de ferro 3 e Thor O Mundo Sombrio que 
             decepcionaram muitos fãs por não terem sido muito empolgantes como se esperava.</p>
         
            <p>Superando claramente o Primeiro filme, a sequência conta com muito mais ação a relação 
                entre shild e hidra. Existem inúmeras cenas de lutas, perseguições, tiroteios e explosões,
                mas sempre investindo na especialidade do Capitão e de sua parceira a viúva negra o
                combate corpo a corpo. Apenas na batalha final os efeitos especiais roubam a cena, 
                mas sempre na média nem muito e nem pouco mais no ponto.</p>
            <p>O maior mérito do filme está em seus vários personagens que de forma nenhuma se perdem 
                no desenvolvimento da história. Escrito por Christopher Markus e Stephen McFeely, 
                talvez seja um dos melhores roteiros desenvolvido no universo Marvel. Mesmo sendo um 
                filme considerado do gênero ação o humor marca presença, principalmente na relação 
                entre o Capitão e o Falcão, que é introduzida de forma natural e elegante. 
            </p>
            <p>
              As cenas de paisagens históricas são muito presentes  e reforçam o caráter político 
              da produção. Desde o início, Rogers critica o desrespeito à privacidade dos outros. 
              Ele declara que sempre lutou pela liberdade, que agora é ignorada pelos responsáveis 
              do controle de inteligência. O tema não poderia ser mais atual, em um mundo onde países 
              se espionam.  
            </p>
            <p>O filme deixa uma abertura para Os Vingadores 2, incluindo as duas cenas bem especiais
                nos créditos finais, o longa conta com duas cenas nos créditos. Uma no meio e outra no
                final de tudo. Então, fique atento. </p>
        </div>
    
                             
    
    
                           
                            
                            
                </div>
            </div>
        </div>
        

        <div id="rodape"> Rodapé </div>

</body>
</html>
