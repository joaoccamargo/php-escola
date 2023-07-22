<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
</head>
<body>
    <h1>Cadastro de Turma</h1>
    <form action="../process/processar_formulario_turma.php" method="POST">
        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" cols="30" rows="10" required></textarea><br><br>

        
        <label for="ano">Ano:</label>
        <input type="number" name="ano" required><br><br>
        
        <label for="vagas">Vagas:</label>
        <input type="number" name="vagas" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>