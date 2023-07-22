<?php 
require '../config/config.php';

class Matricula {

    public $id;
    public $idAluno;
    public $idTurma;
    public $dataMatricula;

    public function __construct($idAluno, $idTurma, $dataMatricula){
        $this->idAluno = $idAluno;
        $this->idTurma = $idTurma;
        $this->dataMatricula = $dataMatricula;
    }

    public function salvarDados(PDO $conexao){

        $idAluno = $this->idAluno;
        $idTurma = $this->idTurma;
        $dataMatricula = $this->dataMatricula;

        try {
            $stmt = $conexao->prepare("INSERT INTO matriculas (id_aluno, id_turma, data_matricula) VALUES (:id_aluno, :id_turma, :data_matricula)");

            //valores
            $stmt->execute([
                ':id_aluno' => $idAluno,
                ':id_turma' => $idTurma,
                ':data_matricula' => $dataMatricula,
            ]);

            return "Matricula criada com sucesso!";

        } catch (PDOException $error) {
            return "Ocorreu um erro!";
        }

    }
}