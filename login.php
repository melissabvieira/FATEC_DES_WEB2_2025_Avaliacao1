<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST['username'] == 'biblio' && $_POST['password'] == 'biblio') {
        $_SESSION['loggedin'] = TRUE;
        header("location: cadastrar.php");
        exit; 
    } else if ($_POST['username'] == 'professor' && $_POST['password'] == 'professor') {
        $_SESSION['loggedin'] = TRUE;

    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
</head>

<body>
    <div>
        <h3>Login</h3>
        <p>Usuário e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Logar">
            </div>
        </form>
    </div>
</body>
</html>
