<?php

require_once 'Cliente.php';
require_once 'ServiceDb.php';

try {
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "");
} catch (\PDOException $e) {
    die("Não foi possível estabelecar a conexão com o banco de dados. Erro: " . $e->getCode() . " - " . $e->getMessage());
}

$aluno = new Cliente();
echo "<h1>Alunos</h1>";

$cliente->setNome("Maria");
        =>setEmail("maria@wesley.com.br");

$serviceDb = new ServiceDb($conexao);
$serviceDb->find()
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

