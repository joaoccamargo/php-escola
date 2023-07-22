<?php
require '../config/config.php';

class Aluno {
    public $id;
    public $nome;
    public $dataNascimento;
    public $cpf;

    public function __construct($nome, $dataNascimento, $cpf){
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento): self
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

   public function salvarDados(PDO $conexao){
        $nome = $this->nome;
        $dataNascimento = $this->dataNascimento;
        $cpf = $this->cpf;

        try{
            $stmt = $conexao->prepare("INSERT INTO alunos (nome, data_nascimento, cpf) VALUES (:nome, :data_nascimento, :cpf)");

            //query com os valores
            $stmt->execute([
                ':nome' => $nome,
                ':data_nascimento' => $dataNascimento,
                ':cpf' => $cpf,
            ]);

            return "Aluno salvo com sucesso!";

        } catch (PDOException $error) {
            return "Ocorreu um erro!";
        }

   }
    


}