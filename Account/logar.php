<?php
include "../class/conexao.php";
session_start();
if(empty($_POST['user']) || empty($_POST['pass'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}
$user =  mysqli_real_escape_string($conexao, trim($_POST['user']));
$pass =  mysqli_real_escape_string($conexao, trim($_POST['pass']));
$senhamd5 = MD5($pass);

$query = "SELECT * FROM user where user = '$user' and pass = '$senhamd5'";

$result = mysqli_query($conexao, $query); // juntas os 2
$dado = mysqli_fetch_array($result); // extrair dados da tabela sql

$row = mysqli_num_rows($result); // verificar se existe uma linha
if($row > 0){
    $_SESSION['logado'] = true;
    include "../class/session.php";
    header('Location: ../Home');
}else{
    echo "erro";
}
?>