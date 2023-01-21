<?php

$file = $_SERVER['DOCUMENT_ROOT'] . "/basic-e-commerce/public/assets/testimonials.json";
$data = json_decode(file_get_contents($file), true);

$data = array_chunk($data, 3);

?>


<section class="section has-text-centered">
    <p class="title is-2 has-text-weight-bold">
        Customer Review
    </p>
    <p class="subtitle is-4">
        What people have said about us
    </p>
    <div class="tile is-ancestor wide-widescreen columnsAbout">
        <div class="tile is-parent is-vertical ">
            <?php foreach ($data[0] as $value) : ?>
                <?php require "./views/about/testimonialCard.php" ?>
            <?php endforeach; ?>
        </div>
        <div class="tile is-parent is-vertical">
            <?php foreach ($data[1] as $value) : ?>
                <?php require "./views/about/testimonialCard.php" ?>
            <?php endforeach; ?>
        </div>
        <div class="tile is-parent is-vertical">
            <?php foreach ($data[2] as $value) : ?>
                <?php require "./views/about/testimonialCard.php" ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>