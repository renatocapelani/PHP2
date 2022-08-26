<?php
/*
    $carros = array();
    $carros = array("BWM", "SAVEIRO", "GOL", "PALIO");
    echo "<br>";
    echo $carros[1];
    echo "<br>";
    echo $carros[0];
    echo "<pre>";
    print_r($carros);
    echo "<pre>";

    $nomes = ["Fernando", "Maria", "João", "Pedro"];

    $nomes[675] = "Julia";
    $nomes[465] = "Matheus";
    $nomes[34] = "Luiz Fernando";

    echo "<pre>";
    print_r($nomes);
    echo "<pre>";


    $salas = array ("Lab01" => 40, "Lab02" => 32);
    $salas["Lab03"] = 30;

    $salas[0] = "24";
    
    echo "<pre>";
    print_r($salas);
    echo "<pre>";

    $salas["Lab03"] = 30;

    echo $salas ["Lab02"]
 
    $tabuada = array(0,1,2,3,4);
    $tabuada[0] = array(0,1,2,3,4);
    $tabuada[1] = array(0,1,2,3,4);
    $tabuada[2] = array(0,1,2,3,4);
    $tabuada[3] = array(0,1,2,3,4);
    $tabuada[4] = array(0,1,2,3,4);
    $tabuada[4] = array();
    $tabuada[4][0] = 0;
    $tabuada[4][1] = 4;
    $tabuada[4][2] = 8;
    $tabuada[4][3] = 12;
    $tabuada[4][4] = 16;

    echo "<pre>";
    print_r($tabuada);
    echo "<pre>";
*/
    //Faça um array armário para guardar: jóias, material eletrônico e ferragem
    $armario = array();
    $armario["Porta1"] = array ("Fio 2mm", "Fio 4mm", "Fio Terra");
    $armario["Porta2"] = array ();
    $armario["Gavetinha"] = array ();

    array_push($armario["Gavetinha"], "Brincos");
    array_push($armario["Gavetinha"], "Aneis");
    array_push($armario["Gavetinha"], "Berloques");
    array_push($armario["Gavetinha"], "Pulseiras");

    $armario["Porta2"][0] = "Porca";
    $armario["Porta2"][1] = "Parafuso";
    $armario["Porta2"][2] = "Arruela";
    

    
    echo "<pre>";
    print_r($armario);
    echo "<pre>";


    
    
    
?>