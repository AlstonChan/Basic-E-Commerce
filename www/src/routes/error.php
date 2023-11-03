<?php

if (!isset($msg))
    $msg = "404 not found";

if (!isset($subMsg))
    $subMsg = "Oops, this page does not exists.";

$page = $msg

?>
<?php require __DIR__ . "/../views/head.php" ?>

<body>
    <?php require __DIR__ . "/../views/nav/primary.php" ?>
    <?php require __DIR__ . "/../views/nav/secondary.php" ?>
    <section class="section has-text-centered">
        <h1 class="title"><?php echo $msg ?></h1>
        <h2 class="subtitle">
            <?php echo $subMsg ?>
        </h2>
        <a href="/" class="link">
            Back to Home
        </a>
    </section>
</body>

</html>