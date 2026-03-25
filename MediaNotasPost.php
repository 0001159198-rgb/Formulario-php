<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Nota 1: <input type="number" step="0.1" name="n1"><br>
    Nota 2: <input type="number" step="0.1" name="n2"><br>
    Nota 3: <input type="number" step="0.1" name="n3"><br>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
    $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3']) / 3;
    echo "Média: " . number_format($media, 2) . "<br>";
    echo ($media >= 7) ? "Aprovado" : "Reprovado";
}
?>

</body>
</html>