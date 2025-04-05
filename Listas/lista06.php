<?php
// 1
if (isset($_POST['senha1'])) {
    $senha = $_POST['senha1'];
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
    echo "1. Força da senha: $forca<br><br>";
}

// 2 e 3
if (isset($_POST['string2'])) {
    $string = $_POST['string2'];
    echo "2. MD5: " . md5($string) . "<br>";
    echo "3. SHA-256: " . hash('sha256', $string) . "<br><br>";
}

// 4
if (isset($_POST['string4'])) {
    $str = $_POST['string4'];
    $md5 = md5($str);
    $sha256 = hash('sha256', $str);
    echo "4. Hash MD5: $md5<br>";
    echo "4. Hash SHA-256: $sha256<br>";
    echo "4. Hashes são " . ($md5 === $sha256 ? "iguais" : "diferentes") . "<br><br>";
}

// 5
if (isset($_POST['str5a'], $_POST['str5b'])) {
    $h1 = hash('sha512', $_POST['str5a']);
    $h2 = hash('sha512', $_POST['str5b']);
    echo "5. Hash 1: $h1<br>";
    echo "5. Hash 2: $h2<br>";
    echo "5. Hashes são " . ($h1 === $h2 ? "iguais" : "diferentes") . "<br><br>";
}

// 6
echo "6. Primeiros 5 algoritmos suportados:<br>";
$algos = hash_algos();
for ($i = 0; $i < 5; $i++) {
    echo "- $algos[$i]<br>";
}
echo "<br>";

// 7
if (isset($_POST['senha7'])) {
    $senha = $_POST['senha7'];
    $salt = bin2hex(random_bytes(5));
    $comSalt = $senha . $salt;
    $hash = hash('sha256', $comSalt);
    echo "7. Salt: $salt<br>";
    echo "7. Hash com salt: $hash<br><br>";
}

// 8
if (isset($_POST['senha8'], $_POST['verifica8'])) {
    $senha = $_POST['senha8'];
    $valida = $_POST['verifica8'];
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    echo "8. Hash gerado: $hash<br>";
    if (password_verify($valida, $hash)) {
        echo "8. Senha verificada com sucesso!<br><br>";
    } else {
        echo "8. Senha incorreta.<br><br>";
    }
}

// 9
if (isset($_POST['senha9'])) {
    $senha = $_POST['senha9'];
    $h1 = password_hash($senha, PASSWORD_DEFAULT);
    $h2 = password_hash($senha, PASSWORD_DEFAULT);
    echo "9. Hash 1: $h1<br>";
    echo "9. Hash 2: $h2<br><br>";
}
?>


<h3>1. Verificar força da senha</h3>
<form method="POST">
    <input type="password" name="senha1" placeholder="Digite a senha" required>
    <input type="submit" value="Verificar Força">
</form>

<h3>2 e 3. Gerar MD5 e SHA-256 de uma string</h3>
<form method="POST">
    <input type="text" name="string2" placeholder="Digite uma string" required>
    <input type="submit" value="Gerar Hashes">
</form>

<h3>4. Comparar MD5 e SHA-256 de uma string</h3>
<form method="POST">
    <input type="text" name="string4" placeholder="Digite uma string" required>
    <input type="submit" value="Comparar Hashes">
</form>

<h3>5. Comparar SHA-512 de duas strings</h3>
<form method="POST">
    <input type="text" name="str5a" placeholder="String 1" required>
    <input type="text" name="str5b" placeholder="String 2" required>
    <input type="submit" value="Comparar SHA-512">
</form>

<h3>7. Gerar hash com salt aleatório</h3>
<form method="POST">
    <input type="text" name="senha7" placeholder="Digite uma string" required>
    <input type="submit" value="Gerar Hash com Salt">
</form>

<h3>8. Verificar senha usando password_hash()</h3>
<form method="POST">
    <input type="password" name="senha8" placeholder="Digite a senha" required>
    <input type="password" name="verifica8" placeholder="Repita a senha" required>
    <input type="submit" value="Verificar Senha">
</form>

<h3>9. Gerar dois hashes da mesma senha</h3>
<form method="POST">
    <input type="password" name="senha9" placeholder="Digite a senha" required>
    <input type="submit" value="Gerar dois Hashes">
</form>
