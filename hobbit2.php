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
                    <div class="imagem_grande"> <a href=""> <img src="img/hobbit_grande.jpg"/>  </a>
                    
        </div>
                    
        <div id="texto_grande">
         <h3> O Hobbit 2 </h3><br/><br/>
         <p> Uma das maiores obras cinematográficas do mundo volta aos cinemas mundiais como O Hobbit: 
             A Desolação de Smaug, a divisão de O Hobbit em três filmes foi muito criticada mas é inegável
             que o diretor  Peter Jackson sabe como conduzir esta obra de arte. O Hobbit: Uma Jornada 
             Inesperada tinha como maior mérito o fato de fazer ligações O Hobbit e O Senhor dos Anéis,
             poucas pessoas ficaram empolgadas com o lançamento de uma versão estendida, ao contrário 
             do que aconteceu em O Senhor dos Anéis.</p>
         
            <p>É certo que O Hobbit: A Desolação de Smaug é um grande filme.  Desenvolve muito bem seus
                personagens e por inserir uma ação bem mais empolgante da vista no anterior.</p>
            <p>Finalmente o tão esperado encontro com Smaug ocorreu, um dragão ameaçador e feroz, 
                que ganha ares aterrorizantes graças aos excelentes efeitos obtidos no filme. O encontro
                de Bilbo e Smaug é o grande ápice da produção cinematográfica.
            </p>
            <p>
              Diferentemente de O Senhor dos Anéis, O Hobbit é uma trilogia em que os filmes são muito 
              mais dependentes uns dos outros. Os longas de O senhor dos anéis  possuíam momentos claros 
              de encerramento. Não é o caso de O Hobbit, que mais uma vez termina em um momento épico, 
              deixando o telespectador com aquele gostinho de quero mais. Muitos dizem que o Hobbit não 
              é uma narrativa, pois não possui início, meio e fim, mas o que muitos não entendem é que 
              um filme completa o outro O Hobbit: Uma Jornada Inesperada (inicio), O Hobbit: A Desolação
              de Smaug (meio) e por ultimo mais não menos importante O Hobbit: Lá e de Volta Outra Vez
              (fim), e é inegável que este longa mantém seu público na expectativa. 
            </p>
            <p>A Desolação de Smaug não é um filme perfeito mais com certeza chegou muito perto disto,
                estando atrás da trilogia O Senhor dos Anéis. E é quase que impossível para os fãs não
                ficarem empolgados e nostálgicos para conferir os elfos assassinando os orcs de maneira
                ágil e intensa. </p>
            
            <p>Agora a única coisa que podemos fazer é esperar para ver O Hobbit: Lá e de Volta Outra Vez,
                que promete muito mais que os dois filmes anteriores. </p>
        </div>
    
                             
    
    
                           
                            
                            
                </div>
            </div>
        </div>
        

        <div id="rodape"> Rodapé </div>

</body>
</html>
