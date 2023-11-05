<?php if (isset($inputErrors)): ?>
    <?php if (is_array($inputErrors)): ?>
        <?php foreach ($inputErrors as $err): ?>
            <p class="help help-error">- <?php echo $err; ?></p>
        <?php endforeach; ?>
    <?php elseif (is_string($inputErrors)): ?>
        <?php if ($inputErrors !== 'NOT_SHOWN'): ?>
            <p class="help help-error">- <?php echo $inputErrors; ?></p>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
