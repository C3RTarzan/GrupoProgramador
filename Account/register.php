<?php
include "../class/conexao.php";
session_start();
if(empty($_POST['user']) || empty($_POST['pass1']) || empty($_POST['email'])){ //checar se tem campos em branco
    $_SESSION['campos_branco2'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}

if($_POST['pass1'] != $_POST['pass2']){ //checar se tem campos em branco
    $_SESSION['senhaserradas'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}



$user =  mysqli_real_escape_string($conexao, trim($_POST['user']));  // criando variavel
$pass =  mysqli_real_escape_string($conexao, trim($_POST['pass1']));  // criando variavel
$senhamd5 = MD5($pass);
$email =   mysqli_real_escape_string($conexao, trim($_POST['email']));  // criando variavel
$cargo = "user";
$img = "user.png";
$query = "INSERT into user (user, pass, email, cargo, img) VALUES ('$user', '$senhamd5', '$email', '$cargo', '$img')"; //consulta com bd

$queryuser = "SELECT * FROM user where user = '$user'";
$resultuser = mysqli_query($conexao, $queryuser);
$rowuser = mysqli_num_rows($resultuser);

$queryemail = "SELECT * FROM user where email = '$email'";
$resultemail = mysqli_query($conexao, $queryemail);
$rowemail = mysqli_num_rows($resultemail);
if($rowemail > 0 || $rowuser > 0){
    $_SESSION['erro'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}else{
    $resul = mysqli_query($conexao, $query);
} 



?>