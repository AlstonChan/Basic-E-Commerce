<?php
$topProducts = [];

foreach ($productsData['products'] as $key => $value) {
    if ($value['rating'] > 4.5) {
        $topProducts[] = $value;
    }
}

$topProducts = array_slice($topProducts, 0, 7);
?>

<section class="mb-32">
    <h2 class="text-2xl md:text-4xl font-bold text-center mb-10">
        Our Top Products
    </h2>
    <div class="grid grid-rows-2 lg:grid-rows-none grid-cols-2 lg:grid-cols-4 max-w-7xl mx-auto gap-5 px-5">
        <?php
        $order = 0;
        $is_new = true;
        require 'featureCard.php';

        $order = 1;
        $is_new = false;
        require 'featureCard.php';

        $order = 4;
        require 'featureCard.php';

        $order = 6;
        require 'featureCard.php';
        ?>
    </div>
</section>