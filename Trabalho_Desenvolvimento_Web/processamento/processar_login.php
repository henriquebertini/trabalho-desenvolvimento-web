<?php
$conn = new mysqli("localhost", "root", "", "controle_e_cobranca");

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT ID FROM cec_usuarios WHERE NOME = '$usuario' AND SENHA = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $mensagem = "Login bem-sucedido!";
    $alert_class = "alert-success";

    header("Location: ../index.php");
    exit;
} else {
    $mensagem = "Login falhou. Verifique seu usuário e senha.";
    $alert_class = "alert-danger";
}

$conn->close();
?>