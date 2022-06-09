<?php
    require_once("templates/header.php");
?>

<main>
    <!--Div de container abaixo do navbar-->
    <div id="title-container">
        <h1>ASC Brazil!</h1>
        <p>Atendimento multicanal de verdade, é com ASC SAC.</p>
    </div>
    <!--Div de container das imagens--->
    <div id="posts-container">
        <!--LOOP PHP-->
        <?php foreach($posts as $post): ?>
        <div class="post-box">
            <!--BACKEND DAS IMAGENS E O TITULO-->
            <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
            <h2 class="post-tile">
                <!--HIPERLINK DO POST-->
                <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
            </h2>
                <!--DESCRIÇÃO APÓS O HIPERLINK-->
            <p class="post-description"><?= $post['description'] ?></p>
            <div class="tags-container">
                <!--POST DAS TAGS-->
                <?php foreach($post['tags'] as $tag): ?>
                    <a href="#"><?= $tag ?></a>
                <?php endforeach; ?>
            </div>
        </div>
            <?php endforeach; ?>
    </div>
</main>
<?php
    /*Template rodapé*/
    require_once("templates/footer.php");
?>