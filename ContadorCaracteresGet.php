<!DOCTYPE html>
<html>
<body>

<form method="GET">
    Texto: <input type="text" name="texto">
    <button type="submit">Contar</button>
</form>

<?php
if (isset($_GET['texto'])) {
    echo "Quantidade de caracteres: " . strlen($_GET['texto']);
}
?>

</body>
</html>