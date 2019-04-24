<?php

class ArticleController
{
    public function newArticleAction()

    {
        require 'Vue/newArticle.php';

    }

    public function formArticleAction()
    {
        $articleManager = new ArticleManager();
        $article = new Article(null, $_POST['titre'], $_POST['contenu'],null);
        $articleManager->insertArticle($article);
        // appeler l'article manager pour enregistrer en base l'article
        header("Location:  http://localhost/forum/index.php?controller=index&action=renderIndex");

    }

    public function deleteArticleAction($id)
    {
        $articleManager = new ArticleManager();
        $articleManager->deleteArticle($id);
        header("Location:  http://localhost/forum/index.php?controller=index&action=renderIndex");

    }
    public function UpdateArticleAction($id)
    {//le param est utilisé dans mon form avec le $_GET
        // je redirige vers la page de mon formulaire
        require 'Vue/updateArticle.php';
    }

    public function UpdateFormArticleAction($id)
    {
        $articleManager = new ArticleManager();
        $article = new Article($id, $_POST['titre'], $_POST['contenu'],null);
        $articleManager->updateArticle($article);
        // appeler l'article manager pour update en base l'article
        header("Location:  http://localhost/forum/index.php?controller=index&action=renderIndex");

    }

}
?>