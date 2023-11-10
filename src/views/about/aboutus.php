<?php
$spotlight = [
    ['title' => 'Fast Delivery', 'icon' => 'delivery-truck'],
    ['title' => 'Secure Transaction', 'icon' => 'bank'],
    ['title' => 'Various Products', 'icon' => 'shopping-bag'],
    ['title' => 'Refund Policy', 'icon' => 'receive-dollars'],
    ['title' => 'Authentic Guarantee', 'icon' => 'double-check'],
    ['title' => '24/7 Customer Service', 'icon' => 'multi-bubble'],
]; ?>

<section class="mb-32 mt-8">
    <h1 class="text-2xl md:text-4xl font-bold text-center mb-10">
        Why
        <span class="underline decoration-4 decoration-sky-800 text-sky-800">SHOP</span>
    </h1>
    <div
         class="max-w-7xl mx-auto grid grid-rows-2 lg:grid-rows-none grid-cols-2 lg:grid-cols-3 gap-5 px-3">
        <?php foreach ($spotlight as $item) { ?>
            <div class="card card-small max-w-96 bg-neutral text-neutral-content">
                <div class="card-body items-center text-center">
                    <i class="iconoir-<?php echo $item['icon']; ?> text-4xl"></i>
                    <h1 class="card-title">
                        <?php echo $item['title']; ?>
                    </h1>
                    <p class="is-size-5">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. At debitis maiores
                        nostrum atque commodi veritatis modi eos, ratione fuga qui.
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<section class="bg-base-300 py-12">
    <div class="max-w-7xl mx-auto px-5">
        <h2 class="text-lg md:text-xl font-bold mb-4">
            SHOP MALAYSIA - AN ONLINE SHOPPING PLATFORM
        </h2>
        <p class="indent-8 text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quis quam cupiditate
            nobis voluptate tempore, quod vel temporibus sint quibusdam magnam omnis veniam soluta
            accusantium quos praesentium perspiciatis libero adipisci accusamus eligendi sequi ea
            velit autem et! Ratione provident doloremque recusandae non vero. Omnis debitis veniam
            nulla minus dicta necessitatibus blanditiis fuga assumenda ipsam cumque eum hic officia
            ab nisi facere nobis quisquam dolorem itaque, dolorum iste. Cumque, nisi dolorem.
            Sapiente mollitia quae molestias facere. Cumque ex fugit cupiditate! Dicta possimus
            eligendi iste blanditiis nemo soluta nam doloribus at cumque. Nobis, ratione?
            Consectetur tempore, laboriosam voluptas repellat quam ipsum accusantium.
        </p>

        <br>

        <p class="indent-8 text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quis quam cupiditate
            nobis voluptate tempore, quod vel temporibus sint quibusdam magnam omnis veniam soluta
            accusantium quos praesentium perspiciatis libero adipisci accusamus eligendi sequi ea
            velit autem et! Ratione provident doloremque recusandae non vero. Omnis debitis veniam
            nulla minus dicta necessitatibus blanditiis fuga assumenda ipsam cumque eum hic officia
            ab nisi facere nobis quisquam dolorem itaque, dolorum iste. Cumque, nisi dolorem.
            Sapiente mollitia quae molestias facere. Cumque ex fugit cupiditate! Dicta possimus
            eligendi iste blanditiis nemo soluta nam doloribus at cumque. Nobis, ratione?
            Consectetur tempore, laboriosam voluptas repellat quam ipsum accusantium.
        </p>
    </div>
</section>