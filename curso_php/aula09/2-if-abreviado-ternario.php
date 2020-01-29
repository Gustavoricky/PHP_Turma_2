<?php

/*
 * Como usar o if abreviado (operação ternária)
 */
?>

<?php // Vai imprimir "Verdadeiro" ?>
<?php echo (true) ? "Verdadeiro" : "Falso"; ?>

<?php // Vai imprimir Falso ?>
<?php echo (false) ? "Verdadeiro" : "Falso"; ?>

<?php

$n1 = 10;
$n2 = 20;
// Vai imprimir Falso, pois a condição ($n1 == $n2) é false
echo ($n1 == $n2) ? "Verdadeiro" : "Falso";

$n2 = 10;
// Vai imprimir Verdadeiro, pois agora a condição ($n1 == $n2) é true
echo ($n1 == $n2) ? "Verdadeiro" : "Falso";

?>

<?php

/**
 * A operação ternária possui 3 partes: 
 * 
 *  1. antes do "?"
 *  2. depois do "?" e antes do ":"
 *  3. depois do ":"
 *  ----
 *  1. antes do "?" fica a condição. Exemplo ($value == 10)
 *  2. depois do "?" e antes do ":" fica o código caso a condição
 *      seja verdadeira
 *  3. depois do ":" fica o código caso a condição seja falsa
 */
?>


