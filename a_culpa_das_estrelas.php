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
                    <div class="imagem_grande"> <a href=""> <img src="img/a_culpa_grande.jpg"/>  </a>
                    
        </div>
                    
        <div id="texto_grande">
         <h3> A culpa é das estrelas </h3><br/><br/>
         <p> Uma adaptação do livro de john geen, que mostra um tema muito difícil de se lidar sendo ele 
             o câncer na adolescência, representado por duas estrelas sendo eles Shailene Woodley e Ansel
             Elgort, para atrair o publico e superar preconceitos mostrando-se uma surpresa. Por ser um 
             filme romântico típicos daqueles “filmes para chorar” a culpa é das estrelas traz desde o 
             inicio o  problema do protagonista sendo ele o câncer e todos os conflitos decorrentes a 
             esta doença , sendo menos uma historia lacrimosa manipuladora e mais uma historia honesta 
             para obras desse gênero. </p>
         
            <p>O filme se passa onde Hazel (Shailne Woodley) e Gus(Ansel Elgort) se divertem a longo do 
                fato de Gus ter perdido uma perna , e de ela ter uma incapacidade pulmonar. A diversão 
                decorrida entre eles é o ponto que mais agrada os espectadores, por serem personagens 
                fortes e maduros para a pouca idade que eles tem , e cheios de perguntas e inseguranças 
                sobre o que realmente é a morte, a vida, e a história que deixaram para os seus próximos,
                não sendo fácil abordar esse tema com leveza mas mesmo assim conseguindo trazer aplausos,
                por ser um roteiro que é adaptado no livro e sendo um ritmo fluido , ocultando alguns 
                elementos do casal tais como tal: Não se saber nada sobre a universidade de Hazel e sua 
                vida lá, e muito menos a vida dos pais e amigos, o foco esta direcionado apenas nos dois 
                em todos os momentos , em todas as imagens, permitindo assim uma profundidade na 
                personalidade de cada um.</p>
            <p> Tendo autores impressionantes, e atores magníficos, se havia alguma duvida em relação a
                Woodley após “Divergente” neste filme ela demonstra que é capaz, apenas com alguns olhares
                e poucos gestos, sem esquecer de que Elgort também esta muito a vontade com seu personagem,
                com suas tiradas sarcásticas , e sua personalidade interessante, preso entre suas insegurança
                escondidas e sua aparência forte. 
            </p>
            <p>
              As cenas de paisagens históricas são muito presentes  e reforçam o caráter político 
              da produção. Desde o início, Rogers critica o desrespeito à privacidade dos outros. 
              Ele declara que sempre lutou pela liberdade, que agora é ignorada pelos responsáveis 
              do controle de inteligência. O tema não poderia ser mais atual, em um mundo onde países 
              se espionam.  
            </p>
            <p>E com a sintonia de ambos os atores as cenas belíssimas no filme ocorrem no silencio, com 
                a comunicação dos dois através de um olhar, como no primeiro encontro do casal o qual 
                ocorreu no grupo de apoio. Para que isso seja mais nocivo Josh Bone tenta sempre colocar 
                a câmera mais próxima possível do rosto dos dois, evitando imagens que explorem a doença 
                de ambos, sendo assim Gus raramente e visto caminhando ou mostrando sua perna mecânica, 
                enquanto Hazel revela seus tubos que drenam os líquidos do seu pulmão essa é uma maneira 
                respeitosa, demonstrando os seres humanos através das emoções que sentem.  </p>
            <p>A culpa é das estrelas se torna um projeto muito acima da média comparado com os dramas 
                de adolescentes normalmente oferecidos ao publico, os personagens revelam complexidade e 
                se alteram em duvidas normalmente típicas da juventude e em questões profundas como amor 
                e morte, dentro do genero melodrama romântico , sendo abordado de uma forma naturalista e 
                comovente por john geen.</p>
        </div>
    
                             
    
    
                           
                            
                            
                </div>
            </div>
        </div>
        

        <div id="rodape"> Rodapé </div>

</body>
</html>
