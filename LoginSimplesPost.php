<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Usuário: <input type="text" name="user"><br>
    Senha: <input type="password" name="pass"><br>
    <button type="submit">Login</button>
</form>

<?php
if ($_POST) {
    $user = "admin";
    $pass = "1234";

    if ($_POST['user'] == $user && $_POST['pass'] == $pass) {
        echo "Login correto!";
    } else {
        echo "Usuário ou senha inválidos!";
    }
}
?>

</body>
</html>