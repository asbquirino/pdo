<?php

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","");

    echo "Lista todos os alunos. <br>";

    echo "Nome - Nota <br>";

    $query = "SELECT * FROM alunos";

    foreach($conexao->query($query) as $cliente){
        echo $cliente['nome']." - ".$cliente['nota']."<br>";
    }

    echo "<br><br><br>";

    echo "Os que tem as 3 maiores notas. <br>";

    echo "Nome - Nota <br>";

    $query = "SELECT * FROM alunos ORDER BY nota DESC LIMIT 3";

    foreach($conexao->query($query) as $cliente){
        echo $cliente['nome']." - ".$cliente['nota']."<br>";
    }

}
catch (\PDOException $e){
    echo "Não foi possivel estabelecar a conexão com o banco de dados. Erro: ".$e->getCode()." - ".$e->getMessage();
}
