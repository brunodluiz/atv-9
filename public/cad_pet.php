<?php
include '../infra/connect.php';
if (!isset($conn) || $conn === null) {
    die('Erro ao conectar com o banco de dados.');
}

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn, $sql);

if ($resultado === false) {
    die('Erro ao consultar usuários: ' . mysqli_error($conn));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $porte = $_POST['porte'];
    $usuario_id = $_POST['usuario'];

    $sql = "INSERT INTO animais (nome, idade, porte, cliente_id) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        die('Erro ao preparar a inserção do prato: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'ssdsi', $nome, $descricao, $preco, $categoria, $usuario_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Prato cadastrado com sucesso!";
        echo "<br><a href='../index.php'>Voltar</a>";
        exit();
    } else {
        echo "Erro ao cadastrar prato: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pets</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <form method="POST">
        <label for="nome">Nome do Pet:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="descricao">Idade:</label>
        <textarea name="descricao" id="descricao" required></textarea>
        <br>
        <label for="categoria">Porte:</label>
        <input type="text" name="categoria" id="categoria" required>
        <br>
        <label for="usuario">Usuário:</label>
        <select name="usuario" id="">
            <option value="">Selecione um Usuário</option>
            <?php
            while ($usuario = mysqli_fetch_assoc($resultado)) {
                echo "<option value='{$usuario['id']}'>{$usuario['nome']}</option>";
            }
            ?>
        </select>
        <br>
        <button type="submit">Cadastrar Pet</button>
    </form>
    <button type="button" onclick="window.location.href='../index.php'">Voltar</button>
</body>

</html>
