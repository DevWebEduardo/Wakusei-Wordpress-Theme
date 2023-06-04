    <aside class="h-auto bg-orange-400 2xl:fixed 2xl:w-2/12 2xl:justify-center 2xl:h-full 2xl:col-start-0 2xl:col-end-3">
        <a href="" class="hidden 2xl:block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.png" alt="logo" class="lg:w-4/6 2xl:w-3/6 mx-auto lg:my-4 lg:max-w-sm">
        </a>
        <div class="container flex lg:items-center mx-auto">
            <nav class="flex-grow h-auto h-16 sm:h-auto lg:flex w-full lg:justify-between">
                <div class="flex items-center justify-between mx-1 lg:mx-0">
                    <a href="/" class="flex items-center justify-center lg:hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.png" alt="logo" class="h-14 lg:h-auto lg:w-4/6 2xl:w-3/6 mx-auto lg:my-4 lg:max-w-sm">
                        <p class="ml-2 text-2xl">Wakusei</p>
                    </a>
                    <button class="block lg:hidden" id="menu-toggle">
                        <i class="fa-solid fa-bars fa-3x p-1 sm:px-2"></i>
                    </button>
                </div>
                <ul class="hidden h-full flex-grow justify-center py-3 lg:p-0 lg:flex lg:flex-row 2xl:flex-col" id="navbar-default">
                    <a href="/"><li class="flex justify-center items-center h-16 px-20 lg:px-6 hover:bg-orange-300 text-2xl duration-500">Home</li></a>
                    <a href="/destinations"><li class="flex justify-center items-center h-16 px-20 lg:px-6 hover:bg-orange-300 text-2xl duration-500">Destinations</li></a>
                    <a href="/booking"><li class="flex justify-center items-center h-16 px-20 lg:px-6 hover:bg-orange-300 text-2xl duration-500">Booking</li></a>
                    <a href="/tour-and-activities"><li class="flex justify-center items-center h-16 px-20 lg:px-6 hover:bg-orange-300 text-2xl duration-500">Tour and Activities</li></a>
                    <a href="/contact"><li class="flex justify-center items-center h-16 px-20 lg:px-6 hover:bg-orange-300 text-2xl duration-500">Contact</li></a>
                </ul>
            </nav>
        </div>
        <ul class="rounded py-8 bg-orange-300 my-6 mx-6 px-4 justify-center items-center hidden flex-wrap 2xl:flex">
            <li><a href="http://" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.png" alt="facebook" class="m-2 h-14 hover:opacity-80">
            </a></li>
            <li><a href="http://" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.png" alt="twitter" class="mx-2 h-14 hover:opacity-80">
            </a></li>
            <li><a href="http://" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube.png" alt="youtube" class="mx-2 h-14 hover:opacity-80">
            </a></li>
            <li><a href="http://" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.png" alt="instagram" class="mx-2 h-14 hover:opacity-80">
            </a></li>
          </ul>
    </aside>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navbar = document.getElementById('navbar-default');
        menuToggle.addEventListener('click', () => {
            navbar.classList.toggle('hidden');
        });
    </script>