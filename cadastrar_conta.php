<?php
 include 'conexao.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

$usuario = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = $conecta_db->prepare("SELECT * FROM tb_cadastro WHERE name_user = ?");
$sql->bind_param("s", $nome); // "s" indica que estamos passando um string (CPF)
$sql->execute();
$result = $sql->get_result(); // Executa a consulta e obtém o resultado


      $sql = $conecta_db->prepare ("INSERT INTO tb_cadastro (name_user, email_user, password_user)
	                     VALUES ('$usuario','$email','$senha')") ;
    $sql->execute();


    }

header('location:maps.php');
?>