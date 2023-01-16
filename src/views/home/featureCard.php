<article class="tile is-child notification p-0 homeCard has-text-centered defaultCard">
    <figure class="image">
        <img src="<?php echo $topProducts[$order]["thumbnail"]; ?>" style="border-radius:4px">
    </figure>
    <div class="content px-5 py-3">
        <p class="title mt-2 mb-5">
            <?php echo $topProducts[$order]["title"]; ?>
        </p>
        <p class="subtitle ">
            <?php echo $topProducts[$order]["description"]; ?>
        </p>
        <span class="tag is-info is-capitalized">
            <?php echo $topProducts[$order]["category"]; ?>
        </span>
        <div class="buttons is-justify-content-center mt-3">
            <button class="button has-text-weight-bold is-primary">BUY NOW</button>
            <button class="button has-text-weight-bold is-link">Info</button>
        </div>
    </div>
</article>