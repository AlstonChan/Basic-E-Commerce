<?php

$file =
    $_SERVER['DOCUMENT_ROOT'] . '/public/assets/social-media/social_media.json';
$rawData = json_decode(file_get_contents($file), true);

$data = $rawData['social-media'];
?>

<footer class="footer footer-bg p-10 bg-base-300 text-base-content max-w-7xl mx-auto">
    <nav>
        <header class="footer-title">CUSTOMER SERVICE</header>
        <a class="link link-hover">Help Centre</a>
        <a class="link link-hover">How To Buy</a>
        <a class="link link-hover">How To Sell</a>
        <a class="link link-hover">SHOP Guarantee</a>
        <a class="link link-hover">SHOP Free Shipping Program</a>
        <a class="link link-hover">Return & Refund</a>
        <a class="link link-hover">Contact Us</a>
    </nav>
    <nav>
        <header class="footer-title">ABOUT SHOP</header>
        <a class="link link-hover">About Us</a>
        <a class="link link-hover">SHOP Careers</a>
        <a class="link link-hover">SHOP Policies</a>
        <a class="link link-hover">Privacy Policy</a>
        <a class="link link-hover">SHOP Mall</a>
        <a class="link link-hover">Seller Centre</a>
        <a class="link link-hover">Shocking Sale</a>
        <a class="link link-hover">Media Contact</a>
    </nav>
    <nav>
        <header class="footer-title">FOLLOW US</header>
        <div class="grid grid-flow-col gap-4">
            <?php foreach ($data as $company) { ?>
                <a class="flex flex-col link link-hover">
                    <figure class="max-w-[48px] h-auto self-center">
                        <img src="<?php echo $company['thumbnails']; ?>">
                    </figure>
                    <p class="capitalize">
                        <?php echo $company['name']; ?>
                    </p>
                </a>
            <?php } ?>
        </div>
    </nav>
</footer>
<div class="my-10 max-w-xs mx-auto">
    <p class="text-center">
        <strong>SHOP</strong> by
        <a href="https://www.chanalston.com" class="link link-secondary link-hover">
            <strong>Chan Alston</strong>
        </a>.
        The source code is licensed under
        <a href="https://opensource.org/licenses/GPL-3.0" class="link link-info link-hover">GNU
            GPLv3
        </a>.
    </p>
</div>