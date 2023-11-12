<?php

$page =
    'login' === $params['type']
    ? 'Log In'
    : ('signup' === $params['type']
        ? 'Sign Up'
        : 'Log out');

require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/head.php';
?>

<body>
    <section class="flex flex-col justify-center items-center mt-9 px-6 py-12 lg:px-8">
        <div class="flex justify-center flex-col my-10">
            <a href="/" class="self-center">
                <img src="/public/assets/logo.svg" width="168" height="42">
            </a>
            <h2
                class="mt-3 text-center text-3xl font-bold leading-9 tracking-tight">
                <?php echo 'login' === $params['type']
                    ? 'Log in to your account'
                    : 'Sign up a new account'; ?>
            </h2>
        </div>
        <div class="mx-auto p-10 bg-base-300 rounded-xl w-[450px] shadow-2xl">
            <form action="" autocomplete="on" method="post">
                <?php if ('login' === $params['type']) {
                    require $_SERVER['DOCUMENT_ROOT'] .
                        '/../src/views/auth/login.php';
                } else {
                    require $_SERVER['DOCUMENT_ROOT'] .
                        '/../src/views/auth/signup.php';
                } ?>

                <?php if ('login' === $params['type']) : ?>
                    <div class="flex self-center">
                        <div class="form-control">
                            <label class="label cursor-pointer">
                                <input type="checkbox"
                                       checked="checked"
                                       class="checkbox checkbox-sm mr-2 border-2" />
                                <span class="label-text">Remember me</span>
                            </label>
                        </div>
                        <a href=""
                           class="link link-secondary link-hover ml-auto flex self-center">
                            <strong>Forgot password?</strong>
                        </a>
                    </div>
                <?php endif ?>

                <div class="mt-4">
                    <p class="control">
                        <button class="btn btn-accent w-full"
                                type="submit"
                                name="auth_type"
                                value="<?php echo $params['type']; ?>">
                            <?php echo 'login' === $params['type']
                                ? 'Log In'
                                : 'Sign Up'; ?>
                        </button>
                    </p>
                </div>
            </form>
        </div>
        <p class="mt-10 text-md">
            <?php if ('login' === $params['type']) : ?>
                Don't have an account?
                <a class="link link-secondary link-hover" href="/auth?type=signup">
                    <strong>Sign Up here!</strong>
                </a>
            <?php else : ?>
                Already have an account?
                <a class="link link-secondary link-hover" href="/auth?type=login">
                    <strong>Log in here!</strong>
                </a>
            <?php endif ?>
        </p>
    </section>
</body>

</html>