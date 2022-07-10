<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // See the password_hash() example to see where this came from.
    
    $hash = '$2y$10$u7khMKf/eLYHrSxlT2Fu8.fObBGtyQ1XgzMcSEeMx8vAtwK8welca';
    
    if (password_verify('123', $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
    ?>

    <form method="POST" action="">
        <label for="lsenha">
            <input type="password" name="senha" id="lsenha">
        </label>
    </form>
    
</body>
</html>

