<?php
// Inclusion de header.php sur la page.
require_once(__DIR__.'/partials/header.php');

// recuperation des articles 
$articles = getArticles();


?>

<!-- Ici, viendra le contenu de ma page -->
<div class="p-3 mx-auto text-center">
    <h1 class="display-4">ActuNews</h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article) { ?>
            <div class="col-md-4">
                <div class="card">
                        <img src="assets/img/article/<?= $article['image'] ?>" 
                         class="card-img-top"
                         alt="<?= $article['titre'] ?> ">

                    <div class="card-body">
                        <h5 class="card-title"><?= $article['titre'] ?></h5>
                        <p class="card-text"><?= summarize($article['contenu']) ?></p>

                        <div class="d-flex justify-content-between align-items-center">
                             <a href="article.php?id_article= <?= $article['id'] ?>" class="btn btn-primary">Lire la suite</a>
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