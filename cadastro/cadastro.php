<?php
include("connection.php");
include("cadastro.html");
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = "INSERT INTO cadastro(nome,email,senha) VALUES ('$nome', '$email', '$senha')"; 

if(mysqli_query($conexao, $sql)){
    echo "Usuário Cadastrado com Sucesso";
}else{
    echo "Erro" . mysqli_connect_error($conexao);
   
}
?>