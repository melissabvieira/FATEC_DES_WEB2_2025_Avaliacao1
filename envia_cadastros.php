<!DOCTYPE html>
<html lang = "pt-br">
    <head> 
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Histórico via POST</title>
    </head>

    <body>
        <?php 
        session_start();

        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: login.php");
            exit;
        }

    print_r($_POST);
    $filename = 'cadastrados.txt';
    if(!file_exists('cadastrados.txt')){
        $handle = fopen('cadastrados.txt','w');
    }else{
        $handle = fopen('cadastrados.txt','a');
    }
    fwrite($handle, $_POST['livro']);
    fwrite($handle, ",");
    fwrite($handle, $_POST['autor']);
    fwrite($handle, ",");
    fwrite($handle, $_POST['editora']);
    fwrite($handle, ",");
    fwrite($handle, $_POST['ISBN']);
    fwrite($handle, ",");

header("location: cadastrar.php")

?>
    </body>
</html>
