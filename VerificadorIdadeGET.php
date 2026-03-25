<!DOCTYPE html>
<html>
<body>

<form method="GET">
    Idade: <input type="number" name="idade">
    <button type="submit">Verificar</button>
</form>

<?php
if (isset($_GET['idade'])) {
    echo ($_GET['idade'] >= 18) ? "Maior de idade" : "Menor de idade";
}
?>

</body>
</html>