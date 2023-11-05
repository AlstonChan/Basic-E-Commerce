<?php

$file =
    $_SERVER['DOCUMENT_ROOT'] . '/public/assets/social-media/social_media.json';
$rawData = json_decode(file_get_contents($file), true);

$data = $rawData['social-media'];
?>

<footer class="footer">
    <div class="container">
        <div class="columns">
            <div class="column">
                <ul>
                    <li class="title is-size-6 is-uppercase has-text-weight-bold">CUSTOMER SERVICE</li>

                    <li><a>Help Centre</a></li>
                    <li><a>How To Buy</a></li>
                    <li><a>How To Sell</a></li>
                    <li><a>SHOP Guarantee</a></li>
                    <li><a>SHOP Free Shipping Program</a></li>
                    <li><a>Return & Refund</a></li>
                    <li><a>Contact Us</a></li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li class="title is-size-6 is-uppercase has-text-weight-bold">BOUT SHOP</li>

                    <li><a>About Us</a></li>
                    <li><a>SHOP Careers</a></li>
                    <li><a>SHOP Policies</a></li>
                    <li><a>Privacy Policy</a></li>
                    <li><a>SHOP Mall</a></li>
                    <li><a>Seller Centre</a></li>
                    <li><a>Shocking Sale</a></li>
                    <li><a>Media Contact</a></li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li class="title is-size-6 is-uppercase has-text-weight-bold">FOLLOW US</li>

                    <?php foreach ($data as $company): ?>
                        <li class="is-flex">
                            <figure class="image is-48x48">
                                <img src="<?php echo $company[
                                    'thumbnails'
                                ]; ?>">
                            </figure>
                            <p class="ml-2 is-align-self-center is-capitalized has-text-weight-semibold" style="height:100%">
                                <a><?php echo $company['name']; ?></a>
                            </p>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
        <div class="content has-text-centered mt-5 mx-auto is-align-self-center is-justify-content-center" style="width:300px">
            <p>
                <strong>SHOP</strong> by <a href="https://www.chanalston.com">Chan Alston</a>. The source code is licensed
                <a href="https://opensource.org/licenses/GPL-3.0">GNU GPLv3</a>.
            </p>
        </div>
    </div>
</footer>