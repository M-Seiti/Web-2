<?php
echo "<h2>1. Verifica se número é positivo, negativo ou zero</h2>";
$num = -5;
if ($num > 0) echo "$num é positivo";
elseif ($num < 0) echo "$num é negativo";
else echo "$num é zero";

echo "<h2>2. Maior número entre dois</h2>";
$a = 10;
$b = 20;
if ($a > $b) echo "$a é maior";
elseif ($b > $a) echo "$b é maior";
else echo "Os dois números são iguais";

echo "<h2>3. Par ou ímpar</h2>";
$n = 7;
echo "$n é " . ($n % 2 === 0 ? "par" : "ímpar");

echo "<h2>4. Classificação de nota</h2>";
$nota = 6.5;
if ($nota >= 7) echo "Aprovado";
elseif ($nota >= 5) echo "Recuperação";
else echo "Reprovado";

echo "<h2>5. Números de 1 a 10 (for)</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i<br>";
}

echo "<h2>6. Soma de 1 a 100 (while)</h2>";
$soma = 0;
$i = 1;
while ($i <= 100) {
    $soma += $i;
    $i++;
}
echo "Soma: $soma";

echo "<h2>7. Tabuada com do-while</h2>";
$num = 5;
$i = 1;
do {
    echo "$num x $i = " . ($num * $i) . "<br>";
    $i++;
} while ($i <= 10);

echo "<h2>8. Contagem regressiva</h2>";
for ($i = 10; $i >= 1; $i--) {
    echo "$i<br>";
}

echo "<h2>9. Vogal ou consoante (switch)</h2>";
$letra = 'e';
switch (strtolower($letra)) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "$letra é uma vogal";
        break;
    default:
        echo "$letra é uma consoante";
}

echo "<h2>10. Números pares de 1 a 20</h2>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) echo "$i<br>";
}

echo "<h2>11. Fatorial com while</h2>";
$num = 5;
$fatorial = 1;
$i = $num;
while ($i > 1) {
    $fatorial *= $i;
    $i--;
}
echo "Fatorial de $num é $fatorial";

echo "<h2>12. Números primos entre 1 e 50</h2>";
for ($i = 2; $i <= 50; $i++) {
    $primo = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) echo "$i<br>";
}
?>
