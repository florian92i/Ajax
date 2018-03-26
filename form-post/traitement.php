<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
extract($_POST);

$req = Connexion()->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
$req->execute(array($login, $password));
$user = $req->fetch();
if($user){
    echo $user;
}else{
    echo "pas ok";
}
