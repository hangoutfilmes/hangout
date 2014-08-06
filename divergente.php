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
                    <div class="imagem_grande"> <a href=""> <img src="img/divergente_grande.jpg"/>  </a>
                    
        </div>
                    
        <div id="texto_grande">
         <h3> Divergente </h3><br/><br/>
         <p> O mundo onde se passa Divergent é bem curioso, logo nos primeiros minutos, Tris 
             (Shailene Woodley) explica ao expectador sobre a história, que em um futuro não muito 
             distante toda a cidade de Chicago esta destruída e os moradores foram todos separados em 
             facções que são de acordo com as suas habilidade e escolhas, esclarecendo ao publico 
             alguns questões sendo elas como ocorreu a separação, o que havia antes da divisão entre
             outras. Existentes as cinco facções como amizade (agricultores), advogados (erudição),
             médicos (franqueza), guardas (audácia), e o governo (abnegação). </p>
         
            <p>O livro pode explicar bem este contexto, porém o filme não fornece essas explicações.
                Para os não iniciados é difícil se integrar em um novo mundo, compreender que é 
                arriscado não pertencer a nenhuma facção e também a se tornar divergent, como se faz 
                a  separação entre as facções, ou como ocorrem as eleições para determinar qual facção 
                vai liderar todas as demais. Pela trajetória do filme fica claro através da personagem
                Tris e de sua escolha de abandonar a facção de origem (abnegação) para se juntar aos 
                amantes de adrenalina, jovens aventureiros e violentos da audácia.</p>
            <p>O lugar onde a audácia mora é uma espécie de treinamento militar extremo, mostrando que 
                os fracos merecem ser excluídos da facção ou mortos. Este governo em Divergent é de
                praticas nazi-facistas por isso Kate Winslet a vilã da história, se define como a
                Hitler feminina, porém ela não quer purificar o povo pela raça, e sim pela aversão 
                a natureza humana, ela quer excluir ciúme, inveja e outras fraquezas humanas para criar 
                um exercitam praticamente de zumbis sem identidade. 
            </p>
            <p>
             É difícil associar divergente a outros sucessos típicos infanto-juvenis como crepúsculo e 
             jogos vorazes por ser adaptações literárias que querem o mesmo publico alvo como crepúsculo
             leva a defesa da abstinência sexual enquanto em divergent Tris tem medo do sexo, em jogos
             vorazes jovens brigam entre si pra se tornarem mais forte e por a imposição dos jovens no
             caso de divergent as violentas regras internas da audácia . Os dois tipos distintos de 
             governos são tiranos, porém o de divergent é mais perverso , já que são os próprios moradores
             que fazem as regras e as praticam por conta própria, sem esquecer a lógica do extermínio. As
             semelhanças com ambos esses filmes param por ai, a bastantes cenas de ação ao longo, de combate 
             e sangue, muitas treinamento pelo qual Tris deve passar, o roteiro acompanha com calma o aperfeiçoar 
             da garota na audácia, Shailene Woodle da conta da complexidade e personalidade da personagem, 
             como nos momentos de tensão, em cenários do medo e teste de facas. O diretor Neil Burger que 
             apostou no talento nato da atriz foi bem sucedido por isso e aproximou a câmera ao seu rosto 
             sempre que possível. 
            </p>
            <p>A algumas limitações dos efeitos especiais na cidade futurista, porém o roteiro traz uma
                quantidade surpreendente de reviravoltas que acabam com a tensão do telespectador, dando 
                focos em momentos importantes, divertindo também o publico com boas cenas de ação e com o
                aumento de dificuldade que tris deve enfrentar, sem esquecer de destacar o romance 
                simples com o líder Quatro, sem ser meloso e com muitas cenas de amor,o filme cumpriu 
                seus desafios e incluiu o máximo da história do livro em seu roteiro , para agradar aos
                fãs e explicar as bases da história para aqueles que ainda não conheciam as obras da
                autora Veronica Roth.</p>
        </div>
    
                             
    
    
                           
                            
                            
                </div>
            </div>
        </div>
        

        <div id="rodape"> Rodapé </div>

</body>
</html>
