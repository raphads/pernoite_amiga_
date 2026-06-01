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
   
        <br><br><br><br><br><br>
        <form id="logingform" method="post"  action="realizar_login.php">
            <label>Email</label><br>
            <input type="email" placeholder="Digite seu Email" name="txt_email" required><br><br>
            <label>Senha</label><br>
            <input type="password" placeholder="***" name="txt_senha" required><br><br>
            <input type="submit" value="Entrar" id="botao">
        </form><br>
        <label>Não tem uma Conta?</label><br>
        <a href="cadastro.php" style="color: #F97316;">Cadastre-se</a>
        </div>

    <div class="col-md-9">

        <img src="images/logohome.jpeg" width="100%" height="100%">

    </div>

  
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>