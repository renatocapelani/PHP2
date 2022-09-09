<?php
echo "<p>01 - Faça uma função que receba como parametro um número de quantidade de itens e retorne retorne um array.<br>";
    function RetornoArray($n){
        for($i = 0; $i <= $n; $i++){
            //rand vai o rand//
            $retorno[$i] = rand(0,30);
        }
        return $retorno;
    }

    $meuArray = RetornoArray(10);
    echo "<pre>";
    print_r($meuArray);
    echo "<pre>";


echo "<hr>";




echo "<p>02 - Chame a função do exercicio 1 e some todos os itens do array.<br>";
    $pares = 0;
    $impares = 0;
    $negativos = 0;
    $positivo = 0;
    $soma = 0;
    for ($i = 0;$i < count($meuArray);$i++){
        $soma += $meuArray[$i];

        if($meuArray[$i] % 2 == 0){ 
            $pares++; 
            } else {
            $impares++;
        }

        if($meuArray[$i] < 0 ){ 
            $negativos++; 
            } else {$positivo++;
        }
    }

    echo "A Soma do array é: ". $soma . "<br>";

echo "<hr>";




echo "<p>03 - Utilizando o For imprima a tabuada do 135<br>";
    for ($i = 0; $i <= 11; $i++){
        $total = $i * 135;
        echo "<p>". $i . " X 135 = " . $total; 

        }
echo "<hr>";




echo "<p>04 - Faça uma função que some todos os pares de 250 a 365 e exiba na tela.<br>";

    function somarpares($inicio, $fim){
        $pares=0;
        for ($i=$inicio;$i<=$fim;$i++){
            if($i % 2 == 0 ){
                $pares=$pares+$i;
            }
        }
        return $pares;
    }
    echo "<br>Pares: ".somarpares(250,365);

echo "<hr>";




echo "<p>05 - Faça uma função que calcule a porcentagem de um numero.<br>";

    function porcentagem($numero, $porcentagem){
        return ($numero/100)*$porcentagem;
    }

    echo "<br>Porcentagem: ".porcentagem(200,50);

echo "<hr>";




echo "<p>06 - Faça um array que gere 10 números aleatórios e verifique quantos são pares, quantos são impares, quantos são positivos e quantos são negativos.<br>";

echo "<br>Pares:".$pares.
     "<br>Impares:".$impares. 
     "<br>Negativos:".$negativos. 
     "<br>Positivos:".$positivo;

echo "<hr>";




echo "<p>07 - Calcule a média do array do exercício 1.<br>";

    echo "A média do meus Array é: " . $soma/count($meuArray);

?>