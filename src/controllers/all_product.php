<?php $page = "All Products" ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/head.php" ?>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/primary.php" ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/secondary.php" ?>

    <article class="section has-text-centered wide-widescreen">
        <p class="title is-2 has-text-weight-bold">
            All Products
        </p>
        <p class="subtitle is-4">
            We only sell the best products
        </p>

        <?php

        for ($index = 0; $index < count($arrangedProductsCategory); $index++)
            include $_SERVER['DOCUMENT_ROOT'] . "/../src/views/all_products/product_section.php";

        ?>

    </article>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/home/services.php" ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/footer.php" ?>
</body>

</html>