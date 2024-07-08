<?php
include_once("cone.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_STRING);
$CPF= filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

//echo "Nome:$nome <br>";
//echo "Email:$email";
?>

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "TELA";

//cria conexäo
$conn = mysqli_connect("$servidor","$usuario","$senha","$dbname");
