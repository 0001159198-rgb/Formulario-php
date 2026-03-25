<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <input type="number" name="n1">
    <input type="number" name="n2">
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    switch ($op) {
        case '+': echo $n1 + $n2; break;
        case '-': echo $n1 - $n2; break;
        case '*': echo $n1 * $n2; break;
        case '/': echo $n2 != 0 ? $n1 / $n2 : "Erro"; break;
    }
}
?>

</body>
</html>