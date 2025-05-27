<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolétin do aluno</title>
</head>
<body>
    <h1>Seu boletin</h1>
    <?php
        $nome = "João";
        $nota = "8";


        if ($nota >= 1 && $nota < 4) {
            $situacao = " PÉSSIMA";
            $mensagem = "Sua nota é" . $situacao;
        }
        else if ($nota >= 4 && $nota < 6) {
            $situacao = " RUIM";
            $mensagem = "Sua nota é" . $situacao;
        }
        else if ($nota >= 6 && $nota < 8) {
            $situacao = " BOA";
            $mensagem = "Sua nota é" . $situacao;
        }
        else if ($nota >= 8 && $nota == 10) {
            $situacao = " EXCELENTE";
            $mensagem = "Sua nota é" . $situacao;
        }
        else {
            echo "Sua nota é invalida";
        }

        echo "Sua nota é $nota" . " e sua situação é $situacao";
        ?>
</body>
</html>