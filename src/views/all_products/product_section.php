<section class="section has-text-left">
    <h1 class="title is-capitalized"><?php echo $arrangedProductsCategory[$index]; ?> </h1>
    <div class="container wide-widescreen">
        <div class="grid-product">
            <?php foreach ($productsData['products'] as $value) : ?>
                <?php if ($value["category"] === $arrangedProductsCategory[$index]) : ?>
                    <a href="/products?id=<?php echo $value["id"]; ?>">
                        <div class="column homeCard" style="cursor:pointer;">
                            <div class="card">
                                <div class="card-image">
                                    <figure style="height: 200px" class="image">
                                        <img style="height: 100%; object-fit:cover" src=" <?php echo $value["thumbnail"]; ?>" style="border-radius:4px">
                                    </figure>
                                </div>
                                <div class="card-content px-3 py-2 is-capitalized">
                                    <p class="title is-size-4 mt-2 mb-5">
                                        <?php echo $value["title"]; ?>
                                    </p>
                                    <p class="subtitle is-size-6">
                                        <?php echo $value["brand"]; ?>
                                    </p>
                                    <p class="subtitle is-size-6 has-text-weight-bold">
                                        USD <?php echo $value["price"]; ?>
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