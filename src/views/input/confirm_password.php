<!-- <div class="field">
    <label class="label" for="re_pass_<?php echo $params['type']; ?>">Confirm Password</label>
    <p class="control has-icons-left has-icons-right">
        <input class="input"
               type="password"
               placeholder="Re-enter Password"
               name="re_pass_<?php echo $params['type']; ?>"
               id="re_pass_<?php echo $params['type']; ?>">
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
</div> -->
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/views/input/input_base.php';
inputBase('Confirm Password', "re_pass", $params['type'], 'password', $inputErrors);

?>