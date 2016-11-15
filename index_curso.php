<?php

require_once 'Aluno.php';

try {
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "");
} catch (\PDOException $e) {
    die("Não foi possível estabelecar a conexão com o banco de dados. Erro: " . $e->getCode() . " - " . $e->getMessage());
}

$aluno = new Aluno($conexao);
echo "<h1>Alunos</h1>";

echo "<p></p></h3><a href='novoaluno.php'>Novo Aluno</a></p>";

// --- Listar
echo "<table cellpadding='5'>  
          <tr>
              <th>Nome</th>
              <th>Nota</th>
              <th>Ação</th>
          </tr>";
foreach ($aluno->listar("nome") as $c) {
    echo "<tr>
              <td>".$c['nome']."</td>
              <td>".$c['nota']."</td>  
              <td>
                  <a href='alteraaluno.php?id=" . $c['id'] . "'>Edita</a> |
                  <a href='excluialuno.php?id=" . $c['id'] . "'>Exclui</a>
                  </td>
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
