    <?php
    //Comentários em PHP - Linha
    /*
git --version

git config --global user.name "renatocapelani"
git config --global user.email "renato.capelani@hotmail.com"

git commit -m "Primeiro Commit"

git init

git add array.php

git commit -m "Primeiro Commit"

echo "# PHP" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/renatocapelani/PHP.git
git push -u origin main


    */
    //echo "Hello World - Meu nome é Renato Capelani";
    $idade = 36;
    $nome =  "Renato Capelani";
    $Altura = 1.82;
    //$solteiro = false;
    //echo $solteiro;
    //echo 10<12;
    CONST IDADE = 10;
    if(10>12){
        echo "Mentira";
    }
    else{
        echo "10 não é maior que 12";
    }

    $nota1 = 6;

    if ($nota1 >= 6){
        echo "Aprovado";
    }
    else if ($nota1 < 6 && $nota1 >=2){
        echo "Ainda tem chance";
    }

//Faça um if que calule a média e escreva na tela
//se foi aprovado ou não

        $notaA = 6;
        $notaB = 7;
        $media = ($notaA+$notaB)/2;

        //Operadores
        // /= XX $media mediá do mesmo valor dividido por qualquer outro valor
        // += XX $media mediá do mesmo valor somado por qualquer outro valor
        // -= XX $media mediá do mesmo valor subtraido por qualquer outro valor
        // *= XX $media mediá do mesmo valor multiplica por qualquer outro valor
        // == Atribuição
        // <= Menor Igual
        // >= Maior Igual
        // != Diferente
        // !== Diferente tipos iguais
        // === Igual tipos iguais
        // || OU ou OR
        // && E ou AND
        // % Resto
        // . Concatenar (PHP)
        // + Concatenar (Demais Linguagens)


        if ($media => 6){
            echo "Média Aprovado";
        }else{
            echo "Média Reprovado";
        }


        //Extrutura de repetição
        //Exemplo de Concatenação em PHP
        $nome = Teste;
        echo "<br> <br> Renato" . $nome . "Capelani" . "<br>"; 

        //Loop PHP While - Do While
        $contadoraA= 0;
        do{
            $contadoraA++;
        }while($contadoraA <10);



        $contadoraB=0;
        while($contadoraB < 10){
            $contadoraB++;
        }

        // Loop PHP For - Descubrir se o número é par
        $contador = 0 ;
        for ($i = 0; $i < 10; $i++){
            if($i % 2 == 0 ){
                echo "<p> " . $i . " é par <p>";
            }else{
                echo "<p> " . $i . " não é par <p>";
            }
        }
    ?>