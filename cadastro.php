<!DOCTYPE html>
<html>
<head>
    <title>resultado do cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
</head>

<body>

    <h1>Aparelho cadastrado</h1>

    <?php
    
    if(isset($_POST['cadastrar']))
    {

        //entrada de dados (via form)
        $aparelho    = $_POST['aparelho'];
        $consumo_max = $_POST['consumoMax'];
        $horas_dia  = $_POST['horasDia'];
        $dias_mes    = $_POST['diasMes'];
        $valor_kwh   = $_POST['valorKwh'];

        //processando
        //consumo diário:
        $x = ($consumo_max / 1000);
        $consumo_dia = $x * $horas_dia;

        //cosumo mensal
        $consumo_mens = $consumo_dia * $dias_mes;

        //consumo em reais (R$)
        $consumo_reais = $consumo_mens * $valor_kwh;

        //verificar categoria de consumo
        if ($consumo_reais <= 5)
        {
            $cat = 'Baixa';
        }
        else if ($consumo_reais <= 10)
        {
            $cat = 'Moderada';
        }
        else
        {
            $cat = 'Alta';
        }
        
        //formatar valores  monetarios
        $valor_kwh = number_format($valor_kwh, '2', ',', '.');

        $consumo_reais = number_format ($consumo_reais, '2', ',', '.');

        //saída de dados
        echo "<strong>Nome do aparelho</strong>: $aparelho<br>";
        echo "<strong>Consumo máximo em watts</strong>: $consumo_max w<br>";
        echo "<strong>Quantas horas o aparelho fica ligado ao dia</strong>: $horas_dia h<br>";
        echo "<strong>Quantos dias o aparelho fica ligado por mês</strong>: $dias_mes dias<br>";
        echo "<strong>Valor do Kilowatt-hora: R$ </strong> $valor_kwh<br>";
        echo "<strong>Consumo diário</strong>: $consumo_dia w<br>";
        echo "<strong>Consumo mensal</strong>: $consumo_mens w<br>";
        echo "<strong>Consumo em reias: R$ </strong> $consumo_reais<br>";
        echo "<strong>Categoria de consumo do aparelho</strong>: $cat<br>";
    }    
    else
    {
        echo "<h3>Nenhum aparelho foi cadastrado!</h3>";
    }
        
    

    ?>

    <p>
    <a href="index.php">Voltar para home</a>
    </p>

</body>

</html>