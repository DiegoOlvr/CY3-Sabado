<?php
$operacao =  $_POST["operacao"];
$n1 =  (int)$_POST["n1"];
$n2 =  (int)$_POST["n2"];

if ($operacao == "adicao") {
    $resultado = $n1 + $n2;
    echo $resultado;
} elseif ($operacao == "subtracao") {
    $resultado = $n1 - $n2;
    echo $resultado;
} elseif ($operacao == "multiplicacao") {
    $resultado = $n1 * $n2;
    echo $resultado;
} elseif ($operacao == "divisao") {
    $resultado = $n1 / $n2;
    echo $resultado;
}
