<!-- $arrangedProductsCategory from primary.php  -->
<nav class="navbar is-primary navbar-break-hidden-collapse" role="navigation" aria-label="main navigation" style="z-index:0">
    <div id="productsCategory" class="navbar-menu">
        <div class="navbar-start mx-auto">
            <?php foreach ($arrangedProductsCategory as $value) : ?>
                <a href="<?php echo "/products/{$value}"; ?>" class="navbar-item <?php if ($page === $value) echo "is-active" ?>">
                    <?php echo ucfirst($value); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>