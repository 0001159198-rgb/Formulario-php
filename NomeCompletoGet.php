<!DOCTYPE html>
<html>
<body>

<form method="GET">
    Nome: <input type="text" name="nome">
    Sobrenome: <input type="text" name="sobrenome">
    <button type="submit">Enviar</button>
</form>

<?php
if (isset($_GET['nome'])) {
    echo "Nome completo: " . $_GET['nome'] . " " . $_GET['sobrenome'];
}
?>

</body>
</html>