<?php
include './inc/fonctions.php';
include './inc/pdo.php';
include './partials/header.php';
?>
<div id="card">



    <table>
        <thead>
            <tr>
                <th class="headTab">id</th>
                <th class="headTab">Titre</th>
                <th class="headTab">Genre</th>
                <th class="headTab">Anée</th>
                <th class="headTab">Actions</th>

            </tr>

        </thead>

        <tbody>

            <?php
            foreach (getLastMovies(10) as $film) {
            ?>
                <tr>
                    <td class="tab"><?= $film['id'] ?></td>
                    <td class="tab"> <?= $film['title'] ?></td>
                    <td class="tab"><?= $film['genres'] ?></td>
                    <td class="tab"><?= $film['year'] ?></td>
                    <td class="tab"><button><a href="./edit.php?id=<?= $film['id'] ?>" class="button"> Editer</button>
                        <button><a href="./supp.php?id=<?= $film['id'] ?>" class="button"> Supprimer</button>
                        <button><a href="./ajout.php?id=<?= $film['id'] ?>" class="button"> Ajouter</button>


                    </td>
                </tr>


                <?php
                ?>

            <?php } ?>
        </tbody>
</div>