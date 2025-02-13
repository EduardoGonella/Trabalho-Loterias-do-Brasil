<?php

// Inicio

function inicio() {
    $jogo = 1;
    echo("Bem vindo a lotérica TDS!" . "\n");
    echo("Temos os jogos: Mega-Sena, Quina, Lotomania e Lotofácil" . "\n");
        
    do {
        $jogo = readline("Selecione um jogo: ");
        if ($jogo != "Mega-Sena" and $jogo != "Quina" and $jogo != "Lotomania" and $jogo != "Lotofácil") {
            echo("Jogo inválido, informe-o novamente." . "\n");
        }
    } while ($jogo != "Mega-Sena" and $jogo != "Quina" and $jogo != "Lotomania" and $jogo != "Lotofácil");
    
    if ($jogo == "Mega-Sena") {
        megaSena ();
    } elseif ($jogo == "Quina") {
        Quina();
    } elseif ($jogo == "Lotomania") {
        Lotomania();
    } elseif ($jogo == "Lotofácil") {
        Lotofacil();
    }
}

//Mega-Sena

function megaSena () {

    $surpresinhas = [];
    $dezenas = 0;
    $a = 0;
    $valor = 0;

    //apostas

    $n_apostas  = readline("Informe quantas apostas gostaria de fazer: ");
    
    do {
        
        //dezenas

        do {
            $dezenas = readline("Informe quantas dezenas deseja jogar (6 a 20): ");
            if ($dezenas < 6 or $dezenas > 20) {
                echo("Número inválido, informe-o novamente." . "\n");
            }
        } while ($dezenas < 6 or $dezenas > 20);

        if ($dezenas == 6) {
            $valor += 5.00;
        } elseif ($dezenas == 7) {
            $valor += 35.00;
        } elseif ($dezenas == 8) {
            $valor += 140.00;
        } elseif ($dezenas == 9) {
            $valor += 420.00;
        } elseif ($dezenas == 10) {
            $valor += 1050.00;
        } elseif ($dezenas == 11) {
            $valor += 2310.00;
        } elseif ($dezenas == 12) {
            $valor += 4620.00;
        } elseif ($dezenas == 13) {
            $valor += 8580.00;
        } elseif ($dezenas == 14) {
            $valor += 15015.00;
        } elseif ($dezenas == 15) {
            $valor += 25025.00;
        } elseif ($dezenas == 16) {
            $valor += 40040.00;
        } elseif ($dezenas == 17) {
            $valor += 61880.00;
        } elseif ($dezenas == 18) {
            $valor += 92820.00;
        } elseif ($dezenas == 19) {
            $valor += 135660.00;
        } elseif ($dezenas == 20) {
            $valor += 193800.00;
        }

        //surpresinhas
        
        for ($i=0; $i < $dezenas; $i++) { 
            $surpresinhas [$i] = random_int(1, 60);    
            for ($j=$i; $j >= 0; $j--) { 
                if ($surpresinhas [$i] == $surpresinhas [$j] ) {
                    $surpresinhas [$i] = random_int(1, 60);
                }
            }
        } 

        sort($surpresinhas);
        
        for ($i=0; $i < $dezenas; $i++) { 
            print ($surpresinhas [$i] . "\n");
        } 
        
        $a++;

    } while ($a < $n_apostas);

    print("O valor foi de R\$$valor");
    exit();
}

//Quina

