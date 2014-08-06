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
                    <div class="imagem_grande"> <a href=""> <img src="img/malevola_grande.jpg"/>  </a>
                    
        </div>
                    
        <div id="texto_grande">
         <h3> Malévola </h3><br/><br/>
         <p> O filme de fantasia estrelado por Angelina Jolie levou cerca de 900 mil pessoas aos cinemas,
             e que arrecadou US$70 milhões na estreia e lidera  a bilheterias nos EUA. A história gira
             em torno do conto de fadas “A bela adormecida” só que no ponto de vista da fada Malévola que
             após ser traída esta cega de ódio e de vingança.</p>
         
            <p> O filme tem a função de entreter  de vários públicos diferentes tanto quanto crianças 
                quanto jovens e adultos. A história é reimaginada sob os eventos ocorridos no conto dos
                irmãos Grimm. A atriz Angelina Jolie conseguiu passar ao publico todo o sentimento 
                claramente retratados por Malévola tais como suas feições, seus gritos, olhares, risos, 
                enfim tudo ficou maravilhosamente representado. </p>
            <p>Ao assistir esse filme é como você descobrir um grande mistério por traz da história dos
                personagens, uma nova arte , traz um novo olhar sobre Malévola,  a princesa Aurora, O 
                corvo Diaval , sobre o rei Stefan  e o príncipe Phillip. O roteiro tenta mostrar um mundo
                jamais visto, em torno de uma ingênua fada com lindas asas negras, Malévola desde a 
                infância leva uma vida em paz no reino dos Moors, mais após seu crescimento neste grande
                reino pacifico um dia os humanos vendo o crescimento dos Moors querem exterminá-los, 
                ameaçando acabar com a harmonia da região, nesse momento Malévola é retratada ao mesmo 
                tempo como heroína e vilã, sendo que ela é a verdadeira bela adormecida, por ter a 
                personalidade adormecida e esquecida em meio a esses sentimentos de ódio e vingança, 
                trazendo o papel de anti-heroina.  
            </p>
            <p>
             Malévola vai criando um enorme carinho por Aurora ao crescimento da menina ao ponto de ser 
             profundo e emocionante ao publico, nos dando varias lição de moral como ter cuidado com a 
             sede de vingança para não ferirmos inocentes e não nos arrependermos depois.O  Filme  é 
             dirigido por Robert Stromberg, que é especialista em efeito visuais e que deixou todo o 
             publico de boca aberta com os efeitos de “Alice no pais das maravilhas “ ,“Avatar” e agora 
             “Malévola” ganhando Oscar por seu melhor trabalho como diretor destes filmes, com uma trilha 
             sonora magnífica ,épica , que se relacionou maravilhosamente bem com o roteiro do filme, que
             por sinal é tocante, emocionante ,animador e muito impressionante, o modo de retratação da 
             bela adormecida foi perfeito. Sem se esquecer da questão “Porque ela alcançou a maldição?” 
             que fazia com que víssemos Malévola como uma bruxa má é mostrada pelo diretor que ela foi 
             injustiçada e que apenas desejava sua vingança.
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
