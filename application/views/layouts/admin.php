<?php
    /* Прверка сессий */
    if (!isset($_SESSION['admin'])){
        header('Location: /account/login');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> <?php echo $title; ?></title>
        <link rel="stylesheet" href="/public/css/admin_panel.css">
        <link rel="stylesheet" href="/public/css/animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9c77512f2a.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <?php echo $content; ?>
        <script src="/public/js/admin_panel.js"></script>
        <script src="/public/js/admin_page.js"></script>
    </body>
</html>