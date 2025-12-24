<?php get_header() ?>

<main class="flex-grow">
    <div class="@container py-16 sm:py-24">
        <div class="flex flex-col gap-10 @[864px]:flex-row @[864px]:items-center">
            <div class="flex flex-col gap-6 @[864px]:justify-center flex-1">
                <div class="flex flex-col gap-4 text-left">
                    <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl"> Digital Product Designer </h1>
                    <h2 class="text-base font-normal leading-normal text-subtle-text-light dark:text-subtle-text-dark"> I create intuitive and beautiful user experiences. Passionate about solving complex problems through clean code and user-centric design. </h2>
                </div>
                <div class="flex">
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-text-light text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
                        <span class="truncate">View My Work</span>
                    </button>
                </div>
            </div>
            <div class="w-full flex-1 bg-center bg-no-repeat aspect-square bg-cover rounded-xl @[480px]:h-auto @[480px]:min-w-[400px] @[864px]:w-full" data-alt="Abstract vibrant geometric shapes on a light background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEyYbIZHGLcWFlIRuu4QmF5JA-iMFIzu0j0n82pOCdIVAWcq8dLm_cvffVqBTTLrpO_oJnl_quBCjcG5ZRpJIxWuM8t4ZSZlsW633l7X36NsQEa8jKuiD-TuuSGxoGKoM8pHj9fTkd96TWtnj25-4M9oiFbyaX3Ctt3K2Z4FwbPGncHitZQ2jFw4a7ss_2CUiImlL3cnlEYwZhsP2GX_uBf9X6iFQj2Rxi6vGihkt8GeFnbgkyWvvX85N8lUrSiz7PDsai-SIT8QKf");'></div>
        </div>
    </div>

    <?php
    $post_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
    ]);
    if ($post_query->have_posts()) {
    ?>




        <section class="py-16 sm:py-24 border-t border-gray-200 dark:border-gray-800">
            <div class="flex flex-col gap-8">
                <h2 class="text-3xl font-bold text-center tracking-[-0.02em]">Recent Blog Posts</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <?php
                    while ($post_query->have_posts()) {
                        $post_query->the_post();

                    ?>
                        <div class="flex flex-col gap-4">
                            <p class="text-sm text-subtle-text-light dark:text-subtle-text-dark"><?php echo get_the_time();  ?></p>
                            <h3 class="text-xl font-bold"><?php echo get_the_title(); ?></h3>
                            <p class="text-subtle-text-light dark:text-subtle-text-dark"><?php echo  get_the_excerpt(); ?></p>
                            <a class="font-bold text-primary hover:underline" href="<?php the_permalink(); ?> ">Read More</a>
                        </div>

                    <?php }  ?>

                </div>
                <div class="flex justify-center mt-4">
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-transparent border border-primary text-primary text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary hover:text-text-light transition-colors">
                        <span class="truncate">View More</span>
                    </button>
                </div>
            </div>
        </section>
    <?php

    }
    wp_reset_postdata();
    ?>

    <?php 
    $project_query = new WP_Query([
        'post_type' => 'project',
        'posts_per_page' => 2,
    ] 
    );

    if ($project_query->have_posts()) {
    
    ?>
    <section class="py-16 sm:py-24 border-t border-gray-200 dark:border-gray-800">
        <div class="flex flex-col gap-8">
            <h2 class="text-3xl font-bold text-center tracking-[-0.02em]">Featured Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <?php
                    while ($project_query->have_posts()) {
                        $project_query->the_post();

                    ?>
                <div class="flex flex-col gap-4">
                    <!-- <div class="w-full aspect-[4/3] bg-cover bg-center rounded-lg" data-alt="A clean dashboard user interface design." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDFmotvC11kJezCgDpPq7ewuGiFBBqNw-Slp1tWLGaNmYhkOozuILhzj031AJUltcHw8y-NVGlhKrUM9kEIqgsH1fk0obORFlDmTYGZY6xTPkwAHepESjZvCBHKpJmX6aEXB_l2eQPrZhlhXjrO58A_OPTZHoDRompd-oUYdlOi023norT3HYSI048z8vj4HHIBfy5UY2qrBYSKxYXXQV5FP2g1dtqlset_MtYbZY30-28dg_ROS4BKLtBBuM3JBRZ0gh25oXlu0u_Q");'></div>
                    -->
                    <div><?php the_post_thumbnail(); ?></div>
                     <h3 class="text-xl font-bold"><?php the_title(); ?></h3> 
                    <p class="text-subtle-text-light dark:text-subtle-text-dark"><?php the_excerpt(); ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
    }
    wp_reset_postdata();
    ?>

    <section class="py-16 sm:py-24 border-t border-gray-200 dark:border-gray-800">
        <div class="flex flex-col gap-8">
            <h2 class="text-3xl font-bold text-center tracking-[-0.02em]">Photo Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="aspect-square bg-cover bg-center rounded-lg" data-alt="Minimalist architectural detail with strong shadows." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDijIe5ygPwJzkO2Gp42D1WkCJiCRW3gtqybJUH_NRuoXNNLZa6BNSmrL_uMndkL8vG7bVZw-Nf5RAovQPKjzbYc_8vbZ5GhgWR747lwF23Mbry6Ez6Xt09epU7wWSMvulOgAgG89Q7eimXkBjaTKVtbTi58M0WP4peWTCpVg-kEfZuITPXMm0-A9N9z-Gw9xMEDxqx6gQWV6gKT-rLFiWmjwwyU9pn-SwDU16sqP8BENdj1O_HiR-zt02NIpOlLK0DKN62zS4Wis0y");'></div>
                <div class="aspect-square bg-cover bg-center rounded-lg" data-alt="Abstract shot of colorful textures." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuArVW7wy5341RV1PwaQ0bXxwRbILBSYCG4goYR_81Tc_EHLxRHp9dl1XgHhBhzpwAw0653IKUSRe5mWUwUyOB-yPqsxWWgRopxJUReISabkpUTnj36aLm3HK-2fo02ZivnBmbRjDvWK7VKEa6yKqx265bKwRnNI63bujMYI8q_t-rf6WV9k5rIs7HaUtU2CVu5VHVE_iQiQph4Tq5fd8-zThfuEahMblu4TnanKPLfYszDBbA6io7RjtmaH4MACTOFYXt1Th-6psmxe");'></div>
                <div class="aspect-square bg-cover bg-center rounded-lg" data-alt="A tranquil landscape with misty mountains." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAGVyBtfZ7FOHHxILiED3sT6ztG2uK5vGSo0kYha1OkAx9QqEDaSUF8qE37wXrF5O4Egvzd1riCMfdHAt0YswP-V2PaxA9f13xlsCIqv-AM-OVKO1FdUrGG7B7PHXBWD3U1xYeOhQl4FrqsbKDKsG_7mGOtGDuNh8TaQAMi3CwaMBeJqEuAgMGoYoasCXNPc1akjq0zreu-msixhEY5Pqo8TRTKnS__bb0fdUQMSLRmLXMwNT0zQeGaVQlyiwjdycoanOAFKE-wvJEV");'></div>
                <div class="aspect-square bg-cover bg-center rounded-lg" data-alt="A vibrant street art mural on a brick wall." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC2PphbHakon-w2KavAdSswoC_Gb-EI0qRg5bP-rnIEpKw73ZBJKVw7sTTo8cIlHDiVuGDJPpZIEq9eAvIOolbWBwpdna3pR6yyXY-kVnFw6F1oxySvMdaAw2AFpp3WPBnkbcR9GGFO57egD-zsxkFD7AO1HTiHJbPEGi2xCftTZuQsDIqr4TcbFNMJYyd47SXRK0DMuIXgVnUhT9vSaDx7PA8Q2X9iqcn2OB-CPWjCzDhJxX8K51xLxMpG6fpMDGKp3IoC-u6M0KSw");'></div>
                <div class="aspect-square bg-cover bg-center rounded-lg" data-alt="Close-up of a dew-covered leaf." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDHaOuZIphLiAb6AymIaTc8tKdv-03PTV_Vac_OyDeABxpBCS_Z9mWCEPAxHCXRVfkxAdeqT2pDmUFkrb_AP_HAeZl5a3-lc06-bHcgq9rX9RXrUtEuoMeowgITHEEqeD9boUqe6ZQyyZQvhNYL0sWP6r0nXyHVsm_Hbc24_2aqhvnSxd1SgJPC77FZdTns_xAlbcupg86hO8ogi9BqHfRInaWfuvymDwpyZacSoyqlpyOrju3adDQEzMgiOB_28XlrnYYZxNFrVCvj");'></div>
                <div class="aspect-square bg-cover bg-center rounded-lg" data-alt="A bird's eye view of a winding coastal road." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCy1dDkKx27KkVGw2ptO_x9aJOVlkXer8IkeDeMZJmVJdBvx0Ns1BJP56FQiO4Ey8hdsT1i8CTJbaSlSm14HCd0nmm6PCCXEHZkUlpm29_9RJe24GhwRtKAAqEVBXR23nGiYhAEKY0wLZmaAb_JkErbXqT8FbVZQDPxcKB6ke68luZycCZd7dLXwWBqX1QYzrFVAG72SfB5JKVw0aBUOzJn71WpnfjATJbd84CBAluwgrif_ulQTxpc-NGWEnrSEZHSvY4aoJ1YxinO");'></div>
            </div>
        </div>
    </section>

    <?php
    // $post_query = new WP_Query([
    //     'post_type' => 'post',
    //     'posts_per_page' => 3,
    // ]);
    // if ($post_query->have_posts()) {
    //     while ($post_query->have_posts()) {
    //         $post_query->the_post();
    //         echo the_title();
    //         echo the_content();
    //     }
    // } else {
    //     echo 'no post found';
    // }
    // wp_reset_postdata();
    ?>

</main>



<?php get_footer() ?>