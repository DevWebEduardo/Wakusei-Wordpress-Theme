<?php 
    /* Template Name: Sections */
    get_header(); 
?>
<main class="w-full grid 2xl:grid-cols-12">
        <?php get_sidebar(); ?>
            <section class="2xl:col-start-4 2xl:col-end-12">
                <!-- Index Feed -->
                <section class="w-full flex flex-wrap my-8 md:my-14">
                        <?php
                        $category = get_query_var('category_name'); 
                        $args = array(
                            'category_name' => $category, 
                            'posts_per_page' => -1 
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                            <div class="w-full sm:w-auto sm:max-w-sm bg-gray-200 rounded overflow-hidden shadow-lg m-2">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="w-full" src="<?php the_post_thumbnail(); ?>" alt="thumbnail">
                                </a>
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <p class="text-gray-700 text-base"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
                                </div>
                                <div class="flex justify-center items-center text-center px-6 pt-4 pb-2">
                                <?php 
                                    while(the_category()): 
                                ?>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?php the_category(); ?></span>
                                <?php endwhile; ?>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            else:
                        ?>
                            <div class="flex flex-col w-full justify-center items-center my-16">
                                <p class="w-full text-2xl md:text-4xl 2xl:text-6xl text-center">٩(๑･ิᴗ･ิ)۶٩(･ิᴗ･ิ๑)۶</p>
                                <p class="w-full text-2xl md:text-4xl 2xl:text-6xl text-center">Any post founded</p>
                            </div>
                        <?php
                            endif;
                            wp_reset_postdata(); 
                        ?>
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