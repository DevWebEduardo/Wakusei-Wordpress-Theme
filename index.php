<?php get_header(); ?>
    <main class="w-full grid 2xl:grid-cols-12">
        <?php get_sidebar(); ?>
            <section class="2xl:col-start-4 2xl:col-end-12">
                <!-- Home Banner -->
                <section class="flex flex-col justify-center items-center w-full h-96 index-bg text-xl xs:text-2xl sm:text-3xl md:text-4xl 2xl:text-5xl">
                    <p class="mx-14 mt-60 p-4 index-bg-color rounded text-center text-orange-300 ">Plan your next destination with Wakusei</p>
                </section>
                <!-- Promotion Cards -->
                <section class="mx-2 lg:mx-4 mt-4 mb-8 2xl:mb-16 2xl:mt-8 2xl:mx-0">
                    <div class="ad-1 h-48 w-full"></div>
                    <div class="py-6 md:py-8 flex bg-gray-200 text-center flex-col justify-center items-center">
                        <p class="w-full px-10 font-medium text-lg xl:text-xl 2xl:text-2xl">
                            Our search services provide valuable information about popular destinations, attractions, and recommendations. <br>
                        </p>
                        <a href="/category/?category_name=destinations">
                            <Button class="flex bg-emerald-300 rounded font-medium px-4 py-2 mt-1 md:mt-3 text-sm md:text-lg lg:text-xl duration-500 hover:drop-shadow-[0_3.2px_3.2px_rgba(0,0,0,0.3)]">Destination Available</Button>
                        </a>
                    </div>
                    <div class="ad-2 h-48 mt-3 w-full"></div>      
                    <div class="py-6 md:py-8 flex bg-gray-200 flex-col justify-center items-center text-center">
                        <p class="w-full px-10 font-medium text-lg xl:text-xl 2xl:text-2xl">
                            Browse through a wide range of accommodations tailored to your preferences and budget.
                        </p>
                        <a href="/category/?category_name=booking">
                            <Button class="flex bg-emerald-300 rounded px-4 py-2 font-medium mt-1 md:mt-3 text-sm md:text-lg lg:text-xl duration-500 hover:drop-shadow-[0_3.2px_3.2px_rgba(0,0,0,0.3)]">Booking</Button>
                        </a>
                    </div>
                    <div class="ad-3 h-48 ad-bg-3 mt-3 w-full"></div>
                    <div class="py-6 md:py-8 flex flex-col bg-gray-200 justify-center items-center text-center">
                        <p class="w-full px-10 font-medium text-lg xl:text-xl 2xl:text-2xl">
                            Immerse yourself in guided tours, sightseeing adventures, and unforgettable experiences. 
                        </p>
                        <a href="/category/?category_name=tour-and-activities">
                            <Button class="flex bg-emerald-300 font-medium rounded px-4 py-2 mt-1 md:mt-3 text-sm md:text-lg lg:text-xl duration-500 hover:drop-shadow-[0_3.2px_3.2px_rgba(0,0,0,0.3)]">Tour and Activity Aggregators</Button>
                        </a>
                    </div>
                </section>
                <!-- Index Feed -->
                <section class="flex w-full items-center justify-center flex-wrap bg-slate-600 py-8 2xl:py-0 2xl:bg-slate-300">
                    <?php 
                        if(have_posts()) : 
                            while(have_posts()): the_post();
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
                <!-- Testimonial -->
                <section class="flex flex-wrap justify-center items-center pt-6 2xl:mt-10 2xl:my-0 2xl:bg-slate-300">
                    <p class="text-center w-full text-3xl text-slate-800 font-medium pb-12 2xl:hidden">Hour Clients Opnions</p>
                    <div class="max-w-md mx-2 py-4 px-8 bg-gray-200 shadow-lg rounded-lg my-8">
                        <div class="flex justify-center md:justify-end -mt-16">
                            <img class="w-20 h-20 object-cover rounded-full border-2 border-teal-600" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                        </div>
                        <div>
                            <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                        </div>
                        <div class="flex justify-end mt-4">
                            <a href="#" class="text-xl font-medium text-teal-600">John Doe</a>
                        </div>
                    </div>

                    <div class="max-w-md mx-2 py-4 px-8 bg-gray-200 shadow-lg rounded-lg my-8">
                        <div class="flex justify-center md:justify-end -mt-16">
                            <img class="w-20 h-20 object-cover rounded-full border-2 border-teal-600" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                        </div>
                        <div>
                            <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                        </div>
                        <div class="flex justify-end mt-4">
                            <a href="#" class="text-xl font-medium text-teal-600">John Doe</a>
                        </div>
                    </div>

                    <div class="max-w-md mx-2 py-4 px-8 bg-gray-200 shadow-lg rounded-lg my-8 md:my-14">
                        <div class="flex justify-center md:justify-end -mt-16">
                            <img class="w-20 h-20 object-cover rounded-full border-2 border-teal-600" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                        </div>
                        <div>
                            <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                        </div>
                        <div class="flex justify-end mt-4">
                            <a href="#" class="text-xl font-medium text-teal-600">John Doe</a>
                        </div>
                    </div>

                </section>
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

