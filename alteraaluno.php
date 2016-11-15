<?php

require_once 'Aluno.php';
require_once 'conecta.php';

$alunos = new Aluno($conexao);

$alunos->setId($_GET['id']);

$aluno = $alunos->find($alunos->getId());

$alunos->setNome($aluno['nome'])
       ->setNota($aluno['nota']);
?>

<h1>Edita Alunos</h1>

<form action="gravaluno.php?id=<?php echo $alunos->getId(); ?>" method="post">
    <table>
        <tr>
            <td>
                <label>Nome</label>
            </td>
            <td>
                <input type="text" name="nome" value="<?php echo $alunos->getNome(); ?>" size="100" maxlength="150">
            </td>
        </tr>
        <tr>
            <td>
                <label>Nota</label>
            </td>
            <td>
                <input type="number" name="nota" value="<?php echo $alunos->getNota(); ?>" min="0" max="10">
            </td>
        </tr>
    </table>
    <br/>
    <input type="submit" value="Grava">
    <input type="button" value="Volta" onclick="window.location.href='index.php'">
</form>
