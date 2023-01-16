<section class="section has-text-centered">
    <p class="title is-2 has-text-weight-bold">
        Why <span class="is-underlined" style="text-decoration-thickness: 5px !important;color:#046380">SHOP</span>
    </p>
    <div class="container">
        <!-- first row -->
        <div class="columns">
            <div class="column">
                <article class="media notification is-info columnCard-info">
                    <figure class="media-left">
                        <img class="sml-icon" src="/basic-e-commerce/public/assets/icon/delivery_truck.svg" alt="Delivery truck">
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Fast Delivery</h1>
                            <p class="is-size-5">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. At debitis maiores nostrum atque commodi veritatis modi eos, ratione fuga qui.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media notification is-primary columnCard-primary">
                    <figure class="media-left">
                        <img class="sml-icon" src="/basic-e-commerce/public/assets/icon/bank.svg" alt="Bank">
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Secure Transaction</h1>
                            <p class="is-size-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae deserunt cupiditate! Ab perferendis ullam repudiandae nulla maxime facere odio?
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media notification is-warning columnCard-warning">
                    <figure class="media-left">
                        <img class="sml-icon" src="/basic-e-commerce/public/assets/icon/bag.svg" alt="Bag">
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Various Products</h1>
                            <p class="is-size-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi officiis odio est! Modi corrupti fuga odio eligendi voluptatum perspiciatis. Atque!
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- second row -->
        <div class="columns">
            <div class="column">
                <article class="media notification is-success columnCard-success">
                    <figure class="media-left">
                        <img class="sml-icon" src="/basic-e-commerce/public/assets/icon/refund.svg" alt="Refund">
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Refund Policy</h1>
                            <p class="is-size-5">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. At debitis maiores nostrum atque commodi veritatis modi eos, ratione fuga qui.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media notification is-link columnCard-link">
                    <figure class="media-left">
                        <img class="sml-icon" src="/basic-e-commerce/public/assets/icon/check.svg" alt="check mark">
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Authentic Guarantee</h1>
                            <p class="is-size-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae deserunt cupiditate! Ab perferendis ullam repudiandae nulla maxime facere odio?
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media notification is-info columnCard-info">
                    <figure class="media-left">
                        <img class="sml-icon" src="/basic-e-commerce/public/assets/icon/conversation.svg" alt="conversation bubble">
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">24/7 Customer Service</h1>
                            <p class="is-size-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi officiis odio est! Modi corrupti fuga odio eligendi voluptatum perspiciatis. Atque!
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    </div>
</section>

<section class="section notification">
    <div class="container">
        <h1 class="title is-size-5 has-text-weight-bold">SHOP MALAYSIA - AN ONLINE SHOPPING PLATFORM</h1>
        <p style="opacity:0.75;text-indent:2rem">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quis quam cupiditate nobis voluptate tempore,
            quod vel temporibus sint quibusdam magnam omnis veniam soluta accusantium quos praesentium perspiciatis libero adipisci accusamus
            eligendi sequi ea velit autem et! Ratione provident doloremque recusandae non vero. Omnis debitis veniam nulla minus dicta
            necessitatibus blanditiis fuga assumenda ipsam cumque eum hic officia ab nisi facere nobis quisquam dolorem itaque, dolorum iste.
            Cumque, nisi dolorem. Sapiente mollitia quae molestias facere. Cumque ex fugit cupiditate! Dicta possimus eligendi iste blanditiis
            nemo soluta nam doloribus at cumque. Nobis, ratione? Consectetur tempore, laboriosam voluptas repellat quam ipsum accusantium.
        </p>

        <br>

        <p style="opacity:0.75;text-indent:2rem">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quis quam cupiditate nobis voluptate tempore,
            quod vel temporibus sint quibusdam magnam omnis veniam soluta accusantium quos praesentium perspiciatis libero adipisci accusamus
            eligendi sequi ea velit autem et! Ratione provident doloremque recusandae non vero. Omnis debitis veniam nulla minus dicta
            necessitatibus blanditiis fuga assumenda ipsam cumque eum hic officia ab nisi facere nobis quisquam dolorem itaque, dolorum iste.
            Cumque, nisi dolorem. Sapiente mollitia quae molestias facere. Cumque ex fugit cupiditate! Dicta possimus eligendi iste blanditiis
            nemo soluta nam doloribus at cumque. Nobis, ratione? Consectetur tempore, laboriosam voluptas repellat quam ipsum accusantium.
        </p>
    </div>
</section>

<?php

$file = $_SERVER['DOCUMENT_ROOT'] . "/basic-e-commerce/public/assets/payment-icon/payment_card.json";
$paymentRawData = json_decode(file_get_contents($file), true);

$paymentData = $paymentRawData["payment-methods"];

$file = $_SERVER['DOCUMENT_ROOT'] . "/basic-e-commerce/public/assets/delivery-services/delivery.json";
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