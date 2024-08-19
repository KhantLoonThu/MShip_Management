<footer class="pt-[50px]">
    <!-- upper footer informations -->
    <section class="h-auto max-w-screen-xl px-6 mx-auto mb-10 xl:px-0">
        <div class="grid w-full gap-8 lg:grid-cols-3">
            <div class="flex flex-col items-center">
                <div>
                    <img src="/dist/images/logo.png" alt="LOGO Image" class="w-[85px] h-[85px]">
                </div>
                <span class="font-semibold text-center uppercase text-extra-xl text-lightGray">M ship management</span>
            </div>
            <div class="mx-auto">
                <h2 class="text-3xl font-normal capitalize">Contact us</h2>
                <p class="text-[12px]">
                    We have a dedicated support team <br> ready to answer your questions.
                </p>
            </div>
            <div class="w-auto mx-auto xl:w-full xl:mx-0">
                <div class="flex items-center mb-2">
                    <img src="/dist/images/svg/phone.svg" alt="PHONE SVG" class="me-2">
                    <a href="tel:+95-95199716" class="text-sm md:text-base">+95-95199716</a>
                </div>
                <div class="flex items-center mb-2">
                    <img src="/dist/images/svg/phone.svg" alt="PHONE SVG" class="me-2">
                    <a href="tel:+95-785199716" class="text-sm md:text-base">+95-785199716</a>
                </div>
                <div class="flex items-center mb-2">
                    <img src="/dist/images/svg/mail.svg" alt="MAIL SVG" class="me-2">
                    <a href="mailto:hr.mshipnamagement@gmail.com" class="text-sm md:text-base">hr.mshipnamagement@gmail.com</a>
                </div>
                <div class="flex items-center mb-2">
                    <img src="/dist/images/svg/mail.svg" alt="MAIL SVG" class="me-2">
                    <a href="mailto:crew@mshipmanagement.com" class="text-sm md:text-base">crew@mshipmanagement.com</a>
                </div>
            </div>
        </div>
    </section>

    <!-- copyright section -->
    <section class="text-center capitalize py-[15px] px-6 border-t-2 xl:px-0 border-t-[#F4F4F4]">
        <span class="text-lightGray text-[14px] md:text-base">All Rights Reserved 2024 M Ship Management</span>
    </section>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            // Toggle the 'hidden' class to show/hide the mobile menu
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
</body>

</html>