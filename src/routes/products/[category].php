<?php

$currentCatogory = explode('/', $params['url'])[1];
$page = $currentCatogory;
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/head.php'; ?>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/primary.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/secondary.php'; ?>
    <article class="section has-text-centered wide-widescreen">
        <p class="title is-2 has-text-weight-bold">
            <?php echo ucfirst($currentCatogory); ?>
        </p>

        <?php include $_SERVER['DOCUMENT_ROOT'] .
            '/../src/views/products/product.php'; ?>

    </article>

    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/home/services.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/footer.php'; ?>
</body>

</html>