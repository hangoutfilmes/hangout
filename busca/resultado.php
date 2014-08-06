<?php
    include "connection.php";
?>

<?php
    $buscar=$_POST['buscar'];
    $sql = mysql_query ("SELECT * FROM filmes WHERE nome LIKE '%".$buscar."%'");
    $row = mysql_num_rows($sql);
    if($row > 0){
        while($linha = mysql_fetch_array($sql)){
            $nome = $linha['nome'];
            $genero = $linha['genero'];
            echo "<strong> Nome: </strong>".@$nome;
            echo "<br /><br />";
            echo "<strong> Genero: </strong>".@$genero;
        }
    }else{
        echo "Não foi possivel localizar o filme";
    }
    
?>    
