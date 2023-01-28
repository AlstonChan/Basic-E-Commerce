<?php $page = "All Products" ?>
<?php require __DIR__ . "/../views/head.php" ?>

<body>
    <?php require __DIR__ . "/../views/nav/primary.php" ?>
    <?php require __DIR__ . "/../views/nav/secondary.php" ?>

    <?php

    $arrangedCategory
    ?>

    <article class="section has-text-centered wide-widescreen">
        <p class="title is-2 has-text-weight-bold">
            All Products
        </p>
        <p class="subtitle is-4">
            We only sell the best products
        </p>

        <?php

        for ($index = 0; $index < count($arrangedCategory); $index++)
            include __DIR__ . "/../views/all_products/product_section.php";

        ?>


    </article>
    <?php require __DIR__ . "/../views/home/services.php" ?>
    <?php require __DIR__ . "/../views/footer.php" ?>
</body>

</html>