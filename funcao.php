<?php
    function ImprimirQuebra(){
        echo "<br>";
        echo "<hr>";
        echo "<hr>";
    }

    function ImprimirTexto($texto){
        echo  $texto."<br>";
    }
    /*
    echo "Fernando";
        ImprimirQuebra();
    echo "Professor";
    ImprimirQuebra();
    ImprimirQuebra();
    ImprimirQuebra();
    ImprimirQuebra();
    ImprimirQuebra();
    

    $meutexto = "Aqui vai uma string de qualquer tipo de dados"."32";
    ImprimirTexto("Fernando");
    ImprimirQuebra();
    ImprimirTexto($meutexto);
    //ImprimirTexto();
    ImprimirQuebra();
    */
    function adicao($numero1, $numero2){
        return $numero1+$numero2;
     }

    function subtracao($numero1, $numero2){
        return $numero1-$numero2;
    }

    function multiplicacao($numero1, $numero2){
        return $numero1*$numero2;
    }

    function divisao($numero1, $numero2){
        return $numero1/$numero2;
    }

    function media($numero1, $numero2){
        return adicao($numero1, $numero2)/2;
        
    }

    function calculadora ($numero1, $numero2, $opedador){
        if($operador == "+"){
            ImprimirTexto(adicao($numero1, $numero2));
        }
        else if($operador == "-"){
            ImprimirTexto(subtracao($numero1, $numero2));
        }
        else if($operador == "*"){
            ImprimirTexto(multiplicacao($numero1, $numero2));
        }
        else if($operador == "/"){
            ImprimirTexto(divisao($numero1, $numero2));
        }
        else if($operador == "m"){
            ImprimirTexto(media($numero1, $numero2));
        } else {
            ImprimirTexto("Operação Inválida");
        }

    }
    
    //adicao(12,8);
    //subtracao(17,8);
    //multiplicacao(17,8);
    //divisao(12,6);
    //media(12,6);
    $media = media(8,9);
    ImprimirTexto (media(8,9));
    ImprimirTexto (adicao(5432,4567));

    calculadora(12,12,"+");

?>