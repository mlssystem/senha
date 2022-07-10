<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decodificando Texto</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="imagem do icone">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
      h2 {
        color: blue;
      }
  </style>
</head>
<body>
  <div class="decodificar">
      <h2 class='text-php' class="h2-php">Texto Codificado</h2>
      <?php
          //$texto = 'Este é o texto a ser codificado';
          $texto = isset($_POST["texto"])?$_POST["texto"]:0;
          $texto_cript = NULL;

          if ($texto !=0) {
            $texto_cript = base64_encode($texto);
          }
          
          $senhaDescriptografado = base64_decode($texto_cript);

          echo "<p class='text-cript'>O valor do texto codificado é:<br> $texto_cript</p>";
          echo "<p>O seu valor original é:<br> $senhaDescriptografado</p>";
        ?>

      <p class="p-botao"><a class="botao" href="codificar.html">Voltar</a></p>
  </div>
</body>
</html>
 