<?php
$homepageLink = '/';
$navItem = [
    ['title' => 'Home', 'link' => $homepageLink],
    ['title' => 'About Us', 'link' => $homepageLink . 'about_us'],
    ['title' => 'All Products', 'link' => $homepageLink . 'all_product'],
];

$userItem = [
    ['title' => 'Account', 'link' => $homepageLink . 'account'],
    ['title' => 'Logout', 'link' => $homepageLink . 'auth?type=logout'],
];

function loop_navItem($navItem, $page, $is_dropdown)
{
    $output = '';

    foreach ($navItem as $value) {
        $output .= '<li>';
        $output .=
            '<a href="' .
            $value['link'] .
            '" tabindex="0" class="' .
            ($page === $value['title'] ? 'active' : '') .
            '">';
        $output .= $value['title'];
        $output .= '</a>';
        if ($is_dropdown && $value['title'] === 'All Products') {
            $output .= '<ul>';
            global $arrangedProductsCategory;
            foreach ($arrangedProductsCategory as $product) {
                $output .= '<li>';
                $output .= '<a href="';
                $output .= "/products/{$product}";
                $output .=
                    '" class="' . ($page === $product ? 'active' : '') . '">';
                $output .= ucfirst($product);
                $output .= '</a>';
                $output .= '</li>';
            }
            $output .= '</ul>';
        }
        $output .= '</li>';
    }

    echo $output;
}

require $_SERVER['DOCUMENT_ROOT'] .
    '/../src/controllers/fetch/fetch_products.php';
?>

<nav class="navbar bg-base-100 max-w-screen-2xl mx-auto" aria-label="main navigation">
    <!-- left  -->
    <div class="navbar-start" x-data="{ 
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }
 
                this.$refs.button.focus()
 
                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return
 
                this.open = false
 
                focusAfter && focusAfter.focus()
            } }" 
            x-on:keydown.escape.prevent.stop="close($refs.button)" 
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()" 
            x-id="['dropdown-button']">
        <div class="dropdown md:hidden">
            <button 
                class="btn btn-ghost btn-circle swap swap-rotate" 
                x-ref="button" 
                x-on:click="toggle()"
                :aria-expanded="open" 
                :aria-controls="$id('dropdown-button')" 
                type="button"
                :class="open && 'swap-active' "
            >
                <svg  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 swap-on fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                <i class="iconoir-menu text-xl swap-off fill-current"></i>
            </button>
            <ul 
                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52" 
                :class="open && '!visible !scale-100 !opacity-100' "
                x-ref="panel" 
                x-show="open" 
                x-transition.origin.top.left x-on:click.outside="close($refs.button)" 
                :id="$id('dropdown-button')" 
            >
                <?php loop_navItem($navItem, $page, true); ?>
            </ul>
        </div>
        <ul class="menu menu-horizontal px-1 hidden md:inline-flex">
            <?php loop_navItem($navItem, $page, false); ?>
        </ul>
    </div>

    <!-- middle brand  -->
    <div class="navbar-center">
        <a href="<?php echo $homepageLink; ?>">
            <img src="/public/assets/logo.svg" width="168" height="42" class="logo-img pr-2">
        </a>
    </div>

    <!-- right  -->
    <div class="navbar-end dropdown-end text-center">
        <!-- cart -->
        <div class="dropdown">
            <label tabindex="0" class="btn btn-square btn-outline mr-2">
                <i class="iconoir-cart text-xl"></i>
            </label>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-200 rounded-box w-52">
                <li>Cart is empty</li>
            </ul>
        </div>
        <!-- account logins/signup/details  -->
        <div class="dropdown dropdown-end md:hidden">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <i class="iconoir-user text-3xl"></i>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52">
                <?php if (
                    session_status() === PHP_SESSION_ACTIVE &&
                    isset($_SESSION['user_id'])
                ): ?>
                    <?php foreach ($userItem as $value): ?>
                        <li>
                            <a href="<?php echo $value[
                                'link'
                            ]; ?>" class="dropdown-item">
                                <?php echo $value['title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>
                        <a href="/auth?type=signup">Sign up</a>
                    </li>
                    <li>
                        <a href="/auth?type=login">Log in</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="hidden md:block">
            <?php if (
                session_status() === PHP_SESSION_ACTIVE &&
                isset($_SESSION['user_id'])
            ): ?>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <i class="iconoir-user text-3xl"></i>
                    </label>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52">
                        <?php foreach ($userItem as $value): ?>
                            <li>
                                <a href="<?php echo $value[
                                    'link'
                                ]; ?>" class="dropdown-item">
                                    <?php echo $value['title']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php else: ?>
                <a href="/auth?type=signup" class="btn btn-primary mr-2">
                    <strong>Sign up</strong>
                </a>
                <a href="/auth?type=login" class="btn btn-outline btn-primary mr-2">
                    Log in
                </a>
            <?php endif; ?>
        </div>

    </div>
</nav>