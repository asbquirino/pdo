<?php

require_once 'Aluno.php';

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","");
}
catch (\PDOException $e){
    die("Não foi possível estabelecar a conexão com o banco de dados. Erro: ".$e->getCode()." - ".$e->getMessage());
}

$aluno = new Aluno($conexao);

$resultado = $aluno->find($_GET['id']);
if($aluno->deletar($_GET['id'])){
    echo "<p>O aluno ".$resultado['nome']." foi excluído com sucesso.</p>";
    echo "<a href='index.php'>Clique aqui para retornar.</a>";
}

