<?php
include_once __DIR__ . '/src/layouts/header.php';
?>

<!-- banner -->
<section class="bg-banner h-[350px] bg-center bg-cover relative">
    <div class="absolute top-[50%] left-[50%] -translate-x-[50%]">
        <h2 class="banner-text">Services</h2>
    </div>
</section>

<section class="h-auto max-w-screen-xl px-6 mx-auto my-24 xl:px-0">
    <h2 class="mb-4 capitalize heading-h1 animate-fadeIn">Our Services</h2>
    <p class="mt-6 text-base leading-relaxed animate-fadeIn">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p class="mt-4 text-base leading-relaxed animate-fadeIn">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p class="mt-4 text-base leading-relaxed animate-fadeIn">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p class="mt-4 text-base leading-relaxed animate-fadeIn">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</section>

<section class="mt-16 bg-[#F4F4F4] pt-[20px] pb-[60px]">
    <div class="h-auto max-w-screen-xl px-6 mx-auto xl:px-0">
        <div class="grid gap-8 mt-12 md:grid-cols-2 lg:grid-cols-3">
            <?php
            $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            function str_limit($text, $limit = 245, $end = '...')
            {
                if (strlen($text) <= $limit) {
                    return $text;
                }
                $text = substr($text, 0, $limit);
                return $text . $end;
            }
            ?>
            <div class="flex flex-col items-center p-6">
                <div class="flex justify-center mb-3">
                    <img src="/dist/images/svg/ship.svg" alt="SHIP SVG" class="w-[105px] h-auto">
                </div>
                <h3 class="text-center uppercase heading-h3 animate-fadeIn">Ship Management</h3>
                <p class="mt-5 text-base animate-fadeIn">
                    <?= str_limit($text); ?>
                </p>
            </div>
            <div class="flex flex-col items-center p-6">
                <div class="flex justify-center mb-3">
                    <img src="/dist/images/svg/tech_manage.svg" alt="TECH MANAGE SVG" class="w-[105px] h-auto">
                </div>
                <h3 class="text-center uppercase heading-h3 animate-fadeIn">Technical Management</h3>
                <p class="mt-5 text-base animate-fadeIn">
                    <?= str_limit($text); ?>
                </p>
            </div>
            <div class="flex flex-col items-center p-6">
                <div class="flex justify-center mb-3">
                    <img src="/dist/images/svg/crew.svg" alt="CREW SVG" class="w-[105px] h-auto">
                </div>
                <h3 class="text-center uppercase heading-h3 animate-fadeIn">Crew Management</h3>
                <p class="mt-5 text-base animate-fadeIn">
                    <?= str_limit($text); ?>
                </p>
            </div>
        </div>
    </div>
</section>


<?php
include_once __DIR__ . '/src/layouts/footer.php';
?>