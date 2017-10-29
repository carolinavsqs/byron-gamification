<?php
    require_once ("../_controller/check_login.php");
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Só você pode me ouvir, invocador. Que obra prima devemos tocar hoje?!</h1>
    
    <br>
    <a href=<?php echo '../_view/pageProfile.php?id='.$_SESSION['byron_gamification']['user']?> >Ver perfil</a>
    <br>
    <a href='../_view/registerForm.php'>Adicionar novo membro</a>
    <br>
    <a href='../_controller/logout.php'>Clique aqui para deixar a cidade!</a>
</body>
</html>