<?php
echo "<h2>1. Array de 1 a 5 com foreach</h2>";
$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $n) {
    echo "$n<br>";
}

echo "<h2>2. Soma dos elementos do array</h2>";
$valores = [10, 20, 30, 40, 50];
$soma = 0;
foreach ($valores as $v) {
    $soma += $v;
}
echo "Soma: $soma";

echo "<h2>3. Maior e menor número</h2>";
$array = [23, 12, 45, 78, 5, 89];
$maior = max($array);
$menor = min($array);
echo "Maior: $maior<br>Menor: $menor";

echo "<h2>4. Quantidade de elementos</h2>";
$nomes = ["Ana", "Carlos", "Bruno", "Diana", "Elisa"];
echo "Quantidade: " . count($nomes);

echo "<h2>5. Números pares de 1 a 10</h2>";
$numeros = range(1, 10);
foreach ($numeros as $n) {
    if ($n % 2 == 0) echo "$n<br>";
}

echo "<h2>6. Cores na ordem inversa</h2>";
$cores = ["vermelho", "azul", "verde", "amarelo"];
$reverso = array_reverse($cores);
foreach ($reverso as $cor) {
    echo "$cor<br>";
}

echo "<h2>7. Array associativo - Pessoa</h2>";
$pessoa = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
];
echo "Nome: {$pessoa['nome']}<br>";
echo "Idade: {$pessoa['idade']} anos<br>";
echo "Cidade: {$pessoa['cidade']}";

echo "<h2>8. Produtos e preços</h2>";
$produtos = [
    "Notebook" => 3500,
    "Mouse" => 80,
    "Teclado" => 120
];
foreach ($produtos as $produto => $preco) {
    echo "Produto: $produto - Preço: R$ $preco<br>";
}

echo "<h2>9. Ordenar array</h2>";
$valores = [5, 3, 8, 1, 4];
sort($valores);
foreach ($valores as $v) {
    echo "$v<br>";
}

echo "<h2>10. Array multidimensional - Alunos</h2>";
$alunos = [
    ["nome" => "Alice", "nota" => 8],
    ["nome" => "Bruno", "nota" => 6],
    ["nome" => "Carlos", "nota" => 9]
];
foreach ($alunos as $aluno) {
    echo "{$aluno['nome']} tirou nota {$aluno['nota']}<br>";
}
?>
