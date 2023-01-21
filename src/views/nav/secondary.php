<!-- $arrangedCategory from primary.php  -->
<nav class="navbar is-primary navbar-break-hidden-collapse" role="navigation" aria-label="main navigation">
    <div id="productsCategory" class="navbar-menu">
        <div class="navbar-start mx-auto">
            <?php
            foreach ($arrangedCategory as $value) {
                echo '<a class="navbar-item">' . ucfirst($value) . "</a>";
            }
            ?>
        </div>
    </div>
</nav>