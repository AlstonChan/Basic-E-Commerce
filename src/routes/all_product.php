<?php $page = 'All Products'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/head.php'; ?>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/primary.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/secondary.php'; ?>

    <section class="mt-8">
        <h1 class="text-2xl md:text-4xl font-bold text-center mb-10">
            All Products
        </h1>

        <?php for (
            $index = 0;
            $index < count($arrangedProductsCategory);
            $index++
        ) {
            include $_SERVER['DOCUMENT_ROOT'] .
                '/../src/views/all_products/product_section.php';
        } ?>

    </section>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/home/services.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/footer.php'; ?>
</body>

</html>