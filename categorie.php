<?php
    // Inclusion de header.php sur la page.
    require_once(__DIR__.'/partials/header.php');
?>

<?php
    // Récupération du nom de la catégorie dans l'URL.
    $nom_categorie = (isset($_GET['nom_categorie'])) ? $_GET['nom_categorie'] : ' ';

    // Récupération de l'id de la catégorie dans l'URL.
    $id_categorie = (isset($_GET['id_categorie'])) ? $_GET['id_categorie'] : 0;

    // je récupere tous les articles d'une categorie .
    $articles = getArticlesByCategorieId($id_categorie);
     

?>



<div class="p-3 mx-auto text-center">
    <h1 class="display-4"><?php echo $nom_categorie; ?></h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article) { ?>
            <div class="col-md-4">
                <div class="card">
                        <img src="assets/img/article/<?= $article['image'] ?>" 
                         class="card-img-top"
                         alt=" <?= $article['titre'] ?> ">

                    <div class="card-body">
                        <h5 class="card-title"><?= $article['titre'] ?></h5>
                        <p class="card-text"><?= summarize($article['contenu']) ?></p>

                        <div class="d-flex justify-content-between align-items-center">
                             <a href="article.php?id_article=<?= $article['id'] ?>" class="btn btn-primary">Lire la suite</a>
                             <small class="text-muted"><?= $article['prenom'] .' '. $article['nom'] ?></small>
                        </div> <!-- /.d-flex -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div> <!-- /.col -->
            <?php  } //fin du foreach    ?>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.bg-light -->

<?php
// Inclusion de footer.php sur la page.
require_once(__DIR__.'/partials/footer.php');
?>