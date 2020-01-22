<?php

// Se (verdadeiro) -> executar bloco de código dentro das {}
if (true) {
    echo "Código a ser executado!";
    echo "Essa linha também faz parte do bloco de código";
    echo "Tudo que tiver dentro das chaves do if faz parte do bloco de código";
}


// Se (falso) -> NÃO executa o bloco de código
if (false) {
    echo "Código não será executado";
    echo "Todo o bloco de código será ignorado";
}

// Se (true) else -> apenas o primeiro bloco de código será executado
if (true) {
    echo "Esse bloco de código será executado";
} else {
    echo "Esse bloco de código NÃO será executado.";
}

// Se (false) else -> apenas o SEGUNDO bloco de código será executado
if (false) {
    echo "Esse bloco de código NÃO será executado";
} else {
    echo "Esse bloco de código será executado!";
}

// Se (true) senão-se -> cadeia de if's (if's encadeados)
//  Apenas o bloco de código do primeiro if que for verdadeiro será executado.
//  Todos os outros, mesmo se forem verdadeiro, NÃO serão executados
if (true) {
    echo "Apenas esse bloco será executado";
} else if (true) {
    echo "Apesar de esse if ser true, esse bloco NÃO será executado";
} else if (true) {
    echo "Esse aqui também  NÃO será executado";
}

// Se (falso) senão-se (true)
//  Apenas o primeiro bloco que tiver um valor verdadeiro será executado.

if (false) {
    echo "não será executado";
} else if (false) {
    echo "não será executado";
} else if (true) {
    echo "Esse sim será executado";
}

// Podemos colocar variáveis nos if's, ao invés de colocar diretamente
//  os valores true/false
$compare = true;
if ($compare) {
    echo "Esse bloco será executado, pois o valor da variável \$compare é true";
} else {
    echo "Esse bloco NÃO será executado";
}

$compare = false;
if($compare) {
    echo "Esse bloco NÃO será executado, pois o valor da variável \$compare é false";
} else {
    echo "Portanto, o bloco else será executado";
}

// Podemos realizar comparações com variáveis também
$value = 10;
if ($value > 5) {
    echo "Esse bloco será executado, pois o valor da variável \$value é maior que 5";
} else {
    echo "Portanto, esse bloco do else NÃO será executado";
}

$name = "PHP";
if ($name == "Java") {
    echo 'Esse bloco NÃO será executado, pois o valor de $name é "PHP", que é diferente de "Java"';
} else if ($name == "PHP") {
    echo 'Esse bloco será executado, já que o valor de $name é igual a PHP';
} else if ($name == "Python") {
    echo 'Esse if nem chega a ser executado, pois o if anterior foi verdadeiro.';
    echo 'Como esse bloco é um else-if, o PHP não o executa pelo fato do if anterior já ter dado verdadeiro';
}