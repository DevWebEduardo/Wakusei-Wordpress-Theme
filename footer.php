    <footer class="flex flex-col justify-center items-center w-full text-white">
      <div class="py-6 bg-slate-600 flex justify-center items-center w-full block 2xl:hidden">
          <ul class="flex justify-center items-center">
            <li><a href="http://" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.png" alt="facebook" class="mx-2 h-14 hover:opacity-80">
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
      </div>
      <p class="py-2 bg-slate-700 text-lg flex justify-center text-center items-center w-full block 2xl:hidden">
        <a href="" class="hover:underline">Terms & Conditions</a>&nbsp;|&nbsp;<a href="" class="hover:underline">Security Policy</a>&nbsp;|&nbsp;<a href="" class="hover:underline">Terms of Use</a>
      </p>
      <p class="py-2 bg-slate-700 text-lg flex justify-center text-center items-center w-full block 2xl:hidden">
        Wakusei - All rights reserved
      </p>
    </footer>
    <section>
      <div id="cookie-notice" class="fixed bottom-0 left-0 w-full p-4 bg-white text-center" style="display: none;">
        <span class="mr-2">This website uses cookies to ensure you get the best experience on our website.</span>
        <a href="/cookie-policy" class="text-green-800 hover:underline">Learn more</a>
        <button id="accept-cookies" class="bg-green-500 text-white ml-2 px-4 py-2 rounded">Accept</button>
      </div>
    </section>
    <script>
        document.getElementById('accept-cookies').addEventListener('click', function() {
          document.getElementById('cookie-notice').style.display = 'none';
          sessionStorage.setItem('cookieConsent', 'true');
        });
        if (sessionStorage.getItem('cookieConsent')) {
          document.getElementById('cookie-notice').style.display = 'none';
        }else{
            document.getElementById('cookie-notice').style.display = 'block';
        }
    </script>
</body>
</html>