<?php
session_start();
$_SESSION['email'] = "";
$_SESSION['senha'] = "";

$pdo = new PDO('mysql:host=localhost;dbname=id16168272_compartilha_producao', 'id16168272_security', '0@9#7y$_Z%iJIdbi');

if (isset($_POST['acao'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM login
                                WHERE email = ? AND senha = ?");

    if ($sql->execute(array($email, $senha))) {
        if ($sql->rowCount() > 0) {
            $info = $sql->fetchall(PDO::FETCH_ASSOC);
            foreach ($info as $key => $values) {
                $_SESSION['email'] = $values['email'];
                $_SESSION['senha'] = $values['senha'];
            }
            echo 'Usuario Cadastrado';
            echo '<script>location.href="index.php";</script>';

        } else {
            echo 'Usuario Não Cadastrado';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
  <link rel="stylesheet" type="text/CSS" href="estilos.CSS">
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">
  <style>

    body {
      background-image: url(imagens/fundo_cadastro1.png);
      background-repeat: no-repeat;
      background-size: 100%;
    }
 
    #cadastro {
      width: 20%;
      height: 3200pt;
      color: rgb(255, 255, 255);
      
      padding: 10px;
      border: 50px;
      border-radius: 70px;
    }
 
    #check {
      color: rgb(255, 255, 255);
    }
    #centro{
      padding-left: 70px; 
    }
  </style>
</head>
 
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-none">
    <a class="navbar-brand" href="#">
      <h2> GOinfo</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <div id="cadastro" class="mx-auto">
      <div class="container mx-auto pt-10 px-10">
        <div class="text-lg text-center font-bold mb-4">
        <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputName">
                <h4>Email</h4>
              </label>
              <input type="email" name="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
            </div>
                <h4>Senha</h4>
              </label>
                  <input type="password" name="senha" class="form-control" id="exampleInputPassword" aria-describedby="senhaHelp" name="senha" required>
              </label>
            </div>
            <div id="centro">
                 <a href="index.php"><button  type="submit" name="acao" value="Entrar" class="btn btn-white btn-lg">Entrar</button></a>
                 <button  type="reset" class="btn btn-white btn-lg" color =>Cancelar</button>
            </div> 
            <center>
            <a href="cadastroUsuario.php" class="link-light">Não tem cadastro? Fazer Aqui</a>
            </center>
          </form>
        </div>
      </div>
    </div>
    <br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
 
</html>