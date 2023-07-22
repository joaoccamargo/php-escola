<?php
include '../config/config.php';
include '../class/Aluno.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];

    // Cria objeto com valores
    $aluno = new Aluno($nome, $dataNascimento, $cpf);

    // Salva os valores no banco de dados
    $resultado = $aluno->salvarDados($conexao);

    echo $resultado;
}
?>
