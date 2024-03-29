<!-- $arrangedProductsCategory from primary.php  -->
<nav class="navbar bg-base-300 justify-center mt-2 hidden md:flex z-0"
     role="navigation"
     aria-label="main navigation">
    <div id="productsCategory" class="navbar-center">
        <ul class="menu menu-horizontal">
            <?php foreach ($arrangedProductsCategory as $value) { ?>
                <li>
                    <a href="<?php echo "/products/{$value}"; ?>" class="
                    <?php if ($page === $value) {
                        echo 'active';
                    } ?>">
                        <?php echo ucfirst($value); ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>