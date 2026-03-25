<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Número: <input type="number" name="num">
    <button type="submit">Gerar</button>
</form>

<?php
if ($_POST) {
    $num = $_POST['num'];
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>

</body>
</html>