<!DOCTYPE html>

<html>

<head>
    <title>Site</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">

    

</head>

<body>

    <h1>Cadastro de aparelho eletrônico</h1>

    <h3>Cadastre um aparelho:</h3>
    
    <form action="cadastro.php" method="post">
        
        <p>
            <label>Nome do aparelho:</label><br>
            <input type="text" name="aparelho" required>
        </p>    

        <p>
            <label>Consumo máximo em watts:</label><br>
            <input type="number" name="consumoMax" required min="0">
        </p>

        <p>
            <label>Quantas horas o aparelho fica ligado por dia:</label><br>
            <input type="number" name="horasDia" required min="0" max="24">
        </p>

        <p>
            <label>Quantos dias por mês o aparelho fica ligado:</label><br>
            <input type="number" name="diasMes" required min="0" max="31">
        </p>

        <p>
            <label>Valor do Kilowatt-hora:</label><br>
            <input type="number" name="valorKwh" required min="0" step="0.1">
        </p>

        <p>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </p>

    </form>

</body>

</html>