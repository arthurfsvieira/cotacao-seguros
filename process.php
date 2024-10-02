<?php 

include 'db/db_config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $nome_cliente = htmlspecialchars($_POST['nome_cliente']);
    $email_cliente = htmlspecialchars($_POST['email_cliente']);
    $telefone_cliente = htmlspecialchars($_POST['telefone_cliente']);
    $modelo_carro = htmlspecialchars($_POST['modelo_carro']);
    $ano_carro = intval($_POST['ano_carro']);
    $valor_carro = floatval($_POST['valor_carro']);

    $sql = "INSERT INTO cotacoes (nome_cliente, email_cliente, telefone_cliente, modelo_carro, ano_carro, valor_carro)
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssii", $nome_cliente, $email_cliente, $telefone_cliente, $modelo_carro, $ano_carro, $valor_carro);

    if ($stmt->execute()) {
        header("Location: sucesso.php?email=$email_cliente");
        exit;
    } else {
        echo "Erro ao enviar cotação: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

}

?>