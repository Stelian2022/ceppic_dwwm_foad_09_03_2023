<?php
include './inc/fonctions.php';
include './inc/pdo.php';
include './partials/header.php';
?>
<?php
$sqlRequest = "INSERT INTO movies_full (title, slug, genres, directors, year) VALUES (:title, :slug, :genres, :director, :year)";

// Préparation de la requête SQL
$resultat = $conn->prepare($sql);

// Liaison des paramètres avec les valeurs du nouveau film
$resultat->bindValue(':title', $title, PDO::PARAM_STR);
$resultat->bindValue(':slug', $year, PDO::PARAM_INT);
$resultat->bindValue(':genres', $year, PDO::PARAM_INT);
$resultat->bindValue(':directors', $director, PDO::PARAM_STR);
$resultat->bindValue(':year', $year, PDO::PARAM_INT);


// Exécution de la requête SQL
$resultat->execute();

// Vérification du nombre de lignes affectées (1 si l'ajout a réussi, 0 sinon)
if ($resultat->rowCount() > 0) {
    echo "Le nouveau film a été ajouté avec succès !";
} else {
    echo "Le nouveau film n'a pas pu être ajouté.";
}

// Fermeture de la connexion à la base de données
$pdo = null;