<style>
        /* Estilo para a tabela */
        table {
            border-collapse: collapse; /* Mescla as bordas adjacentes */
            width: 100%;
            border: 1px solid #ccc; /* Define a borda da tabela */
        }

        /* Estilo para as células da tabela */
        th, td {
            border: 1px solid #ccc; /* Define a borda para cada célula */
            padding: 8px;
            text-align: left;
        }

        /* Estilo para o cabeçalho da tabela */
        th {
            background-color: #f2f2f2; /* Cor de fundo para o cabeçalho */
        }

        /* Estilo para as células das linhas alternadas (opcional) */
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Cor de fundo para as linhas alternadas */
        }
</style>
<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $turmaSelecionada = $_POST['turma'];

    $stmt = $conexao->prepare("SELECT alunos.* FROM alunos 
    INNER JOIN matriculas ON alunos.id = matriculas.id_aluno 
    WHERE matriculas.id_turma = :id_turma");
    $stmt->bindParam(':id_turma', $turmaSelecionada);
    $stmt->execute();

    echo "<h2>Alunos da Turma Selecionada</h2>";
    echo "<a href='../index.php'>Voltar</a>";
    echo "<hr>";
    echo "<table>";
    echo "<tr><th>Nome</th><th>Data de Nascimento</th><th>Chamada</th></tr>";
    while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $aluno['nome'] . "</td>";
        echo "<td>" . $aluno['data_nascimento'] . "</td>";
        echo "<td>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    echo "<button onclick='imprimirPagina()'>Imprimir Relátorio</button>";
   
}

?>
<script>
    // Função para imprimir a página
    function imprimirPagina() {
        window.print();
    }
</script>
