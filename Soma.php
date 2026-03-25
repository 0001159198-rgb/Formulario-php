<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Número 1: <input type="number" name="n1"><br>
    Número 2: <input type="number" name="n2"><br>
    <button type="submit">Somar</button>
</form>

<?php
if ($_POST) {
    $soma = $_POST['n1'] + $_POST['n2'];
    echo "Resultado: $soma";
}
?>

</body>
</html>