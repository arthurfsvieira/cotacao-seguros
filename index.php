<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação de Seguro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <h1>Solicitar Cotação de Seguro</h1>
    <form action="process.php" method="POST">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome_cliente" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email_cliente" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone_cliente">

        <label for="modelo_carro">Modelo do Carro:</label>
        <input type="text" id="modelo_carro" name="modelo_carro" required>
        
        <label for="ano_carro">Ano do Carro:</label>
        <input type="number" id="ano_carro" name="ano_carro" required>

        <label for="valor_carro">Valor do Carro (€):</label>
        <input type="number" id="valor_carro" name="valor_carro" min="1" step="0.01" required>

        <button type="submit">Enviar Cotação</button>
    
    </form>

<script src="js/script.js"></script>
</body>
</html>