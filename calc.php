<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado IMC</title>
</head>
<body>
    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        if(!is_numeric($peso) || $peso <= 0){
            echo "<h2>O campo peso deve ser valido!</h2>";
            echo "<a href=\"Javascript:window.history.back();\">
            <input type=\"button\"value=\"Voltar\"></a>";
            exit;
        }
        if(!is_numeric($altura) || $altura <= 0){
            echo "<h2>O campo altura deve ser valido!</h2>";
            echo "<a href=\"Javascript:window.history.back();\">
            <input type=\"button\"value=\"Voltar\"></a>";
            exit;
        }
        $imc = $peso / ($altura * $altura);
        $result = number_format($imc, 2);
        echo "Seu resultado: <br>";
        if($imc < 18){
            echo "<br><img src=magro.png width='150' height='150'><br>";
            echo "Seu IMC esta baixo <br>";
            echo "IMC: $result";
            echo "<br><a href=\"Javascript:window.history.back();\">
            <input type=\"button\"value=\"Calcular novamente\"></a>";
        }else if (($imc > 18) && ($imc <= 25)){
            echo "<br><img src=normal.png width='150' height='150'><br>";
            echo "Seu IMC esta normal <br>";
            echo "IMC: $result";
            echo "<br><a href=\"Javascript:window.history.back();\">
            <input type=\"button\"value=\"Calcular novamente\"></a>";
        }else if(($imc > 25) && ($imc <=30)){
            echo "<br><img src=gordo.png width='150' height='150'><br>";
            echo "Obesidade <br>";
            echo "IMC: $result";
            echo "<br><a href=\"Javascript:window.history.back();\">
            <input type=\"button\"value=\"Calcular novamente\"></a>";
        }else if(($imc > 30) && ($imc <=35)){
            echo "<br><img src=gordo2.png width='150' height='150'><br>";
            echo "Obesidade PRA CACETE <br>";
            echo "IMC: $result";
            echo "<br><a href=\"Javascript:window.history.back();\">
            <input type=\"button\"value=\"Calcular novamente\"></a>";
        }
    ?>
</body>
</html>