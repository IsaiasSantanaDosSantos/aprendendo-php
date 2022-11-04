<?php

include 'home.php';

$num1 = 15;

$num2 = 7;

echo "<h2>BCPOW </h2>". bcpow($num1, $num2);

echo "<h2>BCSCALE </h2>". bcscale(6) . bcpow($num1, $num2);

echo "<h2>ABS </h2>". abs($num1) . " " . abs(-$num1);

echo "<h2>BASE_CONVERT </h2>";

echo "<br>Base 10 para Base 2<br> 10 = " . base_convert(10, 10, 2);

echo "<br>Base 10 para Base 8<br> 45 = " . base_convert(45, 10, 8);

echo "<br>Base 10 para Base 16<br> 395 = " . base_convert(395, 10, 16);

echo "<br>Base 16 para Base 2<br> FF = " . base_convert("FF", 16, 2);

echo "<br>Base 16 para Base 8<br> FF = " . base_convert("FF", 16, 8);

echo "<br>Base 16 para Base 10<br> FF = " . base_convert("FF", 16, 10);

echo "<h2>CEIL </h2>". ceil($num1);

echo "<h2>EXP </h2>". exp(4);

echo "<h2>FLOOR </h2>". floor($num1);

echo "<h2>GETRANDMAX </h2>". getrandmax();

echo "<h2>LOG </h2>". log($num1);

echo "<h2>LOG10 </h2>". log10($num1);

echo "<h2>MAX </h2>". max($num1, $num2);

echo "<h2>MIN </h2>". min($num1, $num2);

echo "<h2>MT_RAND </h2>". mt_rand(1, 100);

echo "<h2>MT_SRAND </h2>". mt_rand(1, 100) . mt_srand($num1) . " " . mt_rand(1, 100);

echo "<h2>MT_GETRANDMAX </h2>". mt_getrandmax();

echo "<h2>PI </h2>". pi();

echo "<h2>POW </h2>". pow($num1, $num2);

echo "<h2>ROUND </h2>". round($num1);

echo "<h2>SQRT </h2>". sqrt(169);

echo "<h2>MIN </h2>". min($num1, $num2);
?>