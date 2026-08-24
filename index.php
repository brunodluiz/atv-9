<?php

include 'infra/connect.php';
$sql = "SELECT * FROM pratos";
$resultado = mysqli_query($conn, $sql);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = $_POST['usuario'] ?? null;

    if ($usuario_id) {
        $sql = "SELECT * FROM pets WHERE id_usuario = $usuario_id";
        $resultado = mysqli_query($conn, $sql);
    } else {
        $sql = "SELECT * FROM pets";
        $resultado = mysqli_query($conn, $sql);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Pets</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <main>
        <h1>Gerenciador de Pets</h1>
        <a href="public/cad_pet.php"> Novo Pet</a>
        <a href="public/cad_user.php"> Novo Usuário</a>
        <br>
        <br>
        <form method="POST">
            <label for="usuario">Filtro por Usuário</label>
            <select id="usuario" name="usuario">
                <option value="">Todos</option>
                <?php
                $sqlUsuarios = "SELECT * FROM usuarios";
                $resultadoUsuarios = mysqli_query($conn, $sqlUsuarios);
                while ($usuario = mysqli_fetch_assoc($resultadoUsuarios)) {
                    echo "<option value='{$usuario['id']}'>{$usuario['nome']}</option>";
                }

                ?>
            </select>
            <button type="submit">Filtrar</button>
            <br>
            <br>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>porte</th>
                    <th>ID do Usuário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php

                    while ($pet = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>{$pet['nome']}</td>";
                        echo "<td>{$pet['descricao']}</td>";
                        echo "<td>{$pet['porte']}</td>";
                        echo "<td>{$pet['id_usuario']}</td>";
                        echo "<td>
                                <a href='public/editarpet.php?id={$pet['id']}'>Editar</a> |
                                <a href='public/excluir.php?id={$pet['id']}'>Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </main>


</body>

</html>