<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash - Confirmação</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="imagem do icone">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
      h2 {
        color: blue;
      }
  </style>
</head>
<body>
  <div>
      <h2 class='text-php' class="h2-php">Senha criptografada</h2>
      <?php

        $hash = isset($_POST["hash"])?$_POST["hash"]:0;
        $senha = isset($_POST["senha"])?$_POST["senha"]:0;

        echo "<p class='text-php'>Verificando compatibilidade da senha criptografada</p>";

        if (password_verify($senha, $hash)) {
          echo "<p class='p-valido-php'>A senha <b>$senha</b> é válida para o hash:<br> $hash</p>";
        } else {
            echo "<p class='p-invalido-php'>A senha <b>$senha</b> é inválida para o hash:<br> $hash</p>";
        }
        
      ?>
      <p class="p-botao"><a class="botao" href="senha.html">Voltar</a></p>
  </div>
</body>
</html>
 