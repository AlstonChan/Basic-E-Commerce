<?php $page = 'Home'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/head.php'; ?>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/primary.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/secondary.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/home/hero.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/home/feature.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/about/aboutus.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/home/services.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/footer.php'; ?>
</body>

</html>