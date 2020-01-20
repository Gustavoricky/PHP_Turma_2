<?php
// A variável $email é uma string
$email = "igor@igor.com";

// A variável $age é um int
$age = 25;

// A variável $height é um float
$height = 1.73;

// A variável $male é um boolean
$male = true;

// Comparação
// maior que
$allowed = $age > 18;
// menor que
$minorAge = $age < 18;
// maior igual
$majorAge = $age >= 18;
// menor igual
$minorAge = $age <= 17;

// igualdade
$compare = (15 == 10);
// idêntico
$compare = 15 === '15';
// comparar strings
$validPassword = "12345" === "12345";

// and -> &&
$allowedAndCompare = $allowed && $compare;
// or -> || (pipe)
$allowedOrCompare = $allowed || $compare;

// Resultado 1 = 14
$result1 = 5 + 7 * 2 / 2 + 3 - 1;
// Resultado 2 = 6
$result2 = (5 + 7) * 2 / (2 + 3 - 1);

// Array Numérico
$results = array();
$results[] = $email;
$results[] = $age;
$results[] = $height;
$results[] = $male;
$results[] = $allowed;
$results[] = $compare;
$results[] = $result1;
$results[] = $result2;

echo "<pre>";
var_dump($results);
echo "</pre>";

// Array Associativo
$resultsAssoc = array();
$resultsAssoc["email"] = $email;
$resultsAssoc["idade"] = $age;
$resultsAssoc["altura"] = $height;
$resultsAssoc["masculino"] = $male;
$resultsAssoc["permitido"] = $allowed;
$resultsAssoc["comparacao"] = $compare;
$resultsAssoc["permitidoAndComparacao"] = $allowedAndCompare;
$resultsAssoc["permitidoOrComparacao"] = $allowedOrCompare;
$resultsAssoc["resultado1"] = $result1;
$resultsAssoc["resultado2"] = $result2;
echo "<pre>";
var_dump($resultsAssoc);
echo "</pre>";
?>

<html>
    <head>

    </head>
    <body>

    </body>
</html>

