<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
<div class="container text-center ">
    <row class="col-md-6">
        <h1>Mon super forum !</h1>
        <p>Derniers articles du forum :</p>
    </row>


        <?php
        foreach ($articles as $article){
            ?>

    <div class="card-deck">
            <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article->getTitre(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><em> le <?php echo $article->getDateCreation() ?></em></h6>
                    <p class="card-text"><?php
                        echo nl2br(htmlspecialchars($article->getContenu()));
                        ?></p>
                    <a href="#" class="card-link">Commentaires</a>
                    <p>Ajouter un article</p><button type="submit"><a href="/forum/index.php?controller=article&action=newArticle"><i class="fa fa-plus"></i></a></button>
                    <p>Supprimer un article</p><button type="submit"><a href="/forum/index.php?controller=article&action=deleteArticle&id=<?php echo $article->getId()?>"><i class="fa fa-trash"></i>Supprimer un article</a></button>
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>