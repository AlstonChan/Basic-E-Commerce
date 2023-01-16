<?php
$topProducts = [];

foreach ($data['products'] as $key => $value) {
    if ($value['rating'] > 4.5) {
        $topProducts[] = $value;
    }
}

$topProducts = array_slice($topProducts, 0, 7);
?>

<section class="section has-text-centered">
    <p class="title is-2 has-text-weight-bold">
        Our Top Products
    </p>
    <div class="tile is-ancestor">
        <div class="tile mx-auto" style="max-width:1208px">
            <div class="tile is-parent is-vertical">

                <?php

                $order = 0;
                require "featureCard.php";

                ?>


                <?php

                $order = 1;
                require "featureCard.php";

                ?>

            </div>
            <div class="tile is-parent is-vertical">

                <?php

                $order = 4;
                require "featureCard.php";

                ?>


                <?php

                $order = 6;
                require "featureCard.php";

                ?>

            </div>

        </div>
    </div>
</section>