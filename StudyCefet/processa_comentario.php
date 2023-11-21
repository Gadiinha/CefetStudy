<?php
// Conecta ao banco de dados (substitua com suas configurações)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$comentario = $_POST['comentario'];

// Insere o comentário no banco de dados
$sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$nome', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Comentário adicionado com sucesso!";
} else {
    echo "Erro ao adicionar comentário: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Comentário</title>
</head>
<body>
    <h1>Adicionar Comentário</h1>
    <form action="processa_comentario.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="comentario">Comentário:</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea><br>

        <input type="submit" value="Enviar Comentário">
    </form>
</body>

</html>
