<?php

class Aluno
{
    Private $db;

    private $id;
    private $nome;
    private $nota;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function find($id){
        $query = "SELECT * FROM alunos WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function listar($ordem = null)
    {
        if($ordem) {
            $query = "SELECT * FROM alunos ORDER BY {$ordem}";
        }
        else{
            $query = "Select * from alunos";
        }
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function inserir()
    {
        $query = "INSERT INTO alunos(nome,nota) VALUE (:nome, :nota)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':nota', $this->getNota());
        if($stmt->execute()){
            return true;
        }
    }

    public function alterar($id)
    {
        $query = "UPDATE alunos SET nome=:nome, nota=:nota WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->getId());
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':nota', $this->getNota());
        if($stmt->execute()){
            return true;
        }
    }

    public function deletar($id)
    {
        $query = "DELETE FROM alunos WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->getId());
        if($stmt->execute()){
            return true;
        }
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNota()
    {
        return $this->nota;
    }

}