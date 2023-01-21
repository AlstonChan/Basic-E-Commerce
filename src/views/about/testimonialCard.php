<article class="tile is-child notification is-primary">
    <div class="media">
        <figure class="media-left">
            <p class="image is-64x64">
                <img src="<?php echo $value["avatar"] ?>">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong><?php echo $value["name"] ?></strong> <small><?php echo $value["designation"] ?></small>
                    <br>
                    <?php echo $value["message"] ?>
                </p>
            </div>
        </div>
    </div>
</article>