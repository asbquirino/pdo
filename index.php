<?php

require_once 'Cliente.hpp';

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","");
}
catch (\PDOException $e){
    die("Não foi possivel estabelecar a conexão com o banco de dados. Erro: ".$e->getCode()." - ".$e->getMessage());
}

$cliente = new Cliente($conexao);

// --- Incluir
//$cliente->setNome("Wesley")
//        ->setEmail("wesley@wesley.com.br")
//;
//foreach($cliente->listar("id desc") as $c) {
//    echo $c['nome']."<br>";
//}

// --- Listar
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

# --- Find
$resultado = $cliente->find(6);
echo $resultado['nome']." - ".$resultado['email']."<br>";
