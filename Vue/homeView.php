<?php
require 'Part/headerHtml.php';
?>

<body>
<?php
require 'Part/navbar.php';
?>
<div class="container text-center ">
    <row class="col-md-6">
        <h1>Mon super forum !</h1>
        <p>Derniers articles du forum :</p>
    </row>


        <?php
        foreach ($articles as $article){
            ?>

    <div class="card-deck col-md-12">
            <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article->getTitre(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><em> le <?php echo $article->getDateCreation() ?></em></h6>
                    <p class="card-text"><?php
                        echo nl2br(htmlspecialchars($article->getContenu()));
                        ?></p>
                    <a href="#" class="card-link">Commentaires</a>
                    <button type="submit">
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Ajouter un commentaire
                        </a>
                    </button><br/>
                        <button type="submit">
                            <a href="/forum/index.php?controller=article&action=newArticle">
                                <i class="fa fa-plus"></i>
                            Ajouter un article
                            </a>
                        </button>
                    <div>
                        <button type="submit">
                            <a href="/forum/index.php?controller=article&action=deleteArticle&id=<?php echo $article->getId()?>">
                                <i class="fa fa-trash"></i>
                                Supprimer un article
                            </a>
                        </button>
                    </div>
                    <div>
                        <button type="submit">
                            <a href='/forum/index.php?controller=article&action=updateArticle&id=<?php echo $article->getId()?>'>
                                <i class="fa fa-edit"></i>
                                Mettre à jour un article
                            </a>
                        </button>

                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
    </div>
            <?php
        }
        ?>

</div>
<?php
require 'Part/footerHtml.php';
?>

