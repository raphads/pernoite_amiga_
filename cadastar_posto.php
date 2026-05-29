<?php
 include 'conexao.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

$usuario = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = $conecta_db->prepare("SELECT * FROM tb_posto WHERE name_posto = ?");
$sql->bind_param("s", $nome); 
$sql->execute();
$result = $sql->get_result();


      $sql = $conecta_db->prepare ("INSERT INTO tb_posto (nome_posto, endereco, num_posto, latitude, longitude, hora_abre, hora_fecha)
	                     VALUES ('$usuario','$email','$senha')") ;
    $sql->execute();


    }

header('location:maps.php');
?>