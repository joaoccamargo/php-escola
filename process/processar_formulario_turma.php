<?php
include '../config/config.php';
include '../class/Turma.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $ano = $_POST['ano'];
    $vagas = $_POST['vagas'];

    // Cria objeto com valores
    $turma = new Turma($descricao, $ano, $vagas);

    // Salva os valores no banco de dados
    $resultado = $turma->salvarDados($conexao);

    echo $resultado;
}
?>
