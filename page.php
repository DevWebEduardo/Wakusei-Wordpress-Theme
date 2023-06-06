<?php 
    get_header(); 
?>
<main class="w-full grid 2xl:grid-cols-12">
        <?php get_sidebar(); ?>
            <section class="2xl:col-start-4 2xl:col-end-12">
                <!-- Post or Page -->
                <section class="w-full flex flex-wrap mt-12">   
                    <article class="post-container">
                        <?php the_title(); ?>
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