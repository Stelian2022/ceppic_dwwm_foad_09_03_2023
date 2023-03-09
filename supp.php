<?php
include './inc/fonctions.php';
include './inc/pdo.php';
include './partials/header.php';
?>

<?php
// dd($_GET['id']);

if ($_GET['id']->rowCount() > 0) {
  echo "Le film a été supprimé avec succès !";
} else {
  echo "Le film n'a pas pu être supprimé.";
}
// Fermeture de la connexion à la base de données
$conn = null;



include './partials/footer.php';
