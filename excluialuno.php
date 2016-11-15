<?php

require_once 'Aluno.php';
require_once 'conecta.php';

$alunos = new Aluno($conexao);
$alunos->setId($_GET['id']);

$resultado = $alunos->find();
if ($alunos->deletar($_GET['id'])) {
    ?>
    <h1>Aluno excluido com sucesso</h1>
    <p>O aluno <?php echo $resultado['nome']; ?> foi excluído com sucesso.</p>
    <input type="button" value="Volta" onclick="window.location.href='index.php'">
    <?php
}

