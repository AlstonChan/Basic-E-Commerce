<div class="join join-vertical w-fit odd:justify-self-end shadow-xl">
    <article class="card card-compact max-w-96 bg-base-300 rounded-b-none h-full">
        <figure>
            <img 
                src="<?php echo $topProducts[$order]['thumbnail']; ?>"
                class="aspect-video object-cover"
            >
        </figure>
        <div class="card-body">
            <h3 class="card-title">
                <?php
                echo $topProducts[$order]['title'];

                if (isset($is_new) && $is_new) {
                    echo '<div class="badge badge-secondary">NEW</div>';
                }
                ?>
            </h3>
            <p class="">
                <?php echo $topProducts[$order]['description']; ?>
            </p>
            <div class="card-actions ">
                <div class="badge badge-outline">
                    <?php echo $topProducts[$order]['category']; ?>
                </div> 
            </div>
            <!-- <div class="buttons is-justify-content-center mt-3">
                <button class="btn btn-primary">
                    <a href="/products?id=<?php echo $topProducts[$order][
                        'id'
                    ]; ?>" style="text-decoration:none">
                        Add to Cart
                    </a>
                </button>
            </div> -->
        </div>
    </article>
    <a class="btn btn-primary w-full rounded-t-none" href="/products?id=<?php echo $topProducts[
        $order
    ]['id']; ?>">
        Add to Cart
    </a>
</div>