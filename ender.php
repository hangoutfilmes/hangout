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
                    <div class="imagem_grande"> <a href=""> <img src="img/ender_game_grande.jpg"/>  </a>
                    
        </div>
                    
        <div id="texto_grande">
         <h3> Ender’s Game</h3><br/><br/>
         <p> Neste filme conseguimos ver muitos traços da vida real, Por mais que Ender's Game tenha
             sido baseado em um livro escrito no ano de 1977, Ele nos mostra muitas semelhanças na postura 
             dos Estados Unidos sobre o Afeganistão, quando de forma brutal decidiu invadir o país como
             forma de “prevenção” diante de possíveis ataques terroristas. Por trás de uma justificativa
             de que é preciso eliminar uma raça alienígena que quase destruiu a humanidade 50 anos atrás,
             a humanidade evoluiu muito para combater estes invasores, mesmo que estes alienígenas não
             tenham aparecido desde o primeiro ataque. Uma ficção que se apresenta em uma grande parte
             da vida real, as guerras recentes que o digam, a humanidade chega ao extremo usando crianças
             como armas. Pois estes jovens são marionetes nas mãos dos militares, o objetivo destes
             militares é ensinar a estas crianças a aniquilar, sem dó nem piedade estes alienígenas.</p>
         
            <p>Ender (Asa Butterfield) é o escolhido para salvar a humanidade, o jovem é escolhido para
                o por sua capacidade inexplicável de se defender, o coronel Hyrum Graff (Harrison Ford) 
                acredita que o jovem livrará a humanidade dos alienígenas. Criado em uma família militar
                e em uma época onde o medo está presente a todo o momento, Ender possui uma grande 
                habilidade em criar estratégias de guerra, consegue atingir seus objetivos em curto e 
                médio prazo. É justamente por isso que ele é tão valioso para os militares. Assim sendo, 
                logo parte para a escola de guerra, local onde deve aprimorar suas habilidades em guerra.</p>
            <p>E nesta parte acontece uma grande parte das cenas de ação do filme, quase sempre dentro de 
                uma redoma de vidro (Campo de treinamento em batalha) onde acontecem as batalhas entre 
                equipes, todos os recrutas têm plena consciência de que naquele local nada é questão de
                 vida ou morte. Podem se arriscar à vontade que o prejuízo maior é a perda da batalha 
                 de momento. Porem, em meio a este cenário de estratégia de guerra, é moldado um objetivo
                 oculto o aperfeiçoamento da vitória a todo custo, inclusive não levando em conta a perca
                 de vidas humanas. É o ápice da cultura da guerra, onde apenas a vitória interessa, seja
                 ela como for.
            </p>
            <p>
              Quando Ender consegue chegar a liderança de sua própria equipe ele se depara com momento da
              verdadeira guerra. Podemos dizer que este desfecho não foi lá um dos melhores, até que muito
               simples para o que foi exibido ao longo do filme e por este final decepcionante todo o 
               restante se torna pequeno. o filme até possui efeitos especiais interessantes, 
               principalmente dentro da tal redoma de vidro. 
            </p>
            <p>Não há muitos momentos de alívio cômico onde é possível se lembrar de que os “soldados”
                em treinamento ainda são crianças. Entretanto, apesar das poucas virtudes e inúmeras 
                falhas, a marca maior deixada por Ender’s Game é a mensagem nas entrelinhas que passa 
                ao espectador. Atual, é verdade, mas ainda assim abominável. </p>
        </div>
    
                             
    
    
                           
                            
                            
                </div>
            </div>
        </div>
        

        <div id="rodape"> Rodapé </div>

</body>
</html>
