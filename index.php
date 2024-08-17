<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <title>Site maneiríssimo</title>
    <link rel="stylesheet" href="styles.css">
    <script src="include/validacao.js"></script>
</head>

<body>
    <h1>Cadastro de Pessoa</h1>
    
    <form action="include/processa_pessoa.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
