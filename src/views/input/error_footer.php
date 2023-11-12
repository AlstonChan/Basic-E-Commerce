<?php if (isset($inputErrors)) { ?>
    <?php if (is_array($inputErrors)) { ?>
        <?php foreach ($inputErrors as $err) { ?>
            <p class="help help-error">- <?php echo $err; ?></p>
        <?php } ?>
    <?php } elseif (is_string($inputErrors)) { ?>
        <?php if ('NOT_SHOWN' !== $inputErrors) { ?>
            <p class="help help-error">- <?php echo $inputErrors; ?></p>
        <?php } ?>
    <?php } ?>
<?php } ?>