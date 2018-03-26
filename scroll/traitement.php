<?php

require_once 'includes/config.php';
require_once 'includes/functions.php';

extract($_POST);


$req = Connexion()->prepare('SELECT * FROM posts LIMIT 2 OFFSET :compte');
$req->bindValue(':compte',intval($compte), PDO::PARAM_INT);
$req->execute();

$users = $req->fetchAll();
$reponse = '';

foreach ($users as $user) {
    $reponse .= $user->title.'<br><br>';

}


die(json_encode($reponse)); //fini scirpt + echo

?>