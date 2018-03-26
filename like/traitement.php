<?php
require_once 'includes/config.php';

if ($_POST) {
    extract( $_POST );




    $req = $pdo->prepare( 'SELECT * FROM posts WHERE title LIKE :data' );
    $req->bindValue( ':data', '%' . $data . '%', PDO::PARAM_STR );
    $req->execute();


    $posts = $req->fetchAll();

    if ($posts) { // si la $posts retourne vide alors message d'erreur

        $reponse = "<ul>";

        foreach ($posts as $post) {
            $reponse .= "<li>" . $post['title'] . "</li>";

        }
        $reponse .= "</ul>";
    }

    else {
        $reponse = "Desole il n'y pas la recherche que vous voulez";
    }


    die( json_encode( $reponse ) ); //fini scirpt + echo

}



