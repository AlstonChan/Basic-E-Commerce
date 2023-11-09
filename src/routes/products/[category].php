<?php

$currentCategory = explode('/', $params['url'])[1];
$page = $currentCategory;
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/head.php'; ?>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/primary.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/secondary.php'; ?>
    <section class="mt-8">
        <h1 class="text-2xl md:text-4xl font-bold text-center mb-10">
            <?php echo ucfirst($currentCategory); ?>
        </h1>

        <?php
        $page_type = 'category';
        include $_SERVER['DOCUMENT_ROOT'] .
            '/../src/views/products/product.php';
        ?>

    </article>

    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/home/services.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/footer.php'; ?>
</body>

</html>