<?php

$page_is_all = false;
if (isset($page_type) && $page_type === 'all') {
    $page_is_all = true;
    $currentCategory = $arrangedProductsCategory[$index];
}
?>

<section class="px-6 max-w-7xl mx-auto mt-8">
    <?php if ($page_is_all): ?>
        <h2 class="text-lg md:text-2xl font-bold mb-3 capitalize">
            <?php echo $arrangedProductsCategory[$index]; ?> 
        </h2>
    <?php endif; ?>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php foreach ($productsData['products'] as $product): ?>
            <?php if ($product['category'] === $currentCategory): ?>
                <div class="join join-vertical w-fit odd:justify-self-end shadow-xl hover:scale-105 ease-in-out duration-150">
                <a 
                    class="card card-compact bg-base-300 w-fit rounded-b-none h-full"
                    href="/products?id=<?php echo $product['id']; ?>"
                >
                    <figure>
                        <img 
                            src="<?php echo $product['thumbnail']; ?>" 
                            alt="<?php echo $product['title']; ?>" 
                            class="aspect-video object-cover"
                        />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title inline-block capitalize">
                            <?php echo $product['title']; ?>
                        </h2>
                        <?php if (!$page_is_all): ?>
                            <p class="mb-3">
                                <?php echo $product['description']; ?>
                            </p>
                        <?php endif; ?>
                        <div class="badge badge-accent">
                                <?php echo $product['brand']; ?>
                        </div>
                        <p class="text-lg text-info mt-auto w-fit h-fit flex-grow-0">
                            <strong>
                                $ <?php echo $product['price']; ?>
                                <?php if (!$page_is_all): ?>
                                |
                                <small class="text-sky-600">
                                Stock left:
                                    <?php echo $product['stock']; ?>
                                </small>
                                <?php endif; ?>
                            </strong>
                        </p>
                    </div>
                </a>
                <a class="btn btn-primary w-full rounded-t-none">
                    Add to Cart
                </a>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>