<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="../process/processar_formulario_aluno.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required><br><br>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>