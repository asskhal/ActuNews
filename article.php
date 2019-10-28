<?php
// Inclusion de header.php sur la page.
require_once(__DIR__.'/partials/header.php');


$article_id = (isset($_GET['id_article'])) ? $_GET['id_article'] : 0 ;
$article = getArticleById($article_id);


?>

<!-- Ici, viendra le contenu de ma page -->
<div class="p-3 mx-auto text-center">
    <h1 class="display-4"><?= $article['titre'] ?></h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img  class="img-fluid" src="assets/img/article/<?= $article['image'] ?>" alt=" <?= $article['titre'] ?>">
            </div> <!-- /.col -->
            <div class="col-md-12 mt-4">
                <?= $article['contenu'] ?>
            </div>  <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.bg-light -->

<?php
// Inclusion de footer.php sur la page.
require_once(__DIR__.'/partials/footer.php');
?>