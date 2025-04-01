<?php
session_start();  
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
?>

?>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
    <title><strong>Tela de Cadastro</strong></title>
</head>

<body>
<div> 
    <h2>Cadastro de livros:</h2>
        <br>
    <form action="envia_cadastro.php" method="POST">
        <label for = "livro">Título do Livro:</label>
        <input type = "text" id = "livro" name = "livro"><br>
        <label for = "autor">Nome do autor:</label>
        <input type = "autor" id = "autor" name = "autor"><br>
        <label for = "editora">Nome da editora:</label>
        <input type = "editora" id = "editora" name = "editora"><br>
        <label for = "ISBN"> ISBN referente ao livro:</label>
        <input type = "ISBN" id = "ISBN" name = "ISBN"><br>
        <input type = "submit" value = "Cadastrar Livros">
</form>
</div>
<br>
<p>
    <a href="exibir_cadastros.php"><input type = "submit" value = "Exibir cadastros"></a>
<br>
    <a href = "logout.php" class = "btn btn-danger"> Sair </a>
</p>
</body>
</html>


