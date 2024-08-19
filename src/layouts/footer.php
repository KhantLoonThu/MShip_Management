<footer class="pt-[50px]">
    <!-- upper footer informations -->
    <section class="h-auto max-w-screen-xl px-6 pb-10 mx-auto">
        <div class="grid gap-8 md:grid-cols-3">
            <div class="flex flex-col">
                <div class="flex justify-center">
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
            <div class="mx-auto">
                <div class="flex mb-2">
                    <img src="/dist/images/svg/phone.svg" alt="PHONE SVG" class="">
                    <a href="tel:+95-95199716" class="text-lg">+95-95199716</a>
                </div>
                <div class="flex mb-2">
                    <img src="/dist/images/svg/phone.svg" alt="PHONE SVG" class="">
                    <a href="tel:+95-785199716 " class="text-lg">+95-785199716 </a>
                </div>
                <div class="flex mb-2">
                    <img src="/dist/images/svg/mail.svg" alt="MAIL SVG" class="">
                    <a href="malto:hr.mshipnamagement@gmail.com " class="text-lg">hr.mshipnamagement@gmail.com </a>
                </div>
                <div class="flex mb-2">
                    <img src="/dist/images/svg/mail.svg" alt="MAIL SVG" class="">
                    <a href="malto:crew@mshipmanagement.com" class="text-lg">crew@mshipmanagement.com</a>
                </div>
            </div>
        </div>
    </section>

    <!-- copyright section -->
    <section class="text-center capitalize py-[15px] border-t-2 xl:px-0 border-t-[#F4F4F4]">
        <span class="text-lightGray">All Rights Reserved 2024 M Ship Management</span>
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