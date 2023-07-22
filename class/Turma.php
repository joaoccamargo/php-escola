<?php
require '../config/config.php';

class Turma {
    
    public $id;
    public $descricao;
    public $ano;
    public $vagas;

    public function __construct($descricao, $ano, $vagas){
        $this->descricao = $descricao;
        $this->ano = $ano;
        $this->vagas = $vagas;

    }

    public function getDescricao()
    {
        return $this->descricao;
    }


    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }


    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }


    public function getVagas()
    {
        return $this->vagas;
    }


    public function setVagas($vagas): self
    {
        $this->vagas = $vagas;

        return $this;
    }

    public function salvarDados(PDO $conexao){
        $descricao = $this->descricao;
        $ano = $this->ano;
        $vagas = $this->vagas;

        try {
            $stmt = $conexao->prepare("INSERT INTO turmas (descricao, ano, vagas) VALUES (:descricao, :ano, :vagas)");

            //valores
            $stmt->execute([
                ':descricao' => $descricao,
                ':ano' => $ano,
                ':vagas' => $vagas,
            ]);

            return "Turma criada com sucesso!";

        } catch (PDOException $error) {
            return "Ocorreu um erro!";
        }


    }

   

}