<?php get_header(); ?>
<main class="w-full max-w-4xl px-6 py-12 md:py-20">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article>
                <!-- HeadlineText -->
                <h1 class="text-[#212529] dark:text-gray-100 text-3xl md:text-5xl font-bold leading-tight tracking-tight text-left pb-4"><?php echo get_the_title(); ?></h1>
                <!-- MetaText -->
                <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal pb-6">By <?php the_author(); ?> • Published on <?php the_date(); ?> • 7 min read</p>
                <!-- ReactionBar -->
                <div class="flex flex-wrap gap-2 border-y border-gray-200 dark:border-gray-700 py-3 mb-8">
                    <button class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <span class="material-symbols-outlined text-gray-600 dark:text-gray-400 text-xl">ios_share</span>
                    </button>
                    <button class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="currentColor" viewbox="0 0 24 24">
                            <path d="M13.6823 10.621L20.8343 2.99996H19.2243L13.0443 9.61L9.18433 2.99996H4.02833L11.4333 13.195L4.02833 21H5.63833L12.0833 14.113L16.1423 21H21.2983L13.6823 10.621ZM12.5533 13.251L11.7513 12.18H6.18233L17.9713 20.008H19.5813L7.79233 4.00196H9.40233L12.5533 13.251Z"></path>
                        </svg>
                    </button>
                    <button class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="currentColor" viewbox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"></path>
                        </svg>
                    </button>
                    <button class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="currentColor" viewbox="0 0 24 24">
                            <path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Images -->
                <div class="w-full mb-8">
                    <div class="w-full overflow-hidden bg-gray-200 dark:bg-gray-700 aspect-[16/9] rounded-lg">
                        <div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Abstract colorful geometric shapes on a light background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBIGavMNk5QFO5VGh799TBp__EVDhlqdh46y7uzopi2i2_6DxCy1eFfo2xwJ92raYNu4hPlLhlTkvdzx1uE0O8Yh9e_0G3jTkpAuq41d2wchFv1UIR5C3hwIwh4e_6JkQ4tHfi7Pq2xk5Wrf7w3b4HDEiICBIt4UbReZmcsfT3zpv5NLV7EhKiQXmcM6lVYDfloxt9-R-wa_S-p6c8wo4iDR2MCDD6a5p-3GDRUjzvF9aVtA9aR3NKGkk_QK-qsu2kprGV9jhCS4p7z");'></div>
                    </div>
                </div>
                <!-- Blog Post Body -->
                <div class="prose prose-lg dark:prose-invert max-w-none text-[#212529] dark:text-gray-200 text-base leading-relaxed space-y-6">
                    <p>Minimalism isn't just an aesthetic; it's a principle. In web design, it's about conveying more by showing less. The goal is to strip away superfluous elements and focus on what's essential, creating a user experience that is both intuitive and beautiful. This approach prioritizes content, enhances readability, and improves site performance.</p>
                    <h2 class="text-2xl font-bold pt-6 text-[#212529] dark:text-gray-100">The Core Principles</h2>
                    <p>At its heart, minimalist design is guided by a few key principles. First, "less is more." Every element on the page must serve a purpose. If it doesn't add value to the user's experience, it's noise. Second is the strategic use of white space, or negative space, which helps to guide the user's eye and create a sense of calm and order.</p>
                    <ul class="list-disc list-inside space-y-2 pl-2">
                        <li>Clarity and focus on content.</li>
                        <li>Simple color palettes, often monochromatic or with a single accent color.</li>
                        <li>Bold, clean typography to establish hierarchy.</li>
                        <li>Intuitive navigation and user flow.</li>
                    </ul>
                    <blockquote class="border-l-4 border-primary pl-4 italic text-gray-600 dark:text-gray-400">
                        "Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take away." – Antoine de Saint-Exupéry
                    </blockquote>
                    <h3 class="text-xl font-bold pt-4 text-[#212529] dark:text-gray-100">Putting it into Practice</h3>
                    <p>To implement minimalism, start by de-cluttering your interface. Question every button, line, and icon. Does it need to be there? Can its function be achieved in a simpler way? Opt for a flat design style, avoiding gradients and drop shadows that can add unnecessary visual complexity. Choose one or two readable fonts and stick to them. A well-chosen sans-serif like Inter or Lato can do wonders for readability and modern appeal.</p>
                    <div class="w-full my-8">
                        <div class="w-full overflow-hidden bg-gray-200 dark:bg-gray-700 aspect-[16/9] rounded-lg">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Clean workspace with a laptop, notebook, and a plant" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0R0R_G0j7s6TUKTwNfdsfs-ibHq1lwVYnA9p3cwQeUGG26NxAxEAQOJ--rQ9E_IZyLgyNz4vSk0-oBtMjWUF7eljzvM65uQbmEXre-6KJi6LQ46pVh77DhZWxZ1hPIEDHt1iRPLOrPgcJ5C8q3fhpDV2x09aFBN85vvO_HFxYh9GttkoYDn4U5mXcIEVhfwzmc1IQmLwsJYxhmEWVO4_KLVVku-PBeJ8AaAydUZuCOWdcA6hNft9BV0WiRahL7RigrJc2sQ0YSs8v");'></div>
                        </div>
                    </div>
                    <p>Ultimately, minimalist design is about respecting the user's attention. By creating a clean, focused, and efficient interface, you not only improve usability but also build trust and communicate professionalism. It's an art form that balances aesthetics with function, proving that simplicity is the ultimate sophistication.</p>
                </div>
            </article>
            <!-- Divider -->
            <hr class="my-12 border-gray-200 dark:border-gray-700" />
            <!-- Author Bio Section -->
            <div class="flex items-start sm:items-center gap-6 rounded-lg bg-background-light dark:bg-background-dark p-6">
                <img class="size-20 sm:size-24 rounded-full object-cover" data-alt="Profile picture of Alex Doe, smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8JLtZJCyc4SRZgnRulEdpbdLL4BUg0B17qVOo6zIXDjyTHUqN6ahcg_7Rvd1QvlN4xTVIvmwcZdShbblhz-6CQdW7bgjlggmatAdECB4GxlUzjDfDbRCCa285Q1oL2a8zGQRPbA5HlwRKtj3dE2S4OwTGgfFRNpEBPKOxd6x8pXzGtuDo0MpMCRCJn_qbbSiN1HpW7yzhkbmQvxn2FMZAUP0SOBhKyB2kSusKEi5Jf5mkOZTQWA5dTMktKHjPjqmLlvdL5Ell-hjx" />
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Written By</p>
                    <h4 class="text-xl font-bold text-[#212529] dark:text-gray-100 mt-1">Alex Doe</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mt-2 leading-relaxed">Alex is a UI/UX designer and front-end developer with a passion for creating clean, intuitive, and beautiful user experiences. When not coding or designing, he enjoys photography and exploring the outdoors.</p>
                </div>
            </div>
    <?php }
    } ?>
</main>
<?php get_footer(); ?>