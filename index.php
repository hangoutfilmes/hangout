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
                
                
                
        <figure>
            <span class="trs next"></span>
            <span class="trs prev"></span>

           <div id="slider">
              <a href="#" class="trs"><img src="img/natureza.jpg" alt="Naturaza Haaaw! :3" /></a>
              <a href="#" class="trs"><img src="img/panorama.jpg" alt="Um belo panorama" /></a>
              <a href="#" class="trs"><img src="img/plantation.jpg" alt="LOL" /></a>
              <a href="#" class="trs"><img src="img/sphere.jpg" alt="UAU" /></a>
           </div>

            <figcaption></figcaption>
        </figure>
                
    <script type="text/javascript">
          function setaImagem(){
            var settings = {
                primeiraImg: function(){
                    elemento = document.querySelector("#slider a:first-child");
                    elemento.classList.add("ativo");
                    this.legenda(elemento);
                },
 
                slide: function(){
                    elemento = document.querySelector(".ativo");

                    if(elemento.nextElementSibling){
                        elemento.nextElementSibling.classList.add("ativo");
                        settings.legenda(elemento.nextElementSibling);
                        elemento.classList.remove("ativo");
                    }else{
                        elemento.classList.remove("ativo");
                        settings.primeiraImg();
                    }

                },
 
                proximo: function(){
                    clearInterval(intervalo);
                    elemento = document.querySelector(".ativo");

                    if(elemento.nextElementSibling){
                        elemento.nextElementSibling.classList.add("ativo");
                        settings.legenda(elemento.nextElementSibling);
                        elemento.classList.remove("ativo");
                    }else{
                        elemento.classList.remove("ativo");
                        settings.primeiraImg();
                    }
                    intervalo = setInterval(settings.slide,4000);
                },
 
                anterior: function(){
                    clearInterval(intervalo);
                    elemento = document.querySelector(".ativo");

                    if(elemento.previousElementSibling){
                        elemento.previousElementSibling.classList.add("ativo");
                        settings.legenda(elemento.previousElementSibling);
                        elemento.classList.remove("ativo");
                    }else{
                        elemento.classList.remove("ativo");						
                        elemento = document.querySelector("a:last-child");
                        elemento.classList.add("ativo");
                        settings.primeiraImg();
                        this.legenda(elemento);
                   }
                    intervalo = setInterval(settings.slide,4000);
                },
 
                legenda: function(obj){
                    var legenda = obj.querySelector("img").getAttribute("alt");
                    document.querySelector("figcaption").innerHTML = legenda;
                }
            }
 
            //chama o slide
            settings.primeiraImg();

            //chama a legenda
            settings.legenda(elemento);

            //chama o slide à um determinado tempo
            var intervalo = setInterval(settings.slide,4000);
            document.querySelector(".next").addEventListener("click",settings.proximo,false);
            document.querySelector(".prev").addEventListener("click",settings.anterior,false);
        }

        window.addEventListener("load",setaImagem,false);
    </script>     
                
              
                <div class="fundorosa">
                    
                    <div class="imagem1"> <a href="300.php"> <img src="img/trezentos.jpg"/> <h4> 300 - A Ascensão do Império </h4> </a> <p> Depois de Oito anos a continuação de 300...</p> <a href="300.php"> <h5> Saiba +</h5></a></div>
                    <div class="imagem1"> <a href="a_culpa_das_estrelas.php"> <img src="img/a_culpa.jpg"/> <h4> A culpa é das estrelas </h4> </a> <p> Uma adaptação do livro de john geen, que...</p> <a href="a_culpa_das_estrelas.php"> <h5> Saiba +</h5> </a></div>
                    <div class="imagem1"> <a href="capitao_america_2.php"> <img src="img/capitao_america2.jpg"/>  <h4> Capitão América2 </h4></a> <p> O filme não fala só sobre o capitão, mais sim sobre...</p> <a href="capitao_america_2.php"> <h5> Saiba +</h5> </a></div>
                    <div class="imagem1"> <a href="divergente.php"> <img src="img/divergente.jpg"/> <h4> Divergent </h4></a> <p>O mundo onde se passa Divergent é bem curioso, logo...</p><a href="divergente.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="ender.php"> <img src="img/ender_game.jpg"/> <h4> Ender’s Game </h4></a> <p>Neste filme conseguimos ver muitos traços da vida real...</p><a href="ender.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="Frankenstein.php"> <img src="img/frankenstein.jpg"/>   <h4> Frankenstein </h4>  </a>  <p> A alguns anos vem virando moda regravar história de halloween...</p><a href="Frankenstein.php"> <h5> Saiba +</h5></a></div>
                    <div class="imagem1"> <a href="instrumentos_mortais.php"> <img src="img/instrumentos_mortais.jpg"/> <h4> Instrumentos Mortais </h4> </a> <p> Os Instrumentos Mortais - Cidade dos Ossos ...</p> <a href="instrumentos_mortais.php"> <h5> Saiba +</h5> </a></div>
                    <div class="imagem1"> <a href="malevola.php"> <img src="img/malevola.jpg"/> <h4> Malévola </h4> </a> <p> O filme de fantasia estrelado por Angelina Jolie...</p> <a href="malevola.php"> <h5> Saiba +</h5> </a></div>
                    <div class="imagem1"> <a href="monstros_sa.php"> <img src="img/monstos_sa.jpg"/> <h4> Monstros S.A. </h4>  </a>  <p>Um olhar diferente sobre os monstros, um gênero...</p><a href="monstros_sa.php"> <h5> Saiba +</h5></a> </div>
                    <div class="imagem1"> <a href="hobbit2.php"> <img src="img/hobbit.jpg"/> <h4> O Hobbit 2</h4> </a> <p> Uma das maiores obras cinematográficas...</p> <a href="hobbit2.php"> <h5> Saiba +</h5> </a></div>
                    <div class="imagem1"> <a href="questao_de_tempo.php"> <img src="img/questao_tempo.jpg"/> <h4> Questão de Tempo </h4>  </a><p> Como podem filmes mudar o nosso modo de agir ...</p><a href="questao_de_tempo.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="como_aproveitar_fim.php"> <img src="img/aproveitar_fim.jpg"/>  <h4>Como Aproveitar o Fim do Mundo</h4> </a> <p>Com o texto afiado e esperto, a produção...</p><a href="como_aproveitar_fim.php"> <h5> Saiba +</h5> </a></div>
                    <div class="imagem1"> <a href="tapas_e_beijos.php"> <img src="img/tapas_beijos.jpg"/>  <h4>Tapas e Beijos</h4> </a> <p> Tapas e Beijos foi uma das gratas surpresas do ano  ...</p><a href="tapas_e_beijos.php"> <h5> Saiba +</h5></a> </div>
                    <div class="imagem1"> <a href="pe_na_cova.php"> <img src="img/pe_cova.jpg"/>   <h4>Pé na Cova</h4> </a><p>“Pé na Cova” estreou para criticar o preconceito e...</p><a href="pe_na_cova.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="dentista_mascarado.php"> <img src="img/dentista_mascarado.jpg"/>   <h4>O Dentista Mascarado</h4>  </a> <p>Foi uma das produções mais bem-sucedidas de Fernanda Young e </p><a href="dentista_mascarado.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="diva_para_dois.php"> <img src="img/um_diva.jpg"/>  <h4>Um Divã para Dois</h4>  </a> <p>O material dessa série sugeriu uma comédia maliciosa...</p><a href="diva_para_dois.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="mulher_invisivel.php"> <img src="img/a_mulher_invisivel.jpg"/>  <h4>A Mulher Invisível</h4> </a><p>Desilusões amorosas é o combustível da alma humana. Não fossem...</p><a href="mulher_invisivel.php"> <h5> Saiba +</h5></a> </div>
                
                    
                    
                    <div class="imagem1"> <a href="brilhanteFC.php"> <img src="img/brilhante_fc.jpg"/> <h4> Brilhante F.C.</h4> </a>  <p>Foi uma série que foi co-produzida e exibida pela...</p><a href="brilhanteFC.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="a_menina_sem_qualidades.php"> <img src="img/menina_qualidade.jpg"/>      <h4>A Menina sem Qualidades</h4>  </a> <p>Bom, como todo programa ou produção...</p><a href="a_menina_sem_qualidades.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="suburbia.php"> <img src="img/suburbia.jpg"/>   <h4>Suburbia</h4>  </a> <p>Foi uma série brasileira apresentada pela rede globo...</p><a href="suburbia.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="pedro_e_bianca.php"> <img src="img/145488.jpg"/>      <h4>Pedro e Bianca</h4>  </a><p>A série conta a história de dois irmãos gêmeos, de 15 anos...</p><a href="pedro_e_bianca.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="game_of_thones.php"> <img src="img/145488.jpg"/>      <h4>Game of thones </h4>  </a><p>Uma série criada por David Benioff e D. B. Weiss, esta série ...</p><a href="game_of_thones.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="the_walking_dead.php"> <img src="img/145488.jpg"/>      <h4>The Walking Dead </h4>  </a><p>Uma série crida por Frank Darabont, uma série pós-apocalíptica ...</p><a href="the_walking_dead.php"> <h5> Saiba +</h5> </a> </div>
                    <div class="imagem1"> <a href="homens_sao_de_marte.php"> <img src="img/145488.jpg"/>      <h4>Os homens são de marte e é para lá que eu vou</h4>  </a><p>Um filme dirigido por Marcus Baldini, podemos dizer que é uma  ...</p><a href="homens_sao_de_marte.php"> <h5> Saiba +</h5> </a> </div>
                     <div class="imagem1"> <a href="need_for_speed.php"> <img src="img/145488.jpg"/>      <h4>Need for speed</h4>  </a><p>O filme foi baseado em uma das franquias de maior sucesso de videogame  ...</p><a href="need_for_speed.php"> <h5> Saiba +</h5> </a> </div>
                </div>
            </div>
        </div>
        

        <div id="rodape"> Rodapé </div>

</body>
</html>
