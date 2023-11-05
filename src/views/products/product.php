<section class="section has-text-left">
    <div class="container wide-widescreen">
        <div class="grid-product">
            <?php foreach ($productsData['products'] as $product): ?>
                <?php if ($product['category'] === $currentCatogory): ?>
                    <a href="/products?id=<?php echo $product['id']; ?>">
                        <div class="column homeCard" style="cursor:pointer;">
                            <div class="card">
                                <div class="card-image">
                                    <figure style="height: 200px" class="image">
                                        <img class="mx-auto" style="height: 100%; object-fit:cover" src=" <?php echo $product[
                                            'thumbnail'
                                        ]; ?>" style="border-radius:4px">
                                    </figure>
                                </div>
                                <div class="card-content px-3 py-2 is-capitalized">
                                    <p class="title is-size-4 mt-2 mb-5">
                                        <?php echo $product['title']; ?>
                                    </p>
                                    <p class="mb-2 subtitle is-size-6">
                                        <?php echo $product['brand']; ?>
                                    </p>
                                    <p class="mb-3"><?php echo $product[
                                        'description'
                                    ]; ?></p>
                                    <p class="subtitle is-size-6 has-text-weight-bold">
                                        USD <?php echo $product[
                                            'price'
                                        ]; ?> | <span style="opacity:0.6">Stock left:<?php echo $product[
     'stock'
 ]; ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>