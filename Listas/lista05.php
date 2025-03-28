<?php
abstract class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function setMarca($marca) { $this->marca = $marca; }
    public function setModelo($modelo) { $this->modelo = $modelo; }
    public function setAno($ano) { $this->ano = $ano; }

    public function getMarca() { return $this->marca; }
    public function getModelo() { return $this->modelo; }
    public function getAno() { return $this->ano; }

    abstract public function exibir();
}

class Carro extends Veiculo {
    public function abrirPorta() {
        return "A porta do carro foi aberta.";
    }

    public function exibir() {
        return "Carro: {$this->marca}, {$this->modelo}, {$this->ano}";
    }
}

class Moto extends Veiculo {
    public function empinar() {
        return "A moto empinou!";
    }

    public function exibir() {
        return "Moto: {$this->marca}, {$this->modelo}, {$this->ano}";
    }
}


$tipo = $_POST['tipo'] ?? 'carro';
$marca = $_POST['marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$ano = $_POST['ano'] ?? '';
$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($tipo === 'carro') {
        $veiculo = new Carro($marca, $modelo, $ano);
        $resultado = $veiculo->exibir() . "<br>" . $veiculo->abrirPorta();
    } else {
        $veiculo = new Moto($marca, $modelo, $ano);
        $resultado = $veiculo->exibir() . "<br>" . $veiculo->empinar();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Veículo</title>
</head>
<body>
    <h2>Cadastro de Veículo</h2>
    <form method="POST">
        <label>Tipo:</label>
        <select name="tipo" onchange="this.form.submit()">
            <option value="carro" <?= $tipo === 'carro' ? 'selected' : '' ?>>Carro</option>
            <option value="moto" <?= $tipo === 'moto' ? 'selected' : '' ?>>Moto</option>
        </select><br><br>

        <label>Marca:</label>
        <input type="text" name="marca" value="<?= htmlspecialchars($marca) ?>" required><br>

        <label>Modelo:</label>
        <input type="text" name="modelo" value="<?= htmlspecialchars($modelo) ?>" required><br>

        <label>Ano:</label>
        <input type="number" name="ano" value="<?= htmlspecialchars($ano) ?>" required><br>

        <button type="submit">Enviar</button>
    </form>

    <?php if ($resultado): ?>
        <h3>Resultado:</h3>
        <p><?= $resultado ?></p>
    <?php endif; ?>
</body>
</html>
