<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Matricula</title>
</head>
<body>
    <h1>Cadastro de Matricula</h1>
    <form action="../process/processar_formulario_matricula.php" method="POST">
        
        <label for="idaluno">Id Aluno:</label>
        <input type="number" name="idaluno" required><br><br>

        <label for="idturma">Id Turma:</label>
        <input type="number" name="idturma" required><br><br>
        
        <label for="data_matricula">Data Matricula:</label>
        <input type="date" name="data_matricula" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>