<?php

$file = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/testimonials.json';
$data = json_decode(file_get_contents($file), true);
?>


<section class="mb-16 mt-12">
    <h2 class="text-2xl md:text-4xl font-bold text-center mb-2">
       Testimonials
    </h2>
    <p class="text-lg md:text-xl text-center">
        What people have said about us
    </p>
    <div class="grid grid-cols-2 min-[1180px]:grid-cols-4 mt-10 min-[1180px]:gap-8 px-5 w-fit mx-auto max-w-3xl min-[1180px]:max-w-[1400px]">
        <div class="flex flex-col col-start-1 min-[1180px]:col-start-2 row-start-1 col-span-2 w-fit">
            <?php
            $index = 2;
            $value = $data[2];
            require __DIR__ . '/testimonialCard.php';
            unset($index);
            ?>
            <div class="flex gap-4 sm:gap-8">
                <?php
                $value = $data[3];
                require __DIR__ . '/testimonialCard.php';
                $value = $data[4];
                require __DIR__ . '/testimonialCard.php';
                ?>
            </div>
        </div>
        <div class="flex flex-col col-start-1 row-start-2 min-[1180px]:row-start-1 col-span-1 w-fit mr-2 sm:mr-4 min-[1180px]:mr-0">
            <?php
            $value = $data[0];
            require __DIR__ . '/testimonialCard.php';
            $value = $data[1];
            require __DIR__ . '/testimonialCard.php';
            ?>
        </div>
        <div class="flex flex-col col-start-2 min-[1180px]:col-start-4 row-start-2 min-[1180px]:row-start-1 col-span-1 w-fit ml-2 sm:ml-4 min-[1180px]:ml-0">
            <?php
            $value = $data[5];
            require __DIR__ . '/testimonialCard.php';
            $value = $data[6];
            require __DIR__ . '/testimonialCard.php';
            ?>
        </div>
    </div>
</section>