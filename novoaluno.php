<?php

require_once 'Aluno.php';
require_once 'conecta.php';

$alunos = new Aluno($conexao);
?>

<h1>Novo Aluno</h1>

<form action="gravanovoaluno.php" method="post">
    <table>
        <tr>
            <td>
                <label>Nome</label>
            </td>
            <td>
                <input type="text" name="nome" size="100" maxlength="150">
            </td>
        </tr>
        <tr>
            <td>
                <label>Nota</label>
            </td>
            <td>
                <input type="number" name="nota" min="0" max="10">
            </td>
        </tr>
    </table>
    <br/>
    <input type="submit" value="Grava">
    <input type="button" value="Volta" onclick="window.location.href='index.php'">
</form>