<!-- <div class="field">
    <label class="label" for="email_<?php echo $params['type']; ?>">Email</label>
    <p class="control has-icons-left has-icons-right">
        <input class="input"
               type="email"
               placeholder="Email"
               name="email_<?php echo $params['type']; ?>"
               id="email_<?php echo $params['type']; ?>"
               value="<?php if (isset($input_value)) {
                            echo $input_value;
                        } ?>">
        <span class="icon is-small is-left">
            <img src="/public/assets/icon/mail.svg" style="vertical-align:middle">
        </span>
        <?php if (null === $inputErrors) { ?>
            <span class="icon is-small is-right">
                <img src="/public/assets/icon/check_green.svg" style="vertical-align:middle">
            </span>
        <?php } ?>
    </p>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/input/error_footer.php'; ?>
</div> -->
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/views/input/input_base.php';
inputBase('Email Address', "email", $params['type'], 'email', $inputErrors);

?>