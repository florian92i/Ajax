<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajax Jquery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container card">
        <h3 class="card-body">Form Post</h3>
        <form id="form_msg">
            <div class="col-4">
                <input type="text" class="form-control" name="login" placeholder="login"><br>
                <input type="password" class="form-control" name="password" placeholder="password"><br>
            <input type="submit" class="btn btn-primary" value="Enovyer">
            </div>
        </form><hr>

        <p id="text"></p>
    </div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
