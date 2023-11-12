<!-- <div class="field">
    <label class="label" for="pass_<?php echo $params['type']; ?>">Password</label>
    <p class="control has-icons-left has-icons-right">
        <input class="input"
               type="password"
               placeholder="Password"
               name="pass_<?php echo $params['type']; ?>"
               id="pass_<?php echo $params['type']; ?>">
        <span class="icon is-small is-left">
            <img src="/public/assets/icon/lock.svg" style="vertical-align:middle">
        </span>
        <?php if (null === $inputErrors) { ?>
            <span class="icon is-small is-right">
                <img src="/public/assets/icon/check_green.svg" style="vertical-align:middle">
            </span>
        <?php } ?>
    </p>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/input/error_footer.php'; ?>
    <p class="help"><a href="" class="has-text-weight-bold">Forget Password?</a></p>
</div> -->
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/views/input/input_base.php';
inputBase('Password', "password", $params['type'], 'password', $inputErrors);

?>