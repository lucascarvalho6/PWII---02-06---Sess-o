<?php
    session_start();
    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
        header('location:index.php');
    }

    $logado = $_SESSION['login']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SESSÃO LOGADO</title>
</head>
<body>
    <?php echo "usuário logado: " . $logado; ?>
    <form action="deslogar.php" method="post">
        <button type="submit" name="sair">Sair</button>
    </form>
</body>
</html>