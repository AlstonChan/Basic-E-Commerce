<?php

require  $_SERVER['DOCUMENT_ROOT'] . "/../src/controllers/fetch/fetch_products.php";

foreach ($productsData['products'] as $product) {
    if ($product['id'] === (int) $params['id']) {
        $page = $product['title'];
        $currentProduct = $product;
    }
}

?>
<?php require  $_SERVER['DOCUMENT_ROOT'] . "/../src/views/head.php" ?>

<body>
    <?php require   $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/primary.php" ?>
    <?php require   $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/secondary.php" ?>
    <article class="section">

        <div class="media container">

            <figure class="media-left is-flex-shrink-1">
                <p class="image">
                    <img style="height: 100%; object-fit: cover;" src="<?php echo $currentProduct['thumbnail']; ?>">
                </p>
            </figure>
            <div class="media-content is-flex-shrink-2">
                <div class="content has-background-light py-2 px-5">
                    <p class="title is-size-1 mb-1">
                        <?php echo $currentProduct["title"]; ?>
                    </p>
                    <hr class="m-1" style="background-color: #000;height: 3px;">
                    <p class="mb-2 subtitle is-size-3">
                        <?php echo $currentProduct["brand"]; ?>
                    </p>
                    <p class="mb-3 is-size-5"><?php echo $currentProduct["description"]; ?></p>
                    <p class="subtitle is-size-6 has-text-weight-bold">
                        USD <?php echo $currentProduct["price"]; ?> |
                        <span style="opacity:0.6">
                            Stock left:<?php echo $currentProduct["stock"]; ?>
                        </span>
                    </p>

                    <form class="buttons mb-5">
                        <button class="button has-text-weight-bold is-primary m-0 mr-2">Add to Cart</button>
                        <input class="input" type="number" min="0" max="<?php echo $currentProduct["stock"]; ?>" style="width:auto">
                    </form>
                </div>
                <nav class="level is-mobile">
                    <div class="level-left">
                        <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-reply"></i></span>
                        </a>
                        <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>
                        <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-heart"></i></span>
                        </a>
                    </div>
                </nav>
            </div>

        </div>

    </article>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/home/services.php" ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/footer.php" ?>
</body>

</html>