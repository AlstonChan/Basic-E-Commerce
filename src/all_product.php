<?php $page = "All Products" ?>
<?php require "./views/head.php" ?>

<body>
    <?php require "./views/nav/primary.php" ?>
    <?php require "./views/nav/secondary.php" ?>

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
            include "./views/all_products/product_section.php";

        ?>


    </article>
    <?php require "./views/home/services.php" ?>
    <?php require "./views/footer.php" ?>
</body>

</html>