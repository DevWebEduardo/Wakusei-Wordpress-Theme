<?php 
    /*
        Template name: Contact
    */
    get_header(); 
?>
<main class="w-full grid 2xl:grid-cols-12">
        <?php get_sidebar(); ?>
            <section class="2xl:col-start-4 2xl:col-end-12">
                <!-- Post or Page -->
                <section class="block w-full mt-2 mb-2 md:mt-6 md:mb-5 lg:mt-12 lg:mb-10 px-2 pb-10 md:px-4 2xl:pb-0">
                    <p class="w-full text-center p-6 font-medium text-3xl md:text-4xl"><?php the_title(); ?></p>
                    <article class="post-container">
                        <?php the_content(); ?>
                    </article>
                </section>
                <!-- Footer -->
                <section class="w-full hidden 2xl:block mt-16">
                    <p class="pb-2 text-lg flex justify-center text-center items-center w-full">
                        <a href="" class="hover:underline">Terms & Conditions</a>&nbsp;|&nbsp;<a href="" class="hover:underline">Security Policy</a>&nbsp;|&nbsp;<a href="" class="hover:underline">Terms of Use</a>
                    </p>
                    <p class="pb-6 text-lg flex justify-center text-center items-center w-full">
                        Wakusei - All rights reserved
                    </p>
                </section>
            </section>
    </main>
<?php get_footer(); ?>