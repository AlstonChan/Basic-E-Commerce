<?php

require $_SERVER['DOCUMENT_ROOT'] .
    '/../src/controllers/fetch/fetch_products.php';

foreach ($productsData['products'] as $product) {
    if ($product['id'] === (int) $params['id']) {
        $page = $product['title'];
        $currentProduct = $product;
    }
}

$imgSize = getimagesize($currentProduct['thumbnail']);
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/head.php'; ?>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/primary.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/nav/secondary.php'; ?>
    <section class="mt-8 px-5">
        <div class="max-w-6xl-md flex mx-auto justify-center">
            <div class="aspect-square max-w-sm w-1/3">
                <img 
                    src="<?php echo $currentProduct['thumbnail']; ?>"
                    alt="<?php echo $currentProduct['title']; ?>" 
                    width="<?php echo $imgSize[0]; ?>" 
                    height="<?php echo $imgSize[1]; ?>"
                    class="object-cover w-full h-full rounded-lg"
                >
            </div>
            <div class="w-1/2">
                <div class="content has-background-light py-2 px-5" style="border-radius:8px">
                    <h1 class="text-3xl md:text-5xl font-bold mb-2">
                        <?php echo $currentProduct['title']; ?>
                    </h1>
                    <p class="text-xl md:text-2xl">
                        $ <?php echo $currentProduct['price']; ?>
                    </p>
                    <div class="rating rating-md rating-half my-3">
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <!-- prettier-ignore -->
                            <input 
                                type="radio" 
                                name="rating-10" 
                                class="bg-orange-500 mask mask-star-2 mask-half-<?php echo ($i %
                                    2) +
                                    1; ?>"
                                    disabled="true"
                                    <?php echo (int) (round(
                                        $currentProduct['rating'] * 2,
                                    ) / 2) ===
                                    ($i + 1) / 2
                                        ? 'checked="true"'
                                        : null; ?>
                            />
                        <?php endfor; ?>
                    </div>
                    <p class="mb-3 text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit duis tristique sollicitudin nibh. Senectus et netus et malesuada fames ac turpis.
                    </p>
                    <div class="badge badge-accent">
                         <?php echo $currentProduct['brand']; ?>
                    </div>
                    <form 
                        class="my-6"
                        x-data="{
                            cartNum: 1,
                            validateNum(e) {
                                let val = e.target.value;
                                if (! e.target.value.match(/^\d+$/)) {
                                    val = e.target.value.replace(/[a-z]/gi, '');
                                }

                                if (val <= <?php echo $currentProduct[
                                    'stock'
                                ]; ?>) {
                                    e.target.value = val;
                                } else {
                                    e.target.value = <?php echo $currentProduct[
                                        'stock'
                                    ]; ?>;
                                    val = e.target.value;
                                }
                                cartNum = val;
                                }
                        }"
                    >
                        <div class="flex items-center mb-5">
                            <p class="text-lg">
                                Quantity &nbsp;&nbsp;
                            </p>
                            <input 
                                type="text" 
                                pattern="[0-9]*" 
                                value="1" 
                                class="input input-bordered w-full max-w-[100px]" 
                                min="0"
                                max="<?php echo $currentProduct['stock']; ?>"
                                id="quantity"
                                x-on:input.change="validateNum"
                            />
                            <small class="text-gray-500 text-base ml-3">
                                Stock left: <?php echo $currentProduct[
                                    'stock'
                                ]; ?>
                            </small>
                        </div>
                        <button class="btn btn-secondary">
                            Add to Cart
                            <i class="iconoir-cart text-xl"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/home/services.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/views/footer.php'; ?>
</body>

</html>

<!-- 
                    <form class="buttons mb-5" x-data="{
                        cartNum: 1,
                        validateNum(e) {
                            let val = e.target.value;
                            if (! e.target.value.match(/^\d+$/)) {val = e.target.value.replace(/[a-z]/gi, '');}

                            if (val <= <?php echo $currentProduct[
                                'stock'
                            ]; ?>) {
                                e.target.value = val;
                            } else {
                                e.target.value = <?php echo $currentProduct[
                                    'stock'
                                ]; ?>;
                                val = e.target.value;
                            }
                            cartNum = val;
                        }
                    }">
                        <button type="submit" class="button has-text-weight-bold is-primary m-0 mr-2">Add to Cart</button>
                        <input x-on:change.debounce="(e) => validateNum(e)" class="input" type="text" min="0" max="<?php echo $currentProduct[
                            'stock'
                        ]; ?>" value="1" style="width:auto">
                    </form> -->