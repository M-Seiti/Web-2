<?php
// 1
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['senha'])) {
    $senha = $_POST['senha'];
    $forca = 'Muito Fraca';
    $tamanho = strlen($senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temLetra = preg_match('/[a-zA-Z]/', $senha);
    $temEspecial = preg_match('/[\W]/', $senha);

    if ($tamanho >= 8 && $temNumero && $temLetra && $temEspecial) {
        $forca = 'Muito Forte';
    } elseif ($tamanho >= 8 && $temNumero && $temLetra) {
        $forca = 'Forte';
    } elseif ($tamanho >= 6 && ($temNumero || $temLetra)) {
        $forca = 'Média';
    } elseif ($tamanho >= 4) {
        $forca = 'Fraca';
    }
    echo "Força da senha: $forca<br><br>";
}
?>

<form method="POST">
    <input type="password" name="senha" placeholder="Digite a senha" required>
    <input type="submit" value="Verificar Força">
</form>

<?php
// 2
$string = "usuario123";
echo "MD5 de '$string': " . md5($string) . "<br><br>";

// 3
echo "SHA-256 de '$string': " . hash('sha256', $string) . "<br><br>";

// 4
$md5 = md5($string);
$sha256 = hash('sha256', $string);
echo $md5 === $sha256 ? "Hashes iguais<br><br>" : "Hashes diferentes<br><br>";

// 5
$str1 = "senhaUm";
$str2 = "senhaDois";
$hash1 = hash('sha512', $str1);
$hash2 = hash('sha512', $str2);
echo $hash1 === $hash2 ? "Hashes iguais<br><br>" : "Hashes diferentes<br><br>";

// 6
$algoritmos = hash_algos();
for ($i = 0; $i < 5; $i++) {
    echo "Algoritmo $i: {$algoritmos[$i]}<br>";
}
echo "<br>";

// 7
$senhaOriginal = "segredo123";
$salt = bin2hex(random_bytes(5));
$comSalt = $senhaOriginal . $salt;
$hashFinal = hash('sha256', $comSalt);
echo "Hash com salt: $hashFinal<br><br>";

// 8
$senha = 'minhaSenhaSegura';
$hashSenha = password_hash($senha, PASSWORD_DEFAULT);
$senhaFornecida = 'minhaSenhaSegura';
if (password_verify($senhaFornecida, $hashSenha)) {
    echo "Senha verificada com sucesso!<br><br>";
} else {
    echo "Senha incorreta.<br><br>";
}

// 9
$senha = 'senha123';
$hash1 = password_hash($senha, PASSWORD_DEFAULT);
$hash2 = password_hash($senha, PASSWORD_DEFAULT);
echo "Hash 1: $hash1<br>";
echo "Hash 2: $hash2<br>";
?>
