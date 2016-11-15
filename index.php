<?php

require_once 'Aluno.php';
require_once 'conecta.php';

$alunos = new Aluno($conexao);
echo "<h1>Alunos</h1>";

echo "<p></p></h3><a href='novoaluno.php'>Novo Aluno</a></p>";

?>
<table cellpadding="5">
    <tr>
        <th>Nome</th>
        <th>Nota</th>
        <th>Ação</th>
    </tr>
    <?php
    foreach ($alunos->listar('nome') as $aluno) {
        ?>
        <tr>
            <td> <?php echo $aluno['nome'] ?></td>
            <td> <?php echo $aluno['nota'] ?></td>
            <td>
                <a href="alteraaluno.php?id=<?php echo $aluno['id'] ?>">Edita</a> |
                <a href="excluialuno.php?id=<?php echo $aluno['id'] ?>">Exclui</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
