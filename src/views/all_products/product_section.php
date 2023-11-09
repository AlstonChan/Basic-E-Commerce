<section class="px-6 max-w-7xl mx-auto mt-8">
    <h2 class="text-lg md:text-2xl font-bold mb-3 capitalize">
        <?php echo $arrangedProductsCategory[$index]; ?> 
    </h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php foreach ($productsData['products'] as $value): ?>
            <?php if (
                $value['category'] === $arrangedProductsCategory[$index]
            ): ?>
                <div class="join join-vertical w-fit odd:justify-self-end shadow-xl hover:scale-105 ease-in-out duration-150">
                    <a 
                        class="card card-compact bg-base-300 w-fit rounded-b-none h-full"
                        href="/products?id=<?php echo $value['id']; ?>"
                    >
                        <figure>
                            <img 
                                src="<?php echo $value['thumbnail']; ?>" 
                                alt="<?php echo $value['title']; ?>" 
                                class="aspect-video object-cover"
                            />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title inline-block flex-grow capitalize">
                                <?php echo $value['title']; ?>
                            </h2>
                            <div class="badge badge-accent">
                                 <?php echo $value['brand']; ?>
                            </div>
                            <p class="text-lg text-info mt-auto w-fit h-fit flex-grow-0">
                               <strong>
                                 $ <?php echo $value['price']; ?>
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