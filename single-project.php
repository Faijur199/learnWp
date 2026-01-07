<?php get_header(); ?>
<main class="flex flex-col gap-12 pt-8">
    <div class="bg-cover bg-center flex flex-col justify-end overflow-hidden rounded-xl min-h-[480px]" data-alt="Abstract hero image for the Acme Corp redesign project, showing vibrant geometric shapes." style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 35%), url("<?php the_post_thumbnail_url(); ?>   ");'>
        <div class="flex p-8">
            <h1 class="text-white tracking-tight text-5xl font-bold leading-tight"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="px-4">
        <?php echo esc_html(get_field('short_description')) ?>  </div>
    <div class="border rounded-xl bg-red-100 dark:bg-background-dark dark:border-gray-700">
        <div class="p-8">

            <div class="mt-8 grid grid-cols-3">
                <div class="flex flex-col gap-1 py-4 pr-2">
                    <p class="text-[#618389] dark:text-gray-400 text-sm font-normal leading-normal">Client</p>
                    <p class="dark:text-white text-sm font-normal leading-normal"><?php echo esc_html(get_field('client_name')); ?></p>
                </div>
                <div class="flex flex-col gap-1 py-4 px-2">
                    <p class="text-[#618389] dark:text-gray-400 text-sm font-normal leading-normal">Role</p>
                    <p class="dark:text-white text-sm font-normal leading-normal"><?php echo esc_html(get_field('role')); ?></p>
                </div>
                <div class="flex flex-col gap-1 py-4 pl-2">
                    <p class="text-[#618389] dark:text-gray-400 text-sm font-normal leading-normal">Year</p>
                    <p class="dark:text-white text-sm font-normal leading-normal"><?php echo esc_html(get_field('year')); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-10 px-4 learnwp-content">
       <?php the_content() ?>
    </div>
    <div class="flex items-center justify-between border-t border-solid border-t-[#dbe4e6] dark:border-gray-700 mt-12 pt-8 px-4">
        <a class="flex items-center gap-2 text-sm font-medium hover:text-primary dark:text-gray-300 dark:hover:text-primary" href="#">
            <span class="material-symbols-outlined">arrow_back</span>
            <span>Previous Project</span>
        </a>
        <a class="flex items-center gap-2 text-sm font-medium hover:text-primary dark:text-gray-300 dark:hover:text-primary" href="#">
            <span>Next Project</span>
            <span class="material-symbols-outlined">arrow_forward</span>
        </a>
    </div>
</main>

<?php get_footer(); ?>