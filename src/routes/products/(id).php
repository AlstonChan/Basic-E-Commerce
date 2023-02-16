<?php

require  $_SERVER['DOCUMENT_ROOT'] . "/../src/controllers/fetch/fetch_products.php";

foreach ($productsData['products'] as $product) {
    if ($product['id'] === (int) $params['id']) {
        $page = $product['title'];
        $currentProduct = $product;
    }
};

$imgSize = getimagesize($currentProduct['thumbnail']);

?>
<?php require  $_SERVER['DOCUMENT_ROOT'] . "/../src/views/head.php" ?>

<body>
    <?php require   $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/primary.php" ?>
    <?php require   $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/secondary.php" ?>
    <article class="section">

        <div class="media container media-mobile-breakpoint">

            <figure class="media-left is-flex-shrink-1 mx-auto mb-3" style="max-width:350px">
                <img style="height: 100%; object-fit: cover;" src="<?php echo $currentProduct['thumbnail']; ?>" width="<?php echo $imgSize[0] ?>px" height="<?php echo $imgSize[1] ?>px">
            </figure>
            <div class="media-content is-flex-shrink-2" style="width:100%;">
                <div class="content has-background-light py-2 px-5" style="border-radius:8px">
                    <p class="title is-size-1-desktop is-size-3-tablet is-size-4-mobile mb-1">
                        <?php echo $currentProduct["title"]; ?>
                    </p>
                    <hr class="m-1 mt-3" style="background-color: #000;height: 3px;">
                    <p class="mb-2 subtitle is-size-3-tablet is-size-4-tablet is-size-5-mobile">
                        <?php echo $currentProduct["brand"]; ?>
                    </p>
                    <p class="mb-3 is-size-5-desktop is-size-6-mobile"><?php echo $currentProduct["description"]; ?></p>
                    <p class="subtitle is-size-6 has-text-weight-bold">
                        USD <?php echo $currentProduct["price"]; ?> |
                        <span style="opacity:0.6">
                            Stock left:<?php echo $currentProduct["stock"]; ?>
                        </span>
                    </p>

                    <form class="buttons mb-5" x-data="{
                        cartNum: 1,
                        validateNum(e) {
                            let val = e.target.value;
                            if (! e.target.value.match(/^\d+$/)) {val = e.target.value.replace(/[a-z]/gi, '');}

                            if (val <= <?php echo $currentProduct["stock"]; ?>) {
                                e.target.value = val;
                            } else {
                                e.target.value = <?php echo $currentProduct["stock"]; ?>;
                                val = e.target.value;
                            }
                            cartNum = val;
                        }
                    }">
                        <button type="submit" class="button has-text-weight-bold is-primary m-0 mr-2">Add to Cart</button>
                        <input x-on:change.debounce="(e) => validateNum(e)" class="input" type="text" min="0" max="<?php echo $currentProduct["stock"]; ?>" value="1" style="width:auto">
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