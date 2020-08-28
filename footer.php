
<!-- END GAllery -->
<?php
// ACF FIELDS 
$phone = get_field('phone', 'options');
$phone_display = get_field('phone_display', 'options');
$location = get_field('location', 'options');
?>
<footer class="text-white bg-black">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-semibold text-secondary tracking-widest font-semibold mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <p>
          Aenean ut libero vitae sapien ullamcorper semper sed quis turpis. Donec congue felis sed dignissim porttitor. Sed sapien libero, gravida sit amet tortor ac, viverra elementum purus.</p>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-secondary tracking-widest font-semibold mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
        <li class="hidden md:flex items-center text-white mr-3 mb-4">
                            <svg style="min-height: 15px; height:15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16">
                                <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path>
                            </svg>
                            <span class="ml-2 text-sm "><?php echo $location ?> </span>
                        </li>
                        <li class="">
                        <a class='inline-block flex items-center text-white' href="tel:<?php echo $phone ?>">
                            <svg style="min-height: 15px; height:15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16">
                                <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                            </svg>
                            <span class="ml-2 text-sm "><?php echo $phone_display ?></span>
                            </a>
                        </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-secondary tracking-widest font-semibold mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
        <li>
            <a class="text-white hover:text-secondary">First Link</a>
          </li>
          <li>
            <a class="text-white hover:text-secondary">Second Link</a>
          </li>
          <li>
            <a class="text-white hover:text-secondary">Third Link</a>
          </li>
          <li>
            <a class="text-white hover:text-secondary">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-secondary tracking-widest font-semibold mb-3">INSTAGRAM FEED</h2>
       
      </div>
    </div>
  </div>
  <hr class='border border-secondary text-secondary'>
  <div class="bg-black">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <!-- <a class="flex title-font font-medium items-center md:justify-start justify-center text-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">tailblocks</span>
      </a> -->
      <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 AGFA — Made in Egypt By INETWORK-ME
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>




<script>
    const menuButton = document.getElementById('main-menu');
    const menuCloseButton = document.getElementById('menuCloseButton');
    const dropDownMenu = document.getElementById('dropDownMenu');
    menuButton.addEventListener('click', function() {
        dropDownMenu.classList.toggle('showDropDownMenu');
    })
    menuCloseButton.addEventListener('click', function() {
        dropDownMenu.classList.toggle('showDropDownMenu');
    })

    const openSubPhone = document.querySelectorAll('.openSubPhone');
    console.log(openSubPhone);
    for (let i = 0; i < openSubPhone.length; i++) {
        console.log(i);
        openSubPhone[i].addEventListener('click', function(e) {

            let parent = this.parentElement.parentElement.nextElementSibling;
            openSubPhone[i].classList.toggle('rotate-90')

            console.log(parent.nextElementSibling);
            parent.classList.toggle('open')
            console.log(parent);

        })
    }








</script>
</body>

</html>