<div class="field">
    <label class="label" for="username_<?php echo $params['type'] ?>">Username</label>
    <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Username" name="username_<?php echo $params['type'] ?>" id="username_<?php echo $params['type'] ?>" value="<?php if (isset($input_value)) {
                                                                                                                                                                        echo $input_value;
                                                                                                                                                                    } ?>">
        <span class="icon is-small is-left">
            <img src="/assets/icon/user.svg" style="vertical-align:middle">
        </span>
        <?php if ($inputErrors === null) : ?>
            <span class="icon is-small is-right">
                <img src="/assets/icon/check_green.svg" style="vertical-align:middle">
            </span>
        <?php endif; ?>
    </p>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/input/error_footer.php"; ?>
</div>