<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação Enviada</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cotação enviada com sucesso!</h1>

        <?php
        if (isset($_GET['email']) && !empty($_GET['email'])) {
            echo "<p>Sua cotação foi enviada para o seu email! Obrigado por utilizar nossos serviços.</p>";
        }
        ?>

        <button onclick="window.location.href='index.php';">Nova Cotação</button>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
