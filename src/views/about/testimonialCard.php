<?php
$is_main = false;

if (isset($index) && $index === 2) {
    $is_main = true;
}
?>

<article class="card <?php echo $is_main
    ? 'max-w-fill'
    : 'max-w-sm'; ?> bg-neutral text-primary-content mb-4 sm:mb-8 flex-1 card-small">
    <div class="card-body">
        <blockquote class="mb-5 font-semibold">
            <p class="<?php echo $is_main ? 'text-xl' : ''; ?>">
                &quot;<?php echo $value['message']; ?>&quot;
            </p>
        </blockquote>
        <div class="flex mt-auto items-center">
            <div class="avatar">
                <div class="w-12 h-12 rounded-full">
                    <img src="<?php echo $value['avatar']; ?>">
                </div>
            </div>
            <div class="ml-4">
                <p>
                    <strong>
                        <?php echo $value['name']; ?>
                    </strong>
                </p>
                <p class="text-slate-300">
                    <small>
                        <?php echo $value['designation']; ?>
                    </small>
                </p>
            </div>
        </div>
    </div>
</article>