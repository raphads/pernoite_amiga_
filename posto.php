<?php
include "conexao.php";

date_default_timezone_set('America/Sao_Paulo');

$posto_id = $_GET['id'];

// Dados do posto
$stmt = $conecta_db->prepare("SELECT * FROM tb_posto WHERE id_posto = ?");
if (!$stmt) {
    die("Erro no prepare1: " . $conecta_db->error);
}
$stmt->bind_param("i", $posto_id);
$stmt->execute();
$posto = $stmt->get_result()->fetch_assoc();

// Fotos
$stmt = $conecta_db->prepare("SELECT caminho FROM fotos_postos WHERE id_posto = ?");
if (!$stmt) {
    die("Erro no prepare2: " . $conecta_db->error);
}
$stmt->bind_param("i", $posto_id);
$stmt->execute();
$fotos = $stmt->get_result();
/*
// Avaliações
$stmt = $conecta_db->prepare("SELECT a.nota, a.comentario, u.nome, a.data 
                              FROM avaliacoes a 
                              JOIN usuarios u ON a.usuario_id = u.id_usuario 
                              WHERE a.id_posto = ?");
if (!$stmt) {
    die("Erro no prepare3: " . $conecta_db->error);
}
$stmt->bind_param("i", $posto_id);
$stmt->execute();
$avaliacoes = $stmt->get_result();

// Comentários
$stmt = $conecta_db->prepare("SELECT c.texto, c.data, u.nome 
                              FROM comentarios c 
                              JOIN usuarios u ON c.usuario_id = u.id_usuario 
                              WHERE c.id_posto = ?");
if (!$stmt) {
    die("Erro no prepare4: " . $conecta_db->error);
}
$stmt->bind_param("i", $posto_id);
$stmt->execute();
$comentarios = $stmt->get_result();
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Posto</title>
        <link rel="icon" href="images/iconlogo.png">
    <link rel="stylesheet" href="style.css">
    <script src="pernoite.js"></script>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: #f97316;
}
</style>

</head>
<body>
 <div class="container-fluid">
<div class="row">
      <div class="col-md-4">
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <nav class="sidebar" id="sidebar">
        <ul>
            <li><button><a href="maps.php">Mapa <img class="icone" src="images/map (1)l.png"></a></button></li>
            <li><button><a href="add_posto.php">Adicionar Posto&nbsp;<img class="icone" src="images/gas-stationl.png"></a></button></li>
            
            
        </ul>
    </nav>

      </div>

<div class="col-md-4">
<h1><?php echo $posto['nome_posto']; ?></h1>
 
<p><strong>CEP:</strong> <?php echo $posto['endereco']; ?></p>
<p><strong>Horário:</strong> 
    <?php echo date("H:i", strtotime($posto['hora_abre'])); ?> - 
    <?php echo date("H:i", strtotime($posto['hora_fecha'])); ?>
</p>
<p><strong>Observações:</strong> <?php echo $posto['obs']; ?></p>

<!-- Galeria de Fotos -->
<h2>Galeria de Fotos</h2>
<div id="carouselPosto" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php 
    $active = true;
    while($f = $fotos->fetch_assoc()) { ?>
      <div class="carousel-item <?php if($active){echo 'active'; $active=false;} ?>">
        <img src="<?php echo $f['caminho']; ?>" class="d-block w-100" style="max-height:500px; object-fit:cover;">
      </div>
    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselPosto" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselPosto" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

<div class="col-md-4"></div>
    
</body>
</html>