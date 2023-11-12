<?php

$file =
    $_SERVER['DOCUMENT_ROOT'] . '/public/assets/payment-icon/payment_card.json';
$paymentRawData = json_decode(file_get_contents($file), true);

$paymentData = $paymentRawData['payment-methods'];

$file =
    $_SERVER['DOCUMENT_ROOT'] .
    '/public/assets/delivery-services/delivery.json';
$deliveryRawData = json_decode(file_get_contents($file), true);

$deliveryData = $deliveryRawData['delivery'];
?>

<section class="my-10 max-w-7xl mx-auto flex px-5 flex-col lg:flex-row">
    <div class="flex-1">
        <p class="text-lg md:text-xl mb-3">PAYMENT METHOD</p>
        <div class="grid grid-rows-3 grid-cols-4 gap-2 max-w-sm">
            <?php foreach ($paymentData as $method) { ?>
                <img
                     src="<?php echo $method['thumbnails']; ?>"
                     class="p-0 max-w-[90px] aspect-video w-full h-auto">
            <?php } ?>
        </div>
    </div>
    <div class="flex-1 mt-5 lg:mt-0">
        <p class="text-lg md:text-xl mb-3">DELIVERY SERVICES</p>
        <div class="grid grid-rows-3 grid-cols-4 gap-2 max-w-sm">
            <?php foreach ($deliveryData as $company) : ?>
                <img
                     src="<?php echo $company['thumbnails']; ?>"
                     class="p-0 max-w-[90px] aspect-video w-full h-auto object-contain rounded-md bg-white px-1">
            <?php endforeach ?>
        </div>
    </div>
</section>