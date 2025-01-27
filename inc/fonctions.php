<?php

declare(stricat_types=1);


//fonction dd
function dbug($valeur)
{
    echo "<pre style='background-color:green;overflow: auto;height: 300px;color:white;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:green;overflow: auto;height: 400px;color:white;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}

//fonction pour effacer les chams formulaire
function cleanData($valeur)
{
    if (!empty($valeur) && isset($valeur)) :
        $valeur = htmlentities($valeur);
        $valeur = trim($valeur);

        return $valeur;
    else :
        return false;
    endif;
}
function textData($valeur)
{
    $valeur = preg_match('/^[a-z-A-Z]*$/', $valeur);
    return $valeur;
}
function getOneMovie($valeur)
{
    global $conn;
    $sqlRequest = "SELECT * FROM movies_full WHERE id= :valeur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':valeur', $valeur, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetch();
}
function getLimitMovies($valeur)
{
    global $conn;
    $sqlRequest = "SELECT * FROM movies_full LIMIT :valeur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':valeur', $valeur, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetchAll();
}
function getLastMovies($valeur)
{
    global $conn;
    $sqlRequest = "SELECT * FROM movies_full ORDER BY id DESC LIMIT :valeur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':valeur', $valeur, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetchAll();
}
//test donction addMovie ??
// function addMovies($valeur)
// {
//     global $conn;
//     $sqlRequest = "INSERT INTO movies_full (title, slug, genres, directors, year) VALUES (:title, :slug, :genres, :director, :year)";
//     // Préparation de la requête SQL
//     $resultat = $conn->prepare($sqlRequest);
//     // Liaison des paramètres avec les valeurs du nouveau film

//     $resultat->bindValue(':valeur', $valeur, PDO::PARAM_INT);
//     // Exécution de la requête SQL
//     $resultat->execute();
// }
