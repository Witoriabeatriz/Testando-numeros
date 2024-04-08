<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par, Ímpar, Redondo e Positivo/Negativo/Neutro</title>
</head>
<body>
    <h1>Verificação de número </h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
    
    <?php
      if (isset($_POST["numero"])) {
        $num = $_POST["numero"];
        if ($num % 10 == 0) {
                echo "O número informado é REDONDO (inteiro).<br>";
            } else {
                echo "O número informado não é REDONDO (não é inteiro).<br>";
            }
        }
    ?>
</body>
</html>
