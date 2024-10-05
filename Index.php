<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>
</head>
<body>
    <h1>Cadastro de Bebidas</h1>

    <form action="Index.php" method="POST">
        <label for="tipo">Selecione o tipo de bebida:</label>
        <select name="tipo" id="tipo">
            <option value="vinho">Vinho</option>
            <option value="refrigerante">Refrigerante</option>
            <option value="suco">Suco</option>
        </select>
        <br><br>

        <label for="nome">Nome (ou Sabor para Suco):</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>

        <label for="marca">Marca (Apenas para Refrigerante):</label>
        <input type="text" name="marca" id="marca">
        <br><br>

        <label for="tipoVinho">Tipo de Vinho (Apenas para Vinho):</label>
        <input type="text" name="tipoVinho" id="tipoVinho">
        <br><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" required>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'Classes.php'; // Arquivo com as classes
        require_once "Suco.php";
        require_once "Vinho.php";
        require_once "Refrigerante.php";
        $tipo = $_POST['tipo'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        if ($tipo == 'vinho') {
            $tipoVinho = $_POST['tipoVinho'];
            $vinho = new Vinho($nome, $tipoVinho, $preco);
            echo "<h2>Dados do Vinho</h2>";
            echo $vinho->mostrarBebida();
            echo "<br>Preço menor que R$25? " . ($vinho->verificarPreco($preco) ? "Sim" : "Não");
        } elseif ($tipo == 'refrigerante') {
            $marca = $_POST['marca'];
            $refrigerante = new Refrigerante($nome, $marca, $preco);
            echo "<h2>Dados do Refrigerante</h2>";
            echo $refrigerante->mostrarBebida();
            echo "<br>Preço menor que R$5? " . ($refrigerante->verificarPreco($preco) ? "Sim" : "Não");
        } elseif ($tipo == 'suco') {
            $suco = new Suco($nome, $preco);
            echo "<h2>Dados do Suco</h2>";
            echo $suco->mostrarBebida();
            echo "<br>Preço menor que R$2,50? " . ($suco->verificarPreco($preco) ? "Sim" : "Não");
        }
    }
    ?>
</body>
</html>
