<?php

$file = $_SERVER['DOCUMENT_ROOT'] . "/public/assets/payment-icon/payment_card.json";
$paymentRawData = json_decode(file_get_contents($file), true);

$paymentData = $paymentRawData["payment-methods"];

$file = $_SERVER['DOCUMENT_ROOT'] . "/public/assets/delivery-services/delivery.json";
$deliveryRawData = json_decode(file_get_contents($file), true);

$deliveryData = $deliveryRawData["delivery"];

?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <p class="title is-size-6 is-uppercase has-text-weight-bold">PAYMENT METHOD</p>
                <div class="sml-tag" style="max-width:400px">
                    <?php foreach ($paymentData as $method) : ?>
                        <div class="box p-0 mr-3" style="max-width:90px">
                            <figure class="image is-5by3">
                                <img src="<?php echo $method['thumbnails'] ?>">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="column">
                <p class="title is-size-6 is-uppercase has-text-weight-bold">DELIVERY SERVIVCES</p>
                <div class="sml-tag" style="max-width:400px">
                    <?php foreach ($deliveryData as $company) : ?>
                        <figure class="image mr-3 mb-3">
                            <img src="<?php echo $company['thumbnails'] ?>">
                        </figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>