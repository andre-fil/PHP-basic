<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo.css">
    <title>Iniciando PHP</title>
    
</head>
<body>
    <head>
        <h1>php - curso</h1>
        <div>
            <?php
            $nome = 'André';
            $idade = 20;
            $a = 3;
            $b = 5;
            echo $nome. " tem ". $idade, " anos  <br>";
            echo "$nome tem $idade anos <br>";
            echo "${a}*${b} = ". $a*$b. "<br>";
            $x = 'abc';
            $$x = 'def';
            echo "Var x = ${x} <br>";
            echo "Var abc =  ".$$x;

             ?>
        </div>
    </head>
</body>
</html>