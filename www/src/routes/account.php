<?php $page = "Account" ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/head.php" ?>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/primary.php" ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/nav/secondary.php" ?>

    <article class="section wide-widescreen">
        <p class="title is-2 has-text-centered has-text-weight-bold">
            Account
        </p>
        <div class="container is-max-desktop is-size-5">
            <div class="notification is-primary">
                <p class="title is-4 has-text-centered has-text-weight-bold">
                    Your account info
                </p>

                <hr class="dropdown-divider">

                <span class="is-size-5"> User ID:</span> <span class='has-text-weight-bold'><?php echo $_SESSION["user_id"] ?></span>
                <br>
                <span class="is-size-5"> Username:</span> <span class='has-text-weight-bold'><?php echo $_SESSION["username"] ?></span>
                <br>
                <span class="is-size-5"> Email:</span> <span class='has-text-weight-bold'><?php echo $_SESSION["email"] ?></span>
            </div>
        </div>

    </article>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/footer.php" ?>
</body>

</html>