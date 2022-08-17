<?php

    echo"Meu Nome é Bruce Wayne";
    echo"<h1>Olá Mundo</h1>";
    echo"<br>";
    echo"Bem Vindo";

    echo"<h4></h4>";
    $n1 = 7.5;
    $n2 = 4;
    $texto = "Minha média é:";
    $media = ($n1 + $n2)/2;
    $resultado = 0;

/*
    $texto = $texto.$media;
    echo $texto;

    if ($media >= 6) {
        echo "Aprovado";
    }
    else if ($media < 6 && $media >=2){
        echo "Tem chance de recuperar";
    }
    else{
        echo "Reprovado";
    }

    $contadora = 0;
    do{
        echo "<br> teste".$contadora;
        $contadora ++;
    }while ($contadora <= 10);

    echo "While:<br>";
    while ($contadora < 150) {
        if ($contadora % 2 == -0) {
            echo $contadora." É número Par <br>";
        }else {
            echo $contadora." É número Impar";
        }
        $contadora ++;
    }
        
    const teste = "oi";
    teste;
*/

    echo"<table border='5'>";
    for ($i = 0; $i < 25 ; $i++) {
        echo"<tr>";
        echo"<td>Nome ". $i ."</td>";
        echo"<td>Idade ". $i . "</td>";
        echo"</tr>";
    }
    echo"</table>"

?>  