function Quina (){
    
    $surpresinhas = [];
    $dezenas = 0;
    $a = 0;
    $valor = 0;

    //apostas

    $n_apostas  = readline("Informe quantas apostas gostaria de fazer: ");
    
    do {
        
        //dezenas

        do {
            $dezenas = readline("Informe quantas dezenas deseja jogar (5 a 15): ");
            if ($dezenas < 5 or $dezenas > 15) {
                echo("Número inválido, informe-o novamente." . "\n");
            }
        } while ($dezenas < 5 or $dezenas > 15);

        if ($dezenas == 5) {
            $valor += 2.50;
        } elseif ($dezenas == 6) {
            $valor += 15.00;
        } elseif ($dezenas == 7) {
            $valor += 52.50;
        } elseif ($dezenas == 8) {
            $valor += 140.00;
        } elseif ($dezenas == 9) {
            $valor += 315.00;
        } elseif ($dezenas == 10) {
            $valor += 630.00;
        } elseif ($dezenas == 11) {
            $valor += 1155.00;
        } elseif ($dezenas == 12) {
            $valor += 1980.00;
        } elseif ($dezenas == 13) {
            $valor += 3217.50;
        } elseif ($dezenas == 14) {
            $valor += 5005.00;
        } elseif ($dezenas == 15) {
            $valor += 7507.50;
        }

        //surpresinhas
        
        for ($i=0; $i < $dezenas; $i++) { 
            $surpresinhas [$i] = random_int(1, 80);    
            for ($j=$i; $j >= 0; $j--) { 
                if ($surpresinhas [$i] == $surpresinhas [$j] ) {
                    $surpresinhas [$i] = random_int(1, 80);
                }
            }
        } 

        sort($surpresinhas);
        
        for ($i=0; $i < $dezenas; $i++) { 
            print ($surpresinhas [$i] . "\n");
        } 
        
        $a++;

    } while ($a < $n_apostas);

    print("O valor foi de R\$$valor");
    exit();
}

//Lotomania

function Lotomania () { 
    
    $surpresinhas = [];
    $dezenas = 50;
    $a = 0;
    $valor = 3.00;

    //apostas

    $n_apostas  = readline("Informe quantas apostas gostaria de fazer: ");
    
    do {
        
        //surpresinhas
        
        for ($i=0; $i < $dezenas; $i++) { 
            $surpresinhas [$i] = random_int(1, 80);    
            for ($j=$i; $j >= 0; $j--) { 
                if ($surpresinhas [$i] == $surpresinhas [$j] ) {
                    $surpresinhas [$i] = random_int(1, 80);
                }
            }
        } 

        sort($surpresinhas);
        
        for ($i=0; $i < $dezenas; $i++) { 
            print ($surpresinhas [$i] . "\n");
        } 
        
        print("--------------\n");
        $a++;

    } while ($a < $n_apostas); 

    $valor = $valor * $n_apostas;
    print("O valor foi de R\$$valor");
    exit();
}

//Lotofácil

function Lotofacil (){
    
    $surpresinhas = [];
    $dezenas = 0;
    $a = 0;
    $valor = 0;

    //apostas

    $n_apostas  = readline("Informe quantas apostas gostaria de fazer: ");
    
    do {
        
        //dezenas

        do {
            $dezenas = readline("Informe quantas dezenas deseja jogar (15 a 20): ");
            if ($dezenas < 15 or $dezenas > 20) {
                echo("Número inválido, informe-o novamente." . "\n");
            }
        } while ($dezenas < 15 or $dezenas > 20);

        if ($dezenas == 15) {
            $valor += 3.00;
        } elseif ($dezenas == 16) {
            $valor += 48.00;
        } elseif ($dezenas == 17) {
            $valor += 408.00;
        } elseif ($dezenas == 18) {
            $valor += 2448.00;
        } elseif ($dezenas == 19) {
            $valor += 11628.00;
        } elseif ($dezenas == 20) {
            $valor += 46512.00;
        }

        //surpresinhas
        
        for ($i=0; $i < $dezenas; $i++) { 
            $surpresinhas [$i] = random_int(1, 25);    
            for ($j=$i; $j >= 0; $j--) { 
                if ($surpresinhas [$i] == $surpresinhas [$j] ) {
                    $surpresinhas [$i] = random_int(1, 25);
                }
            }
        } 

        sort($surpresinhas);
        
        for ($i=0; $i < $dezenas; $i++) { 
            print ($surpresinhas [$i] . "\n");
        } 
        
        $a++;

    } while ($a < $n_apostas);

    print("O valor foi de R\$$valor");
    exit();
}

//começo lotérica

inicio();



?>