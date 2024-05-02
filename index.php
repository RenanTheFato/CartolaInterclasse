<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scouts Page</title>
</head>
<body>

<?php
require('./databases/scoutConection.php');
require('./databases/playersConection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valoresSelecionados = isset($_POST['valores']) ? $_POST['valores'] : [];
    $quantidadesSelecionadas = isset($_POST['quantidades']) ? $_POST['quantidades'] : [];

    $somaScout = 0;

    echo "<table border='1'>";
    echo "<tr><th>Scout</th><th>Pontos</th><th>Quantidade</th><th>Total Scout</th></tr>";

    foreach ($sqlScout as $row) {
        $id = $row['id'];
        $nomeScout = $row['scout'];
        $valorScoutUni = $row['valor'];

        $valorPresente = in_array($valorScoutUni, $valoresSelecionados);

        if ($valorPresente && isset($quantidadesSelecionadas[$id])) {
            $quantidade = $quantidadesSelecionadas[$id];
            $scoutFinal = $valorScoutUni * $quantidade;
            $somaScout += $scoutFinal;
 
            echo "<tr>";
            echo "<td>" . $nomeScout . "</td>";
            echo "<td>" . $valorScoutUni . "</td>";
            echo "<td>" . $quantidade . "</td>";
            echo "<td>" . $scoutFinal . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";

    echo "<p>O scout a ser adicionado é:" . $somaScout . "</p>";
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table border="1">
        <tr>
            <th>Scout</th>
            <th>pontos</th>
            <th>Quantidade</th>
            <th>Add?</th>
        </tr>
        <?php
        foreach ($sqlScout as $row) {
            echo '<tr>';
            echo '<td>' . $row['scout'] . '</td>';
            echo '<td>' . $row['valor'] . ' pontos</td>';
            echo '<td><input type="number" name="quantidades['.$row['id'].']" value="1"></td>';
            echo '<td><input type="checkbox" name="valores[]" value="' . $row['valor'] . '"></td>';
            echo '</tr>';
        }
        ?>
    </table>
    <input type="submit" value="Calcular">
</form>

</body>
</html>