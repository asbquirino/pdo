<?php

require_once 'Aluno.php';
require_once 'conecta.php';

$aluno = new Aluno($conexao);

$aluno->setNome($_POST['nome'])
      ->setNota($_POST['nota']);

if ($aluno->inserir()) {
    ?>
    <h1>Aluno inserido com sucesso</h1>
    <input type="button" value="Volta" onclick="window.location.href='index.php'">
    <?php
}
