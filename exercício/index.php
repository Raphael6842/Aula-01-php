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
        
        $nota1 = 7.2;
        $nota2 = 6;
        $nota3 = 4.5;
        $nota4 = 8;
        
        
        if ($nota1 >= 1 && $nota1 < 4) {
            $situacao = " PÉSSIMO";
            echo " 1° Bimestre: Nota $nota1 - $situacao ";
        }
        else if ($nota1 >= 4 && $nota1 < 6) {
            $situacao = " RUIM";
            echo " 1° Bimestre: Nota $nota1 - $situacao ";
        }
        else if ($nota1 >= 6 && $nota1 < 8) {
            $situacao = " BOA";
            echo " 1° Bimestre: Nota $nota1 - $situacao ";
        }
        else if ($nota1 >= 8 && $nota1 <= 10) {
            $situacao = " EXCELENTE";
            echo " 1° Bimestre: Nota $nota1 - $situacao ";
        }
        else {
            echo "Nota inválida";
        }
        
        echo "<br>";
        echo "<br>";
        
        if ($nota2 >= 1 && $nota2 < 4) {
            $situacao = " PÉSSIMO";
            echo " 2° Bimestre: Nota $nota2 - $situacao ";
        }
        else if ($nota2 >= 4 && $nota2 < 6) {
            $situacao = " RUIM";
            echo " 2° Bimestre: Nota $nota2 - $situacao ";
        }
        else if ($nota2 >= 6 && $nota2 < 8) {
            $situacao = " BOA";
            echo " 2° Bimestre: Nota $nota2 - $situacao ";
        }
        else if ($nota2 >= 8 && $nota2 <= 10) {
            $situacao = " EXCELENTE";
            echo " 2° Bimestre: Nota $nota2 - $situacao ";
        }
        else {
            echo "Nota inválida";
        }
        
        echo "<br>";
        echo "<br>";
        
        if ($nota3 >= 1 && $nota3 < 4) {
            $situacao = " PÉSSIMO";
            echo " 3° Bimestre: Nota $nota3 - $situacao ";
        }
        else if ($nota3 >= 4 && $nota3 < 6) {
            $situacao = " RUIM";
            echo " 3° Bimestre: Nota $nota3 - $situacao ";
        }
        else if ($nota3 >= 6 && $nota3 < 8) {
            $situacao = " BOA";
            echo " 3° Bimestre: Nota $nota3 - $situacao ";
        }
        else if ($nota3 >= 8 && $nota3 <= 10) {
            $situacao = " EXCELENTE";
            echo " 3° Bimestre: Nota $nota3 - $situacao ";
        }
        else {
            echo "Nota inválida";
        }
        
        echo "<br>";
        echo "<br>";
        
        if ($nota4 >= 1 && $nota4 < 4) {
            $situacao = " PÉSSIMO";
            echo " 4° Bimestre: Nota $nota4 - $situacao ";
        }
        else if ($nota4 >= 4 && $nota4 < 6) {
            $situacao = " RUIM";
            echo " 4° Bimestre: Nota $nota4 - $situacao ";
        }
        else if ($nota4 >= 6 && $nota4 < 8) {
            $situacao = " BOA";
            echo " 4° Bimestre: Nota $nota4 - $situacao ";
        }
        else if ($nota4 >= 8 && $nota4 <= 10) {
            $situacao = " EXCELENTE";
            echo " 4° Bimestre: Nota $nota4 - $situacao ";
        }
        else {
            echo "Nota inválida";
        }
        
        echo "<br>";
        echo "<br>";

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        echo "Média: $media";
        
        echo "<br>";
        
        $porcentagem = ($media / 10) *100;
        echo " Sua porcentagem de aproveitamento foi de: $porcentagem%";
        
        echo "<br>";

        if ($media >= 6) {
            $aprovacao = "APROVADO";
            echo "Parabéns, você foi $aprovacao com a porcentagem de aproveitamento de $porcentagem";
        }
        else {
            $aprovacao = "REPROVADO";
            echo "Infelizmente você foi $aprovacao por não ter atingido a média";
        }
        

    ?>
    </body>
    </html>