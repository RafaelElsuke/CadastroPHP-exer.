<?php
session_start();
include_once('cone.php');

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_STRING);
$CPF= filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_NUMBER_INT);


//echo "Nome: $nome <br>";
//echo "E-MAIL: $email";

$create_user = "INSERT INTO usuarios (nome,sobrenome,email,CPF,telefone,created) VALUES('$nome','$sobrenome','$email','$CPF','$telefone',NOW())";
$create_user = mysqli_query($conn,$create_user);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:green;'>usuario cadastrado com suscesso</p>";
    header("Location: sitecadastro.php");
    }else{
        $_SESSION['msg'] = "<p style = 'color:red;'>usuario Näo foi cadastrado com suscesso</p>";
        header("Location: sitecadastro.php");
}