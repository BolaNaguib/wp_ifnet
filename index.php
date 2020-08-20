<?php get_header(); ?>
<!-- START hero -->
<section class="bg-gray bg-cover bg-center bg-no-repeat  py-24 h-screen xx relative" style="background-image: url('http://themes.webdevia.com/factory/wp-content/uploads/2016/06/quality.jpg');">
    <div class="container mx-auto px-5 h-full flex items-center justify-center relative" style="z-index:9">
        <div class="text-center text-white">
            <span class="font-bold"> THE ULTIMATE GOAL</span>
            <h1 class="text-6xl font-bold "> Supplying The World <br> With High Quality <br> Pricessed Food </h1>
            <a href="#" class="bg-secondary px-4 py-2 text-white hover:bg-gray-800 transition duration-500 ease-in-out font-semibold text-sm mt-4 inline-block"> READ MORE </a>
        </div>

    </div>
</section>
<!-- END hero -->
<!-- START CARD -->
<section class="py-4">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="card">
                    <img style="width:100%" loading="lazy" src="https://picsum.photos/375/200.webp?random=<?php echo $i ?>.webp" alt="">
                    <h4 class="text-xl font-semibold py-4 hr-bb relative">Agricultural Engineering</h4>
                    <p class="text-sm text-gray-500">As the world's largest green and clean egerngy specialist of the printing and typesetting industry. Lorem has been the industry.</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<!-- END CARD -->

<!-- START iconscard -->
<section class="py-12">
    <div class="container px-4 mx-auto">
        <div class="text-center py-8 mb-8">
            <h2 class="text-4xl">We Offer First Class Services</h2>
            <h3 class="text 2xl">You’ve got covered by the professionals</h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="col-span-2 flex items-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="">
                            <svg class="h-8 text-secondary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-briefcase fa-w-16">
                                <path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z" class=""></path>
                            </svg>
                            <h4 class="text-xl font-semibold py-2">Investment</h4>
                            <p class="text-sm text-gray-600">For your future est ornare, tempus velit vitae, sodales nunc. Nulla sed posuere est. Quisque et porttitor nice.</p>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>
            <div class="col=span-1">
                <img class="w-full" src="https://picsum.photos/375/375.webp" alt="">
            </div>
        </div>
    </div>
</section>
<!-- END iconscard -->

<!-- START bgSection -->
<section class="bg-gray bg-center bg-no-repeat bg-cover py-24" style="background: url('http://themes.webdevia.com/factory/wp-content/uploads/2016/06/quality.jpg');">
    <div class="container mx-auto px-4 py-24">
        <div class="grid lg:grid-cols-2 gap-6">
            <div></div>
            <div>
                <h3 class="text-5xl text-white font-bold py-4">Quality is our first priority</h3>
                <p class="text-white font-semibold ">Investing in business is easy if you know the rules uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="text-white my-4 inline-block bg-orange px-4 py-2 hover:bg-black transition duration-300 ease-in-out" href="#">GET THE OFFER </a>
            </div>
        </div>
    </div>
</section>
<!-- END gbSection -->




<!-- START NEWS -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center py-8 mb-8">
            <h2 class="text-4xl">News, Updates & Tricks</h2>
        </div>
        <div class="grid lg:grid-cols-3 gap-6">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="max-w-2xl mx-auto bg-white overflow-hidden shadow-md rounded-lg">
                    <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

                    <div class="p-6">
                        <div>
                            <a href="#" class="block text-gray-800 font-semibold text-2xl mt-2 hover:text-gray-600 hover:underline">Secure strong revenue growth</a>
                            <p class="text-sm text-gray-600 mt-2">Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante…</p>
                        </div>

                        <div class="mt-4">
                            <div class="flex items-center justify-between">
                                <a href="#" class="px-2 py-1 bg-gray-800 text-white text-xs font-bold uppercase rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">READ MORE</a>

                                <span class="mx-1 text-gray-600 text-xs">21 SEP 2015</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</section>
<!-- END NEWS -->

<!-- START GAllery -->
<section class="py-12 bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="col-span-3 lg:col-span-1">
                <h3 class="pb text-3xl font-semibold">Here is Our Gallery</h3>
                <hr style="border-bottom: 4px solid #db4436;" class="text-secondary border-solid w-16 inline-block border-t-0 ">
                <p class="mt-2">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div class="col-span-3 lg:col-span-2">
                <div class="grid grid-cols-4 gap-2">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <img style="width:100%" loading="lazy" src="https://picsum.photos/375/200.webp?random=<?php echo $i ?>.webp" alt="">
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</section>



<!-- Start Contact  -->
<section class="py-8">
    <div class="container mx-auto px-4">
        <div class="mb-12">
            <iframe width="100%" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d513.3333745957857!2d31.341013807667913!3d30.05746291043607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f9c3f5ad639%3A0x755e8b0d6e6135d0!2sINETWORK+Middle+East+LLC!5e0!3m2!1sen!2seg!4v1530127042703" allowfullscreen=""></iframe>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <div class=" col-span-3 lg:col-span-1">
                <div class="forminput bg-gray-100 p-4">
                    <h3 class="font-semibold mb-4">Get In Touch With Us</h3>
                    <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]') ?>

                </div>
            </div>
            <div class="col-span-3 lg:col-span-2">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="bg-black text-white rounded mb-4 overflow-hidden">
                        <div class="flex justify-between" style="background-color:#111422">
                            <h3 class="px-8 py-4 font-semibold inline-block">Washington Office</h3>
                            <div class=" inline-block bg-orange flex items-center px-4 text-white">
                                <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12">
                                    <path fill="currentColor" d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z" class=""></path>
                                </svg>
                            </div>

                        </div>
                        <div class="p-8">
                            <p><span>100-120 Ft.Drive NE, Washington, DC 20011</span><br>
                                <span>Phone: +1 202-415-7234</span><br>
                                <span>Email: <a href="mailto:w.industify@gmail.com">w.industify@gmail.com</a></span>
                            </p>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </div>
</section>
<!-- End Contact  -->


<!-- START partnerts -->
<section class="py-8">
    <div class="grid grid-cols-6">
        <?php for ($i = 0; $i < 12; $i++) : ?>

            <div>
                <div class="relative">
                    <img style="width: 100%;" src="http://inetwork-me.com/wp-content/uploads/2019/05/logo.png" alt="">
                    <div class="absolute text-white w-full h-full top-0 flex items-end p-4" style="z-index: 10;">
                        <div><b>INETWORK ME</b>
                            <br>
                            <span>EGYPT</span></div>

                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>
</section>
<!-- END partnerts -->
<?php get_footer(); ?>