<!DOCTYPE html>
<html>
<body>

<form method="GET">
    Número: <input type="number" name="num">
    <button type="submit">Verificar</button>
</form>

<?php
if (isset($_GET['num'])) {
    $num = $_GET['num'];
    echo ($num % 2 == 0) ? "Par" : "Ímpar";
}
?>

</body>
</html>