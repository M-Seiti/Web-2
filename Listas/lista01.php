<?php
echo "<h2>1. Olá, mundo!</h2>";
echo "Olá, mundo!";

echo "<h2>2. Comentários</h2>";
// comentário de linha
/*
   comentário de bloco
*/
$nome = "Maria";
echo $nome;

echo "<h2>3. Idade</h2>";
$idade = 20;
echo "Idade: $idade";

echo "<h2>4. Cidade</h2>";
$cidade = "Recife";
echo "Cidade original: $cidade<br>";
$cidade = "Fortaleza";
echo "Cidade atual: $cidade";

echo "<h2>5. Curso</h2>";
$curso = "PHP Básico";
echo "Você está matriculado no curso: $curso";

echo "<h2>6. Números</h2>";
$numero1 = 10;
$numero2 = 20;
echo "$numero1 $numero2";

echo "<h2>7. Nome completo</h2>";
$primeiroNome = "João";
$ultimoNome = "Silva";
echo "Nome completo: $primeiroNome $ultimoNome";

echo "<h2>8. Soma</h2>";
$a = 5;
$b = 3;
$soma = $a + $b;
echo "Soma: $soma";

echo "<h2>9. Produto e quantidade</h2>";
$produto = "Caneta";
$quantidade = 10;
echo "Produto: $produto - Quantidade: $quantidade";

echo "<h2>10. Preço</h2>";
$preco = 15.99;
echo "Preço: R$ $preco";

echo "<h2>11. Média</h2>";
$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 9.2;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Média: " . number_format($media, 2);

echo "<h2>12. Idade a partir do ano</h2>";
$anoNascimento = 2000;
$anoAtual = 2025;
$idade = $anoAtual - $anoNascimento;
echo "Idade: $idade anos";

echo "<h2>13. Frase em maiúsculas</h2>";
$frase = "Aprender PHP é muito legal!";
echo strtoupper($frase);

echo "<h2>14. Perímetro do retângulo</h2>";
$base = 10;
$altura = 5;
$perimetro = 2 * ($base + $altura);
echo "Perímetro: $perimetro";

echo "<h2>15. Volume do cilindro</h2>";
$raio = 3.5;
$altura = 10;
$pi = 3.1416;
$volume = $pi * pow($raio, 2) * $altura;
echo "Volume: " . number_format($volume, 2);
?>
