<?php

try {
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "");
} catch (\PDOException $e) {
    die("Não foi possível estabelecar a conexão com o banco de dados. Erro: " . $e->getCode() . " - " . $e->getMessage());
}
