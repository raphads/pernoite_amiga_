<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit">
    <title>Pernoite Amiga</title>
    <link rel="icon" href="images/iconlogo.png">
    <link rel="stylesheet" href="style.css">
    <script src="pernoite.js"></script>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <nav class="sidebar" id="sidebar">
        <ul>
           <li><button><a href="maps.php">Mapa <img class="icone" src="images/map (1)l.png"></a></button></li>
            <li><button><a href="add_posto.php">Adicionar Posto&nbsp;<img class="icone" src="images/gas-stationl.png"></a></button></li>
            
        </ul>
    </nav>
        <br><br><br><br><br><br>
        <form id="logingform" method="post" action="cadastrar_conta.php">
            <label>Usuário</label><br>
            <input type="text" placeholder="Digite seu Usuário" required name="nome"><br><br>
            <label>Email</label><br>
            <input type="email" placeholder="Digite seu Email" required name="email"><br><br>
            <label>Senha</label><br>
            <input type="password" placeholder="***" required id="senha1"><br><br>
            <label>Confirmar Senha</label><br>
            <input type="password" placeholder="***" required id="senha2" onchange="Confirmar()" name="senha"><br><br>
             <button type="submit" id="botao" onClick="document.form.action='cadastrar_conta.php'">Cadastrar</button>
        </form>
        </div>

    <div class="col-md-9">

        <img src="images/logohome.jpeg" width="100%" height="100%">

    </div>

  
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>