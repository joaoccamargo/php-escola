<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escola</title>
</head>
<body>
    <h1>Sistema Escola Teste</h1>
    <p>Bem vindo(a) ao sistema de escola, selecione uma opção abaixo:</p>
    <a href="cadastraraluno.php"><li>Cadastrar Aluno</li></a>
    <a href="cadastrarturma.php"><li>Cadastrar Turma</li></a>
    <a href="cadastrarmatricula.php"><li>Efetuar Matricula</li></a>


    <h3>Lista de Aluno</h3>

    <form action="../process/processar_formulario_buscar.php" method="post">
        <label for="turma">Selecione a Turma:</label>
        <select name="turma" id="turma">
            <option value="1">1º Ano</option>
            <option value="2">2º Ano</option>
            <option value="2">3º Ano</option>
        </select>
        <input type="submit" value="Mostrar Alunos">
    </form>

</body>
</html>

