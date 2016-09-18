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

$resultado = $aluno->find($_GET['id']);
echo "<table cellpadding='5'>
          <tr>
              <th>Nome</th>
              <th>Nota</th>
          </tr>  
          <tr>
              <td>".$resultado['nome']."</td>
              <td>".$resultado['nota']."</td>
          </tr>
      </table>
      <br>
      <a href='index.php'>Clique aqui para retornar.</a>";
