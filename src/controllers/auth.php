<?php

$page = $params['type'] === "login" ? "Log in" : "Sign Up";

require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/head.php"

?>

<body>
    <section class="section is-large">
        <svg class="background--custom" id="demo" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="path-auth" fill="#FFFF00" fill-opacity="0.7" d="M-100 -100L200 -100L200 50L-100 50Z" style="animation: path0 5s linear infinite alternate;" />
            <path class="path-auth" fill="#00FFFF" fill-opacity="0.7" d="M-100 -100L200 -100L200 50L-100 50Z" style="animation: path1 12.5s linear infinite alternate;" />
            <path class="path-auth" fill="#FF00FF" fill-opacity="0.2" d="M-100 -100L200 -100L200 20L-100 20Z" style="animation: path2 30s linear infinite alternate;" />
        </svg>
        <div class="container">
            <div class="container" style="width:fit-content">
                <div class="custom-box-auth columnCard-info p-3">
                    <figure class="mx-auto my-3" style="width:fit-content">
                        <a href="/">
                            <img src="/assets/logo.svg" width="224" height="56" style="vertical-align:middle">
                        </a>
                    </figure>

                    <h1 class="title has-text-centered has-text-weight-bold">
                        <?php echo $params['type'] === 'login' ? 'Welcome back !' : 'Create a new account' ?>
                    </h1>
                    <h2 class="subtitle has-text-centered">
                        <?php echo $params['type'] === 'login' ? 'User log In' : 'Sign up new account' ?>
                    </h2>
                    <?php

                    if ($params['type'] === 'login') {
                        require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/views/auth/login.php";
                    } else {
                        require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/views/auth/signup.php";
                    }

                    ?>

                </div>
            </div>
        </div>
    </section>
</body>

</html>