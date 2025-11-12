<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: blue;
        }
body{
background-color: green;
        }
    </style>
</head>
<body>
   <h1> FORMULÁRIO SENAI</h1> 
   <br>
<?php
$nomeFilme = "Titanic";
$anoLançamento = 1998;
$precoAluguel = 12.99;
$foiAssistido = true;
if($precoAluguel > 15)
{
    echo "O preço do alguel está muito alto.";
}
else
{
    echo "O preço do alguel está ótimo.";
}
?>
</body>
</html>