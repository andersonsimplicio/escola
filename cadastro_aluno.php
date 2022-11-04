<?php 
echo "Ola Mundo!";
require_once("dao/AlunoDao.php");
session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION["passwd"])){
    echo "<br>User: ".$_SESSION['usuario']." Senha: ".$_SESSION["passwd"];
    $alunos = new AlunoDao($_SESSION['usuario'],$_SESSION["passwd"]); 
    $nome =$_POST["nome"];
    $email =$_POST["email"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $genero = $_POST["genero"]=="on"? "masculino" : "feminino";
    $alunos->cadatroAluno($nome,$email,$telefone,$cidade,$genero);
    header("location:index.php?link=3");
}else{
    header("location:index.php?link=3");
}

?>