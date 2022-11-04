<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('classes/Aluno.php');

class AlunoDao{
    private $conn;
    private $user;
    private $passwd;

    public function __construct($user,$passwd){
       $this->user = $user;
       $this->passwd = $passwd;
    }

    public function cadatroAluno($nome,$email,$telefone,$cidade,$genero){
       
        $this->conn = mysqli_connect("localhost",$this->user, $this->passwd, "escola");
        $sql ="INSERT INTO aluno(nome_alu,email_alu,tel_alu,cidade_alu,genero_al)VALUES('".$nome."','".$email."','".$telefone."','".$cidade."','".$genero."');";
        $this->conn->query($sql);
        mysqli_close($this->conn);
    }

    public function listarAluno(){
        $this->conn = mysqli_connect("localhost",$this->user, $this->passwd, "escola");
        $sqlBusca = 'SELECT * FROM aluno';
        $resultado = mysqli_query($this->conn, $sqlBusca);
        mysqli_close($this->conn);
        $tarefas = array();
        while ($tarefa = mysqli_fetch_assoc($resultado)) {
            $tarefas[] = $tarefa;
        }
        return $tarefas;
    }
}

?>