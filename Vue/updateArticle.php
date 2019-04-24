
<?php
require 'Part/headerHtml.php';
?>

<body>
<div class="container text-center ">
    <row class="col-md-6">
        <h1>Mon super forum !</h1>
        <p>Update Article.php success</p>
    </row>

    <form method="post" action="/forum/index.php?controller=article&action=updateFormArticle&id=<?php echo $id; ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="titre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contenu</label>
            <input name="contenu" type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre contenu">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
require 'Part/footerHtml.php';
?>



