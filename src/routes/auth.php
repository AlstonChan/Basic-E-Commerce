<?php

$page = $params['type'] === "login" ? "Log in" : "Sign Up";
$actionPath = "/auth/action/" . $params['type'];

require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/head.php"

?>

<body>
    <section class="section" style="width:100vw; height:100vh; overflow-x:hidden; overflow:auto;">
        <svg class="background--custom" id="demo" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="path-auth" fill="#FFFF00" fill-opacity="0.7" d="M-100 -100L200 -100L200 50L-100 50Z" style="animation: path0 5s linear infinite alternate;" />
            <path class="path-auth" fill="#00FFFF" fill-opacity="0.7" d="M-100 -100L200 -100L200 50L-100 50Z" style="animation: path1 12.5s linear infinite alternate;" />
            <path class="path-auth" fill="#FF00FF" fill-opacity="0.2" d="M-100 -100L200 -100L200 20L-100 20Z" style="animation: path2 30s linear infinite alternate;" />
        </svg>
        <div class="container">
            <div class="container custom-box">
                <div class="custom-box-auth columnCard-info py-3 px-5">
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

                    <form action="<?php echo $actionPath; ?>" autocomplete="on" method="post">
                        <?php

                        if ($params['type'] === 'login') {
                            require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/auth/login.php";
                        } else {
                            require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/auth/signup.php";
                        }

                        ?>

                        <div class="field mt-2">
                            <p class="control">
                                <button class="button is-success" type="submit" name="auth_type" value="<?php echo $params['type'] ?>">
                                    <?php echo $params['type'] === 'login' ? 'Log In' : 'Sign Up' ?>
                                </button>
                            </p>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
</body>

</html>