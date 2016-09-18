<?php

require_once 'Aluno.php';

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","");
}
catch (\PDOException $e){
    die("Não foi possível estabelecar a conexão com o banco de dados. Erro: ".$e->getCode()." - ".$e->getMessage());
}

$aluno = new Aluno($conexao);
echo "<h1>Alunos</h1>";

echo "<p></p></h3><a href='novoaluno.php'>Novo Aluno</a></p>";

// --- Listar
echo "<table cellpadding='5'>  
          <tr>
              <th colspan='2'>Ação</th>
              <th>Nome</th>
          </tr>";
foreach($aluno->listar("nome") as $c) {
    echo "<tr>
              <td><a href='alteraaluno.php?id=".$c['id']."'>Altera</a></td>
              <td><a href='excluialuno.php?id=".$c['id']."'>Exclui</a></td>
              <td><a href='mostraaluno.php?id=".$c['id']."'>".$c['nome']."</a></td>
          </tr>";
}
echo "</table>";

// --- Incluir
//$cliente->setNome("Wesley")
//        ->setEmail("wesley@wesley.com.br")
//;
//foreach($cliente->listar("id desc") as $c) {
//    echo $c['nome']."<br>";
//}

// --- Alterar
//$cliente->setId(6);
//        ->setNome("Wesley Willians")
//        ->setEmail("wesley@wesley.com.br")
//;
//foreach($cliente->listar("id desc") as $c) {
//    echo $c['nome']."<br>";
//}

// --- Deletar
//$resultado = $cliente->deletar(5);
//foreach($cliente->listar("id desc") as $c) {
//    echo $c['nome']."<br>";
//}

// --- Find
//$resultado = $cliente->find(6);
//echo $resultado['nome']." - ".$resultado['email']."<br>";
