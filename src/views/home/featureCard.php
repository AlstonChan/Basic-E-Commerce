<div
     class="join join-vertical w-fit odd:justify-self-end shadow-xl hover:scale-105 ease-in-out duration-150">
    <a
       class="card card-small max-w-96 bg-base-300 rounded-b-none h-full"
       href="/products?id=<?php echo $topProducts[$order]['id']; ?>">
        <figure>
            <img
                 src="<?php echo $topProducts[$order]['thumbnail']; ?>"
                 alt="<?php echo $topProducts[$order]['title']; ?>"
                 class="aspect-video object-cover">
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
            <p>
                <?php echo $topProducts[$order]['description']; ?>
            </p>
            <div class="card-actions">
                <div class="badge badge-outline">
                    <?php echo $topProducts[$order]['category']; ?>
                </div>
            </div>
        </div>
    </a>
    <a class="btn btn-primary w-full rounded-t-none">
        Add to Cart
    </a>
</div>