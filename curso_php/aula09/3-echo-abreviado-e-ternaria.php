<?php

/**
 * Podemos usar o echo abreviado junto com a operação ternária
 */

$n1 = 10;
$n2 = 20;
?>
<!--Vai imprimir Falso-->
<?= ($n1 == $n2) ? "Verdadeiro" : "Falso" ?>

<?php
$n2 = 10;
?>
<!--Vai imprimir Verdadeiro-->
<?= ($n1 == $n2) ? "Verdadeiro" : "Falso" ?>

