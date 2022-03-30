<?php 

class PacienteDAO{

    public $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(PacienteModel $model){
       
        $sql = "INSERT INTO paciente(nome, peso, altura, sexo, data_nascimento) VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->peso);
        $stmt->bindValue(3, $model->altura);
        $stmt->bindValue(4, $model->sexo);
        $stmt->bindValue(5, $model->data_nascimento);

        $stmt->execute();

        echo 'Adicionado.';
    }

    public function getAllRows(){
        $stmt = $this->conexao->prepare("SELECT * FROM paciente ORDER BY id desc");
        $stmt->execute();
            
        return $stmt->fetchAll(PDO::FETCH_CLASS);    
    }
  
}