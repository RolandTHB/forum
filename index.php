<?php
include 'include.php';

if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
}

else if($_GET['controller'] === 'article' && $_GET['action'] == 'newArticle'){
    $articleController = new ArticleController();
    $articleController->newArticleAction();
}
else if($_GET['controller'] === 'article' && $_GET['action'] == 'deleteArticle'){
    $articleController = new ArticleController();
    $articleController->deleteArticleAction($_GET['id']);
}

else if($_GET['controller'] === 'article' && $_GET['action'] == 'formArticle'){
    $articleController = new ArticleController();
    $articleController->formArticleAction();
}else {
    $exception = new Exception("La page demandée n'existe pas", 404);
    throw  $exception;
}



?>