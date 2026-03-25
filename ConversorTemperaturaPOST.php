<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Celsius: <input type="number" name="c">
    <button type="submit">Converter</button>
</form>

<?php
if ($_POST) {
    $f = ($_POST['c'] * 9/5) + 32;
    echo "Fahrenheit: $f";
}
?>

</body>
</html>