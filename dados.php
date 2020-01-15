<?php
    $email = $_GET["email"];     
    $password = $_GET["password"];
    $name = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $idade = $_GET["idade"];
    $namecompleto = "$name $sobrenome";
    
    
    $int_value = 10
?>

<html>
    <head>
        <title>Dados</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <p>Usuário Logado: <?php echo $email ?> </p>
        <h1>Recendo dados</h1>
        <p>
            Nome: <?php echo $name; ?>
        </p>
        <p>
            Sobrenome: <?php echo $sobrenome; ?>
        </p>
        <p>
            Nome Completo: <?php echo $namecompleto; ?>
        </p>
        <p>
            Idade: <?php echo $idade; ?>
        </p>
        <p>
            E-mail: <?php echo $email; ?>
        </p>
        <p>
            Senha: <?php echo $password; ?>
        </p>
        <hr>
        <?php
            $email = "hacked@hacked.com";     
    ?>
        <p>
            E-mail: <?php echo $email; ?>
        </p>
        
    </body>
    
</html>