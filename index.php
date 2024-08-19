<?php
include_once __DIR__ . '/src/layouts/header.php';
?>

<!-- About Us Content -->
<section class="h-auto max-w-screen-xl px-6 mx-auto my-24 xl:px-0">
    <h2 class="text-center heading-h2 text-primary">About</h2>
    <h2 class="mb-4 text-center uppercase heading-h2">
        WELCOME TO M SHIP MANAGEMENT
    </h2>
    <p class="mt-6 text-base leading-relaxed">
        M SHIP MANAGEMENT is a limited liability company established in 2013 that offers integrated seafarers’
        replacement and recruitment services, providing our customers with all kinds of crew management.
    </p>
    <p class="mt-4 text-base leading-relaxed">
        Our company, accredited by the Department of Marine Administration (DMA), aims to provide long-term value to
        domestic and overseas customers through continuous investment and innovation in human resources capital in
        Myanmar. Our core business values are “People-oriented; best service; customer foremost; and integrity first.”
        We operate with a creditable and mutually beneficial servicing concept, striving to provide optimum interest to
        our valued clients and recognition in the field.
    </p>
    <p class="mt-4 text-base leading-relaxed">
        Since incorporation in 2013, we have established good rapport with clients both domestically and overseas. We
        provide full set, half set, and ad-hoc Myanmar seafarers to clients on various types of vessels, including Bulk
        Carrier, General Cargo, Oil/Chemical Tanker, and Oil Tanker. Our portfolio currently includes 45 vessels and
        more than 234 seafarers onboard.
    </p>
    <p class="mt-4 text-base leading-relaxed">
        Our company comprises six departments: QAS Dept, Education and Training Dept, Crewing Dept, Certification Dept,
        Accounting Dept, and HR & Admin Dept. Together, they form a dynamic and professional team with a strong
        servicing attitude, responsive and efficient management skills. Notably, 90% of the top management personnel are
        ocean-going Master Mariners and Chief Engineers, experienced in both ship and shore management. Key executive
        personnel hold degrees or higher qualifications, with some having overseas education and work backgrounds,
        enabling the team to offer sincere servicing, professional skills, and proficient English.
    </p>
    <p class="mt-4 text-base leading-relaxed">
        With these resources, we effectively implement recruitment, assessment, training, management, and other
        crewing-related activities to ensure optimum service for each customer.
    </p>
    <p class="mt-4 text-base leading-relaxed">
        Our focus is on training seafarers' professional skills and cultivating safety management. To maintain high
        standards, we conduct strict and systematic pre-joining briefings and tailored pre-joining education to meet
        individual customer needs. This education enhances seafarers’ operational skills, foreign language proficiency,
        professionalism, safety awareness, teamwork, and discipline.
    </p>

    <div class="grid gap-8 mt-12 md:grid-cols-2">
        <!-- Vision Section -->
        <div class="flex flex-col items-center h-auto p-6 shadow-blur rounded-3xl md:p-8">
            <div class="flex justify-center mb-6">
                <img src="/dist/images/svg/vision.svg" alt="vision eye svg" class="w-[63px] h-[63px]">
            </div>
            <p class="mb-4 text-xl font-semibold text-center">Our Vision</p>
            <p class="text-base leading-relaxed text-center">
                To be a leading crew management company and a world-class standard crew management company in Myanmar
                while exploring opportunities in all marine-related businesses.
            </p>
        </div>

        <!-- Mission Section -->
        <div class="flex flex-col items-center h-auto p-6 shadow-blur rounded-3xl md:p-8">
            <div class="flex justify-center mb-6">
                <img src="/dist/images/svg/mission.svg" alt="mission image" class="w-[63px] h-[63px]" />
            </div>
            <p class="mb-4 text-xl font-semibold text-center">Our Mission</p>
            <ul class="text-base leading-relaxed list-disc list-inside">
                <li>M ship company mission is our services are in alignment with needs and expectations of customers and
                    interested parties.</li>
                <li>To provide high quality customer services to all of our clients.</li>
                <li>To invest in our customers to provide better service and company growth.</li>
                <li>The protection of the seafarers' rights in accordance with the MLC 2006.</li>
                <li>To provide safety as a top priority in assuring safe work procedures for our crew while fulfilling
                    their career aspirations.</li>
            </ul>
        </div>
    </div>

    <div class="flex justify-center mt-12">
        <img src="/dist/images/absq.png" alt="ABSQ Image" />
    </div>

</section>

<!-- Services Content -->
<section class="mt-16 bg-[#F4F4F4] py-[60px]">
    <div class="h-auto max-w-screen-xl px-6 mx-auto xl:px-0">
        <h2 class="text-center heading-h2">Our Services</h2>
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
                <h3 class="text-center uppercase heading-h3">Ship Management</h3>
                <p class="mt-5 text-base">
                    <?= str_limit($text); ?>
                </p>
            </div>
            <div class="flex flex-col items-center p-6">
                <div class="flex justify-center mb-3">
                    <img src="/dist/images/svg/tech_manage.svg" alt="TECH MANAGE SVG" class="w-[105px] h-auto">
                </div>
                <h3 class="text-center uppercase heading-h3">Technical Management</h3>
                <p class="mt-5 text-base">
                    <?= str_limit($text); ?>
                </p>
            </div>
            <div class="flex flex-col items-center p-6">
                <div class="flex justify-center mb-3">
                    <img src="/dist/images/svg/crew.svg" alt="CREW SVG" class="w-[105px] h-auto">
                </div>
                <h3 class="text-center uppercase heading-h3">Crew Management</h3>
                <p class="mt-5 text-base">
                    <?= str_limit($text); ?>
                </p>
            </div>
        </div>
        <div class="flex justify-center mt-12 mb-5">
            <a href="/services.php" class="font-semibold capitalize text-secondary text-extra-xl">learn more <img
                    src="/dist/images/svg/arrow_left.svg" alt="ARROW LEFT SVG"
                    class="inline-block ms-4 w-[30px] h-[30px]"></a>
        </div>
    </div>
</section>


<?php
include_once __DIR__ . '/src/layouts/footer.php';
?>