<?php

require_once 'Aluno.php';
require_once 'conecta.php';

$aluno = new Aluno($conexao);

$aluno->setId($_GET['id'])
      ->setNome($_POST['nome'])
      ->setNota($_POST['nota']);

echo $aluno->getId();
echo $aluno->getNome();
echo $aluno->getNota();

if ($aluno->alterar($aluno->getId())) {
    ?>
    <h1>Aluno alterado com sucesso</h1>
    <input type="button" value="Volta" onclick="window.location.href='index.php'">
    <?php
}
