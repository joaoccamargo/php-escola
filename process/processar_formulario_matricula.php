<?php
include '../config/config.php';
include '../class/Matricula.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idAluno = $_POST['idaluno'];
    $idTurma = $_POST['idturma'];
    $dataMatricula = $_POST['data_matricula'];

    // Cria objeto com valores
    $matricula = new Matricula($idAluno, $idTurma, $dataMatricula);

    // Salva os valores no banco de dados
    $resultado = $matricula->salvarDados($conexao);

    echo $resultado;
}
?>
